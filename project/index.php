<?php

/******************************************
 Asisten Pemrogaman 13 & 14
 ******************************************/

include("view/TampilMahasiswa.php");

$tp = new TampilMahasiswa();

// if ($_GET['action'] == 'delete') {
//     $tp->deletePasien($_GET['id']); // menggunakan nama function yang dibuat di view
// } else if ($_GET['action'] == 'add') {
//     $tp->add($_GET);
// } else if ($_GET['action'] == 'update') {
//     $tp->update($_GET['id']);
// } else if ($_POST['action'] == 'addPasien') {
//     $tp->addPasien($_POST['nik'], $_POST['nama'], $_POST['tempat'], $_POST['tl'], $_POST['gender'], $_POST['email'], $_POST['telp']);
// } else if ($_POST['action'] == 'editPasien') {
//     $tp->editPasien($_POST['id'], $_POST['nik'], $_POST['nama'], $_POST['tempat'], $_POST['tl'], $_POST['gender'], $_POST['email'], $_POST['telp']);
// } else {
//     $data = $tp->tampil();
// }

if (isset($_GET['create'])) {
    $tp->create();
} else if (isset($_POST['add'])) {
    $tp->add($_POST);
} else if (isset($_GET['edit'])) {
    $tp->edit($_GET['edit']);
} else if (isset($_POST['update'])) {
    $tp->update($_POST);
} else if (isset($_GET['delete'])) {
    $tp->delete($_GET['delete']);
} else {
    $data = $tp->tampil();
}
