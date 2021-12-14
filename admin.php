<?php
session_start();

if (isset($_POST["logout"])) { unset($_SESSION["user"]); }

if (!isset($_SESSION["user"])) {
    header("Location: eshop.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="cs">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<style lang="en" type="text/css" id="dark-mode-custom-style"></style
<head>
    <meta charset="UTF-8">
    <title>„Obchod“</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>

<div class="flex-container">

    <div class="flex-head"><h1>„Administrace“</h1>
    </div>
    <div class="flex-nav"> <form method="post">
            <input type="hidden" name="logout" value="1"/>
            <input type="submit" value="Logout"/>
        </form></div>

    <div class="flex-section">
        <div>
            <?php

            getFile();

            function getFile()
            {
                $f = file("objednavky.txt");

                $num = count($f);
                echo "<h3> Posledních 5 objednávek</h3>  ";
                echo '<table width=""height=""border="1" style="border-collapse: collapse;">';
                echo "<tr><td>Id</td><td>datum</td><td>zakaznik</td><td>zbozi</td></tr>";
                foreach ($f as $line) {
                    $objednavky = explode("/", $line);
                    $objednavky_formatted = array("id" => $objednavky [0], "datum" => $objednavky[1], "zakaznik" => $objednavky [3],"ido" => $objednavky [4], "zbozi" => $objednavky[5]);
                    if ($objednavky_formatted['id'] >= ($num-4)   ){
                        echo "<tr>";
                        echo "<td>" . $objednavky_formatted['id'] . "</td>";
                        echo "<td>" . $objednavky_formatted['datum'] . "</td>";
                        echo "<td>" . $objednavky_formatted['zakaznik'] . "</td>";
                        echo "<td>" . $objednavky_formatted['ido'] . "</td>";
                        echo "<td>" . $objednavky_formatted['zbozi'] . "</td>";
                        echo "</tr>";
                    }

                }
                echo "</table>";
            }
            ?>
        </div>
        <div>
            <?php



            function getdnes()
            {
                $f = file("objednavky.txt");

                $num = count($f);
                echo "<h3> Dnešní objednavky</h3>  ";
                echo '<table width=""height=""border="1" style="border-collapse: collapse;">';
                echo "<tr><td>Id</td><td>datum</td><td>zakaznik</td><td>zbozi</td></tr>";
     
                foreach ($f as $line) {
                    $objednavky = explode("/", $line);
                    $objednavky_formatted = array("id" => $objednavky [0], "datum" => $objednavky[1], "zakaznik" => $objednavky [3],"ido" => $objednavky [4], "zbozi" => $objednavky[5]);
                    if( $objednavky_formatted['datum'] == date("Y-m-d")) {
                        echo "<tr>";
                        echo "<td>" . $objednavky_formatted['id'] . "</td>";
                        echo "<td>" . $objednavky_formatted['datum'] . "</td>";
                        echo "<td>" . $objednavky_formatted['zakaznik'] . "</td>";
                        echo "<td>" . $objednavky_formatted['ido'] . "</td>";
                        echo "<td>" . $objednavky_formatted['zbozi'] . "</td>";
                        echo "</tr>";
                    }


                } echo "</table>";
            }getdnes();
            ?>
        </div>
        <div>
            <h3> Objednávky ze dne</h3>
            <form action="admin.php" method="get" style="margin: 1rem;" >

                <label for="datum">Zvol datum: </label>
                <input type="date" id="datum" name="datum">

                <input type="submit" value="Submit">
            </form>

            <?php

            function getdatum()
            {
                $f = file("objednavky.txt");

                $num = count($f);
                echo "  ";
                echo '<table width=""height=""border="1" style="border-collapse: collapse;">';
                echo "<tr><td>Id</td><td>datum</td><td>zakaznik</td><td>zbozi</td</tr>";
                echo "<tr>";
                foreach ($f as $line) {
                    $objednavky = explode("/", $line);
                    $objednavky_formatted = array("id" => $objednavky [0], "datum" => $objednavky[1], "zakaznik" => $objednavky [3],"ido" => $objednavky [4], "zbozi" => $objednavky[5]);
                    if(isset($_GET["datum"])){
                        if( $objednavky_formatted['datum'] == ($_GET["datum"])) {
                            echo "<td>" . $objednavky_formatted['id'] . "</td>";
                            echo "<td>" . $objednavky_formatted['datum'] . "</td>";
                            echo "<td>" . $objednavky_formatted['zakaznik'] . "</td>";
                            echo "<td>" . $objednavky_formatted['ido'] . "</td>";
                            echo "<td>" . $objednavky_formatted['zbozi'] . "</td>";
                            echo "</tr>";
                        }
                    }


                }echo "</table>";
            }getdatum();
            ?>
        </div>
        <div>
            <h3>Počet objednávek za den v daném období</h3>
            <form action="admin.php" method="get" style="margin: 1rem;" >

                <label for="datum1">Zvol datum od: </label>
                <input type="date" id="datum1" name="datum1">
                <label for="datum2"> do: </label>
                <input type="date" id="datum2" name="datum2">

                <input type="submit" value="Submit">
            </form>
            <?php

           function getobdobi()
            {
                $f = file("objednavky.txt");

                $num = count($f);
                echo "  ";
                echo '<table width=""height=""border="1" style="border-collapse: collapse;">';
                echo "<tr><td>Id</td><td>datum</td><td>zakaznik</td><td>zbozi</td></tr>";
      
                 foreach ($f as $line) {
                    $objednavky = explode("/", $line);
                    $objednavky_formatted = array("id" => $objednavky [0], "datum" => $objednavky[1], "zakaznik" => $objednavky [3],"ido" => $objednavky [4], "zbozi" => $objednavky[5]);
                    if(isset($_GET["datum1"])){
                        if( $objednavky_formatted['datum'] >= ($_GET["datum1"])) {
                            do {
                                echo "<tr>";
                                echo "<td>" . $objednavky_formatted['id'] . "</td>";
                                echo "<td>" . $objednavky_formatted['datum'] . "</td>";
                                echo "<td>" . $objednavky_formatted['zakaznik'] . "</td>";
                                echo "<td>" . $objednavky_formatted['ido'] . "</td>";
                                echo "<td>" . $objednavky_formatted['zbozi'] . "</td>";
                                echo "</tr>";
                            }while ($objednavky_formatted['datum'] < ($_GET["datum2"]));

                        }
                    }


                }echo "</table>";
            }getobdobi();
            ?>
        </div>


    </div>
    <div class="flex-foot">
    <p>©0ndra_m_ 2020-<?php echo date("Y");?>

    </div>

</body>
</html>