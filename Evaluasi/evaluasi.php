<?php

// echo "Masukkan Nama Barang : ";
// $produk = strtoupper(trim(fgets(STDIN)));
// echo $produk . PHP_EOL;
// desc:
// echo "Masukkan description barang : ";
// $desc =str_word_count (trim(fgets(STDIN)));
// if ($desc>4){
//     echo "Deskripsi terlalu panjang\n";
//     goto desc;
// }
// code:
// echo "Masukan Kode Produksi : ";
// $code = (trim(fgets(STDIN)));
// if (strlen(!is_numeric($code))>8){
//     echo "input invalid\n";
//     goto code;
// }

// $string = 'Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab';
// print_r(explode('&',$string,6));

// $array= [-2,4,-18,9,0,21,-5];
// rsort($array);
// var_dump ($array);

$data = [
    "id" => 582,
    "username" => "Fulan",
    "email" => "fulan@gmail.com",
    "password" => "123fulan321",
    "password_confirmation" => "123fulan321",
 ];

array_push($data,"nomor_telepon");
array_splice($data,4,1,);
var_dump($data);

































































































































































































