<?php
$angka = [1,2];
function tambah($angka1, $angka2) {
    return $angka1 + $angka2;
}
echo call_user_func_array('tambah', $angka); // 3
//jadi intinya call_user_func_array berguna untuk memanggil aray dan mengirimkan array tersebut sebagai parameter ke fungsi yang dituju