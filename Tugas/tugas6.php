<?php
$chance = 3;
$draw = 0;
$lost = 0;
$win = 0;


echo "<><><夜こそ><><>\n";
echo "Watashi の Game\n";
echo "ぉぉJANKENPONぉぉ\n";
echo "<><><><><><><><>\n";
echo "Di Game Ini Kalian Punya $chance Kesempatan\n";

while (true) {
echo "Silahkan Kalian pilih\n";
echo "><Saisho Wa Guu><\n";
echo "(1) Guu, (2) Paa, (3) Choki\n";
echo "Pilih : ";    
    $janken = ['1' => 'Guu', '2' => 'Paa', '3' => 'Choki'];
    // $pilihan = trim(fgets(STDIN));
    // $player = $janken[$pilihan] ;
    // $comp = shuffle($janken);
    $player = trim(fgets(STDIN));
    $comp = array_rand($janken);
    echo "Player = " . $janken[$player] . "\n";
    echo "Comp = ". $janken[$comp] . "\n";

    $drew = $player == $comp;
    $won = ($player == '1' && $comp == '3') || ($player == '2' && $comp == '1') || ($player   == '3' && $comp == '2');

    if ($drew){
        echo "><><Draw Coba><><\n";
        $draw++;
    $chance--;
    echo "Tinggal $chance Kesempatan\n";
}else if ($won){
    echo "><><Omedetou Senpai><><\n";
    $win++;
    $chance--;
    echo "Tinggal $chance Kesempatan\n";
}else{
    echo "><><Tch Kudarane><><\n";
    $lost++;
    $chance--;
    echo "Tinggal $chance Kesempatan\n";
}
if ($chance == 0){
    echo "<^><^><^><^><^><^><^><^>\n";
    echo "Total Win : $win\n";
    echo "Total Draw : $draw\n";
    echo "Total Lose : $lost\n";
    if ($win > $lost){
        echo "()()()()()()()()()()()()\n";
        echo "()()(YATTA OMEDETOU)()()\n";
    }else if ($win < $lost){
        echo "()()()()()()()()()()()()\n";
        echo "()()KUDARANAI NINGEN()()\n";
    }
}

echo "Main Lagi ? (Y/N) : ";
$balik = strtoupper(trim(fgets(STDIN)));
if ($balik == "Y"){

}else if ($balik == "N") {
    echo "<^><^><Arigatou Senpai><^><^>\n";
    exit;
}
}
// var_dump($drew);
// var_dump($won);
















