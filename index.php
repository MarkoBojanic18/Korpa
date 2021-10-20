<?php

$proizvodi = array(
    array(
        'id'=>1,
        'naziv'=>'Laptop',
        'cena'=>800,
        'kolicina' => 1
    ),
    array(
        'id'=>2,
        'naziv'=>'Mis',
        'cena'=>200,
        'kolicina' => 1
    ),
    array(
        'id'=>3,
        'naziv'=>'Slusalice',
        'cena'=>100,
        'kolicina' => 1
    ),
    array(
        'id'=>4,
        'naziv'=>'Tastatura',
        'cena'=>300,
        'kolicina' => 1
    )
);

session_start();
if(!isset($_SESSION['korpa'])){
    $_SESSION['korpa'] = array();
}

if(isset($_POST["submit"]) && $_POST["submit"] == "Kupi"){
    $_SESSION['korpa'][] = $_POST["id"];
    header('location: .');
    exit();
}

if(isset($_POST["submit"]) && $_POST["submit"] == "Odustani"){
    $_SESSION['korpa'] = array();
    header('location: ?vidi_korpu');
    exit();
}

if(isset($_GET["vidi_korpu"])){
    $korpa = array();
    $ukupno = 0;
    $ukupno_proizvoda = 0;
    $pomocna = 0;

    $kolicinaProizvodaLaptop = 0;
    $kolicinaProizvodaMis = 0;
    $kolicinaProizvodaSlusalice = 0;
    $kolicinaProizvodaTastatura = 0;


    foreach($_SESSION['korpa'] as $id){
        foreach($proizvodi as $pr){
            if($pr['id'] == $id){
                if(count($korpa)>0){
                    $pomocna = 0;
                    $pomocnaZaKolicinu = 1;
                    foreach($korpa as $stavka){
                        if($stavka['id'] == $pr['id']){
                            $ukupno +=$pr['cena'];
                            $ukupno_proizvoda +=1;
                            $pomocna = 1;
                            break;
                        }
                    }
                    if($pomocna == 0){
                        $korpa[] = $pr;
                        $ukupno +=$pr['cena'];
                        $ukupno_proizvoda +=1;
                    }
                }
                else{
                $korpa[] = $pr;
                $ukupno +=$pr['cena'];
                $ukupno_proizvoda +=1;
                }

                break;
            }
        }

    }

    foreach($_SESSION['korpa'] as $id){
        switch($id){
            case 1:{
                $kolicinaProizvodaLaptop++;
                break;
            }
            case 2:{
                $kolicinaProizvodaMis++;
                break;
            }
            case 3:{
                $kolicinaProizvodaSlusalice++;
                break;
            }
            case 4:{
                $kolicinaProizvodaTastatura++;
                break;
            }
        }
    }
    
    
    include "korpa.php";
    exit();
}

include "katalog.php"; 
    
?>