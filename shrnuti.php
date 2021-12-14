<!DOCTYPE html>
<html lang="cz">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<style lang="cz" type="text/css" id="dark-mode-custom-style"></style
<head>
    <title>„Obchod“</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

<div class="flex-container">

    <div class="flex-head"><h1>„Obchod“</h1>
    </div>
    <div class="flex-nav"> <a href="login.php">Login   </a></div>

    <div class="flex-section">


        <div>

            <?php
            class Kraj {

                private $id;
                private $name;
                function __construct($id, $name) {
                    $this->id = $id;
                    $this->name = $name;
                }

                public function getId() {
                    return $this->id;
                }

                function getName() {
                    return $this->name;
                }
            }

            $kraje = array();
            $kraje[]=new Kraj("k1", "Hlavní město Praha"  );
            $kraje[]=new Kraj("k2", "Jihočeský kraj"  );
            $kraje[]=new Kraj("k3", "Jihomoravský kraj"  );
            $kraje[]=new Kraj("k4", "Karlovarský kraj"  );
            $kraje[]=new Kraj("k5", "Kraj Vysočina"  );
            $kraje[]=new Kraj("k6","Královéhradecký kraj" );
            $kraje[]=new Kraj("k7","Liberecký kraj" );
            $kraje[]=new Kraj("k8","Moravskoslezský kraj" );
            $kraje[]=new Kraj("k9","Olomoucký kraj" );
            $kraje[]=new Kraj("k10","Pardubický kraj" );
            $kraje[]=new Kraj("k11","Plzeňský kraj" );
            $kraje[]=new Kraj("k12","Středočeský kraj" );
            $kraje[]=new Kraj("k13","Ústecký kraj" );
            $kraje[]=new Kraj("k14","Zlínský kraj" );
            function vyber(&$kraje) {

                echo  $_POST["kraj"];

            }

            echo "Oslovení : " ;
            echo $_POST['title'];
            echo "<br>";
            echo "Jméno : " ;
            echo $_POST['jmeno'];
            echo "<br>";
            echo "Příjmení : " ;
            echo $_POST['prijmeni'];
            echo "<br>";
            echo "Město : " ;
            echo $_POST['mesto'];
            echo "<br>";
            echo "Kraj : " ;
            vyber($kraje);
            echo "<br>";
            echo "E-Mail : " ;
            echo $_POST['email'];
            echo "<br>";
            echo "Telefoní číslo : " ;
            echo $_POST['cislo'];
            echo "<br>";



            savezakaznik($_POST['title'], $_POST['jmeno'], $_POST['prijmeni'], $_POST['mesto'], $_POST['cislo'], $_POST['email']);
            function savezakaznik($str) {
                $id = "";
                $zakaznici = fopen("zakaznici.txt", "a") or die("Unable to open file!");


                $id = getzakaznikNumber();
                $str = $id . "/" .$_POST['title']. "/".$_POST['jmeno']. "/".$_POST['prijmeni']."/".$_POST['mesto']."/".$_POST['cislo']."/". $_POST['email']. PHP_EOL;
                fwrite($zakaznici, $str);

                fclose($zakaznici);
            }

            function getzakaznikNumber() {
                $f = file("zakaznici.txt");
                $num;
                $pos;
                $num = count($f) - 1;
                $pos = strpos($f[$num], "/");
                $id = substr($f[$num], 0, $pos);
                $id = (int) $id + 1;
                return $id;
            }
            saveobjednavka( $_POST['jmeno'], $_POST['prijmeni']);
            function   saveobjednavka($str) {
                $ido = "";
                $objednavky= fopen("objednavky.txt", "a") or die("Unable to open file!");

                $id = getzakaznikNumber();
                $ido = getobjednavkaNumber();
                $str = $ido . "/" . date("Y-m-d") ."/".$id."/".$_POST['jmeno']. ",".$_POST['prijmeni'].PHP_EOL;
                fwrite($objednavky, $str);

                $objednavky;
                fclose($objednavky);
            }

            function getobjednavkaNumber() {
                $f = file("objednavky.txt");
                $num;
                $pos;
                $num = count($f) - 1;
                $pos = strpos($f[$num], "/");
                $ido = substr($f[$num], 0, $pos);
                $ido = (int) $ido + 1;
                return $ido;
            }
            ?>
        </div>

    </div>
    <div class="flex-foot">
        <p>©0ndra_m_ 2020-<?php echo date("Y");?>

    </div>
</div>
</body>