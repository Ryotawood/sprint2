<?php
// buat inputan dinamis akan memunculkan nama setiap katanya akan kapital
// lalu ditambah ada prodak deskripsi harga dibawah harga harus int lalu ada format 
// RP. 1.000.000,00

// $produk = trim (fgets(STDIN));
// echo (ucwords(strtolower($produk))).PHP_EOL;
// $desc = trim(fgets(STDIN)).PHP_EOL;
// echo (ucwords(strtolower($desc))).PHP_EOL;
// $harga = (int)(trim(fgets(STDIN))).PHP_EOL;
// echo (number_format($harga,0,"",".")).PHP_EOL;

// balik:
// echo "名前を入力する製品。 : ";
// $produk = ucwords(strtolower(trim(fgets(STDIN))));
// echo "説明を入力してください。 : ";
// $desc = ucwords(strtolower(trim(fgets(STDIN))));
// harga:
// echo "価格を入力してください。 : ";
// $harga = trim(fgets(STDIN));

// if(is_numeric ($produk) || is_numeric($desc)){
//     echo "不正解\n";
//     echo "---------\n";
//     goto balik;
// }

// echo "商品名 : $produk\n";
// echo "説明 : $desc\n";
// if (is_numeric($harga)){
//     $harga = number_format($harga,0,"",".");
//     echo "価格 : RP. $harga\n";
// }else {
//     echo "不正解\n";
//     echo "---------\n";
//     goto balik;
// }

// manipulasi array
$array1 = ["Buku", "Pensil", "Pulpen", "Penghapus", "Penggaris"];
$array2 = [
    "Merah" => "Apel",
    "Kuning" => "Lemon",
    "Hijau" => "Mangga"
];

// implode : array -> string
// echo implode("-", $array1) . "\n";

// // explode : string -> array
// var_dump(explode(",", "Buku,Pensil,Pulpen,Penghapus,Penggaris"));

// // count : menghitung jumlah data array
// echo count(array1).PHP_EOL;

// // mengubah salah satu data dalam array
// $array2["Hijau"] = "Melon";
// // echo $array2["Hijau"];
// $array1[3]= "Papan Tulis";
// // var_dump(array1);
// foreach (array1 as $key => $value){
//     echo $key . " : " . $value . PHP_EOL;
// }

// // menghapus data array
// unset($array2["Hijau"]);
// var_dump($array1);
// // unset($array1);
// $array1 = NULL;
// var_dump($array1);

// menambah data array
// $array2[] = "Papan Tulis";
// $array2["nomor"] = "Kertas";
// $array2[] = "Tipp-Ex";
// var_dump($array2);

//menggabungkan beberapa array
// echo "array 1 dan 2 digabungkan menjadi array 3 : \n";
// $array3 =array_merge($array1, $array2);
// $keys = array_keys($array3);
// $values3 = array_values($array3);
// var_dump($values3);
// foreach ($keys3 as $keys) {
    // echo $keys .PHP_EOL;
// }

// mengurutkan data array
// $numer = [3,1,2,4,5,3];
// rsort($numer);// dari besar ke kecil
// sort($numer);// dari kecil ke besar
// foreach ($numer as $key => $value){
    // echo $value . PHP_EOL;
// }

$jankenpon = ['batu','kertas','gunting'];
shuffle($jankenpon);
echo $jankenpon[0];




































































































































































































































































































































































































