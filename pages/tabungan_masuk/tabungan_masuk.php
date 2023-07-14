<?php
@$page = $_GET['ares'];

switch ($page)
{

    case 'tambah':
        include 'tambah.php';
    break;

    case 'proses_tambah':
        include 'proses_tambah.php';
    break;

    case 'edit':
        include 'edit.php';
    break;

    case 'hapus':	
        include "hapus.php";
            break;

    case 'proses_hapus': 	
        include "proses_hapus.php";
            break;

    case 'proses_edit_foto': 	
        include "proses_edit_foto.php";
            break;

    case 'laporan': 	
        include "../laporan/laporan_tabunganM.php";
            break;

    default:
        include 'tampil.php';
    break;
}
?>