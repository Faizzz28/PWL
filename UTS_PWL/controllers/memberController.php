<?php
session_start();
require_once '../koneksi.php';
require_once '../models/Member.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = [$username, $password];

$obj = new Member();
$rs = obj->cekLogin($data);

if (!empty($rs)) {
    $_SESSION['MEMBER'] = $rs;

    header('location:http://localhost/UTS_PWL/index.php?hal=dataPegawai');
}
else {
    header('location:http://localhost/UTS_PWL/index.php?hal=gagalLogin');
}