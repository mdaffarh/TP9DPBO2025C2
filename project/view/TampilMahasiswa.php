<?php

/******************************************
 Asisten Pemrogaman 13 & 14
 ******************************************/

include("KontrakView.php");
include("presenter/ProsesMahasiswa.php");

class TampilMahasiswa implements KontrakView
{
	private $prosesmahasiswa; // Presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosesmahasiswa = new ProsesMahasiswa();
	}

	function tampil()
	{
		$this->prosesmahasiswa->prosesDataMahasiswa();
		$data = null;

		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosesmahasiswa->getSize(); $i++) {
			$no = $i + 1;
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $this->prosesmahasiswa->getNim($i) . "</td>
			<td>" . $this->prosesmahasiswa->getNama($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTempat($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTl($i) . "</td>
			<td>" . $this->prosesmahasiswa->getGender($i) . "</td>
			<td>" . $this->prosesmahasiswa->getEmail($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTelp($i) . "</td>
			<td>
				<div class='dropdown'>
					<button class='btn btn-secondary dropdown-toggle' type='button' id='dropdown{$this->prosesmahasiswa->getId($i)}' data-bs-toggle='dropdown' aria-expanded='false'>
					</button>
					<ul class='dropdown-menu' aria-labelledby='dropdown{$this->prosesmahasiswa->getId($i)}'>
						<li><a class='dropdown-item' href='index.php?edit=" . $this->prosesmahasiswa->getId($i) . "'>Edit</a></li>
						<li><a class='dropdown-item' href='index.php?delete=" . $this->prosesmahasiswa->getId($i) . "'>Hapus</a></li>
					</ul>
				</div>
			
			</td> </tr>";
		}
		// Membaca template index.html
		$this->tpl = new Template("templates/index.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function create()
	{
		// Membaca template create.html
		$this->tpl = new Template("templates/create.html");

		// Menampilkan ke layar
		$this->tpl->write();
	}

	function edit($id)
	{
		$this->prosesmahasiswa->prosesDataMahasiswa();

		for ($i = 0; $i < $this->prosesmahasiswa->getSize(); $i++) {
			if ($id == $this->prosesmahasiswa->getId($i)) {

				// Membaca template skin.html
				$this->tpl = new Template("templates/edit.html");

				// buat select gender
				$gender = $this->prosesmahasiswa->getGender($i);
				$genderSelect = "<div class='mb-3'>
				  <label class='form-label'>Gender</label>
				  <select title='gender' class='form-select' name='gender' required>
					<option value='' disabled >Pilih Gender</option>
					<option value='Laki-laki' " . ($gender == 'Laki-laki' ? 'selected' : '') . ">Laki-laki</option>
					<option value='Perempuan' " . ($gender == 'Perempuan' ? 'selected' : '') . ">Perempuan</option>
				  </select>
				</div>";

				$this->tpl->replace("GENDER_SELECT", $genderSelect);

				// Mengganti kode Data_Tabel dengan data yang sudah diproses
				$this->tpl->replace("ID_VALUE", $id);
				$this->tpl->replace("NIM_VALUE", $this->prosesmahasiswa->getNim($i));
				$this->tpl->replace("NAMA_VALUE", $this->prosesmahasiswa->getNama($i));
				$this->tpl->replace("TEMPAT_VALUE", $this->prosesmahasiswa->getTempat($i));
				$this->tpl->replace("TL_VALUE", $this->prosesmahasiswa->getTl($i));
				$this->tpl->replace("EMAIL_VALUE", $this->prosesmahasiswa->getEmail($i));
				$this->tpl->replace("TELP_VALUE", $this->prosesmahasiswa->getTelp($i));


				// Menampilkan ke layar
				$this->tpl->write();
			}
		}
	}

	function add($data)
	{
		$this->prosesmahasiswa->add($data);
		header("location:index.php");
	}

	function update($data)
	{
		$this->prosesmahasiswa->update($data);
		header("location:index.php");
	}

	function delete($id)
	{
		$this->prosesmahasiswa->delete($id);
		header("location:index.php");
	}
}
