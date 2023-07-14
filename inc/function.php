<?php

function rupiah($ANGKA) {
    if ($ANGKA <= 0) {
        return "Rp. " . number_format($ANGKA, 2, ',','.');;
    } else {
        return "Rp. ". number_format($ANGKA, 2, ',','.');
    }
}
//Cek nama user
function userlogin($login)
{
	include "koneksi.php";

	$USER = $login;
	$QUERY = mysqli_query($KONEKSI, "SELECT * FROM tbl_user WHERE username='$USER' ");

	$DATA = mysqli_fetch_array($QUERY);
	$PENGGUNA = $DATA['nama_user'];
	return $PENGGUNA;
}
//echo userlogin($_SESSION['username']);


// Function untuk penomoran ID

function AutoNumber($tabel, $kolom, $lebar = 0, $awalan)
{
	include "koneksi.php";

	$AUTO = mysqli_query($KONEKSI, "SELECT $kolom FROM $tabel ORDER BY $kolom desc limit 1") or die(mysqli_error($AUTO));

	$JUMLAH_RECORD = mysqli_num_rows($AUTO);
	if ($JUMLAH_RECORD == 0) {
		$NUMBER = 1;
	} else {
		$ROW = mysqli_fetch_array($AUTO);
		$NUMBER = intval(substr($ROW[0], strlen($awalan))) + 1;
	}

	if ($lebar > 0) {
		$ANGKA = $awalan . str_pad($NUMBER, $lebar, "0", STR_PAD_LEFT);
	} else {
		$ANGKA = $awalan . $NUMBER;
	}
	return $ANGKA;
}

function AutoNumber1($tabel, $kolom, $lebar = 0, $awalan = '', $awalan_nomor = '') {
    include "koneksi.php";

    $query = "SELECT $kolom FROM $tabel WHERE $kolom LIKE '$awalan%' ORDER BY $kolom DESC LIMIT 1";
    $auto = mysqli_query($KONEKSI, $query) or die(mysqli_connect_error($auto));

    $num_rows = mysqli_num_rows($auto);
    if ($num_rows == 0) {
        $number = 1;
    } else {
        $row = mysqli_fetch_array($auto);
        $number = intval(substr($row[0], strlen($awalan))) + 1;
    }

    if ($lebar > 0) {
        $angka = $awalan_nomor.str_pad($number, $lebar, "0", STR_PAD_LEFT);
    } else {
        $angka = $awalan_nomor.$number;
    }

    return $angka;
};

// Untuk test function autonumber
//echo autonumber ("tbl_user", "id_user",3,"PGN");


// Function untuk kode berdasarkan tanggal
function kodetanggal($tabel, $kolom, $awalan)
{
	include "koneksi.php";
	//Mengatur TIMEZONE
	date_default_timezone_set("Asia/Jakarta");
	$date = date("Y-m-d");

	// Mengurutkan berdasarkan tanggal
	$QUERY = mysqli_query($KONEKSI, "SELECT max($kolom) as maxKode FROM $tabel");
	$DATA = mysqli_fetch_array($QUERY);
	$NO_ORDER = $DATA['maxKode'];
	$NO_URUT = (int) substr($NO_ORDER, 9, 3);
	$NO_URUT++;
	$TAHUN = substr($date, 0, 4);
	$BULAN = substr($date, 5, 2);
	$ID_ORDER = $awalan . $TAHUN . $BULAN . sprintf("%03s", $NO_URUT);
}
echo kodetanggal("tbl_nasabah", "id_nasabah", "NSB");


//Fucntion untuk nomer tabungan siswa

function KodeTabungan($tabel, $kolom, $lebar = 0, $jenis, $awalan)
{
	include "koneksi.php";

	$AUTO = mysqli_query($KONEKSI, "SELECT $kolom FROM $tabel WHERE jenis_transaksi=$jenis ORDER BY $kolom desc limit 1") or die(mysqli_error($AUTO));

	$JUMLAH_RECORD = mysqli_num_rows($AUTO);
	if ($JUMLAH_RECORD == 0) {
		$NUMBER = 1;
	} else {
		$ROW = mysqli_fetch_array($AUTO);
		$NUMBER = intval(substr($ROW[0], strlen($awalan))) + 1;
	}

	if ($lebar > 0) {
		$ANGKA = $awalan . str_pad($NUMBER, $lebar, "0", STR_PAD_LEFT);
	} else {
		$ANGKA = $awalan . $NUMBER;
	}
	return $ANGKA;
}
//echo kodetabungan("tbl_transaksi", "kode_transaksi", 7, 2, "STS");

