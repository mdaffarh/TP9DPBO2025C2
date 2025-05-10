<?php

/******************************************
 Asisten Pemrogaman 13 & 14
 ******************************************/

// Kelas yang berisikan tabel dari mahasiswa
class TabelMahasiswa extends DB
{
	function getMahasiswa()
	{
		// Query mysql select data mahasiswa
		$query = "SELECT * FROM mahasiswa";

		// Mengeksekusi query
		return $this->execute($query);
	}
	
	function add($data)
	{
		$nim = $data['nim'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		// Lengkapi Query
		$query = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function delete($id)
	{
		// Lengkapi Query
		$query = "DELETE FROM mahasiswa WHERE id = '$id'";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function update($data)
	{
		$id = $data['id'];
		$nim = $data['nim'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		$query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', tempat = '$tempat', tl = '$tl', gender = '$gender', email = '$email', telp = '$telp' WHERE id = '$id'";

		// Mengeksekusi query
		return $this->execute($query);
	}
}
