<?php

//1
// echo "Nama : ";
// $nama = ucwords(strtolower(trim(fgets(STDIN))));
// moto:
// echo "Masukkan Motto Hidup : ";
// $motto = (trim(fgets(STDIN)));
// echo "Nama : $nama\n";
// if (str_word_count($motto)<3){
//     echo "Motto Hidup Terlalu Pendek\n";
//     goto moto;
// } else {
//     echo "Motto : $motto\n";
// }
// echo "Masukkan NIS : ";
// $nis = (int) (trim(fgets(STDIN)));
// if (strlen($nis)>6){
//     echo "Data Tidak Valid";
// }else {
//     echo "NIS : $nis\n";
// }
// var_dump($nis);

// 2

// echo "Masukkan HP : ";
// $hp = trim(fgets(STDIN));
// if (substr($hp,0,2)<20){
//     echo "low HP";
// }else if (substr($hp,0,2)<40){
//     echo "enough HP";
// }else if (substr($hp,0,2)>70){
//     echo "good HP";
// }

// 3

// $array = ['tidak','semua','yang','tidak berhasil','itu','kegagalan'];
// echo implode(" ", $array);

// 4

// $genap = 2;
// $ganjil = 2;
// $array = [5,26,79,4,63,22,17,9];
// $array1 = [5,26,79,4,63,22,17,9];
// sort($array);
// foreach ($array as $key => $value) {
//     if ($value % $genap  == 0){
//     echo "Genap : $value".PHP_EOL;} 
//     }
//     foreach ($array1 as $key1 => $value1) {
//         if ($value1 % $ganjil  == 2){
//         echo "Ganjil : $value".PHP_EOL;} 
//         }


// 5 6 7

// $data = [
//     "id" => 582,
//     "nama" => "pisang",
//     "warna" => "kuning",
//     "stok" => "51"
//  ];
// $data["rasa"] = "manis";
// unset($data["warna"]);
// $data["stok"] = "32";
// foreach ($data as $key => $value) {
//     echo "$value".PHP_EOL;
// }


