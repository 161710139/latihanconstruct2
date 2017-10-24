<?php
require_once 'hp.php';

$hape= new hape('Samsung',2015,'Android',2);
echo 'Nama Merk...'.$hape->get_merk(). '<br>';
echo 'Tahun Keluaran...'.$hape->get_tahun(). '<br>';
echo 'Operasi Sistem...'.$hape->get_os(). '<br>';
echo 'Ram...'.$hape->get_ram(). '<br>';
?>