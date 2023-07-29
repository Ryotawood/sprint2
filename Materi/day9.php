<?php
// (CRUD) Create-Read-Update-Delete
// echo "kore ga watashi no mird-Update-Delete
// echo "kore ga watashi no mirai ka\n";





// $array = [];
// // $array [] ai ka\n";
// $array = [];
// // $array [] = "lola";
// while(true){
//     // echo count($array). "\n";
// echo "Masukkan : ";
// $value = trim(fgets(STDIN));
// $array[count($array)+1] = $value;
// foreach ($array as $key => $value){
//     echo "$key. $value" . PHP_EOL;
// } 
// echo "Edit data (y/n) ? ";
// $edit = trim(fgets(STDIN));
// if ($edit == "y"){
//     echo "pilih data yang ingin diedit : ";
//     $edit = trim (fgets(STDIN));
//     echo "anda akan mengedit $array[$edit]\n";
//     echo "Masukkan data baru : ";
//     $update = trim(fgets(STDIN));
//     $array[$edit] = $update;
    
// }
//     echo "Hapus data (y/n) ?";
//     $hapus = trim(fgets(STDIN));
//     if ($hapus == "y"){
//         //delete
//         //menimpa data array terlebih dahulu
//         //barulah nanti akan dihapus data yang bagian akhir
//         echo "pilih data yang ingin dihapus : ";
//         $delete = trim(fgets(STDIN));
//         echo "anda delete $array[$delete]\n";
//         for($i =$delete; $i< count($array); $i++){
//             $array[$i] = $array[$i+1];
//         }
//         unset($array[$delete]);
//     }
// }

//function : wadah yang berisi suatu program tertentu yang bisa kita gunakan kalau kita memanggilnya
// function sayHello(){
//     echo "Hello function" . PHP_EOL;
// }

// sayHello();
// sayHello();


// $nama = "Faqih";
// function notif($nama){//parameter : variable yang akan kita gunakan dalam function
//     echo "$nama Telah terdaftar\n";
// }

// notif("$nama"); // argument : value yang akan dikirimkan parameter ketika memanggil function


// menggunakan keyword global
// $nama = "Faqih";
// function notif(){//parameter : variable yang akan kita gunakan dalam function
//     global $nama;
//     echo "$nama Telah terdaftar\n";
// }
// notif();

// default parameter
// function sayHi($nama,$greeting = "Good Morning"){
//     echo "Hello $nama $greeting\n";
// }
// sayHi("Faqih","Selamat pagi");

//type declaration
// function harusangka(int $angka){
//     echo $angka . "\n";
// }

// harusangka(2);

// function sum(int $a, int $b){
//     $t= $a + $b;
//     echo "$a + $b = $t\n";
// }

// sum("100","100");

// function total(...$jumlah){
//     // var_dump($jumlah);
//     $total = 0;
//     foreach ($jumlah as $value){
//         $total += $value;
//     }
//     echo "Total : $total\n";
// }

// total(1,2,3,4,5,6);
// sama seperti
// array = [1,2,3,4,5,6];



// function listname (...$nama){
//     foreach ($nama as $value){
//         echo "value\n";
//     }
// }

// listname("Faqih","Ahmad","Ryota");

// function sum(int $a, int $b){
//     $t = $a + $b;
//     return $t;
// }
    
//     echo sum(100,100);
    
    // function sum(int $a, int $b):int
    // {
    //     $t = $a + $b;
    //     $t = "ada";
    //     return $t;
    // }
        
    //     echo sum(100,100);
    




// echo "Masukkan : ";
// $prank = trim(fgets(STDIN));
// echo "SELAMAT ANDA KENA PRANK HUHAUHAUHAUHAUH\n";






















