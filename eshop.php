<!DOCTYPE html>
<html lang="cs">
<link type="text/css" rel="stylesheet" id="dark-mode-general-link">
<link type="text/css" rel="stylesheet" id="dark-mode-custom-link">
<style lang="cz" type="text/css" id="dark-mode-custom-style"></style
<head>
<meta charset="UTF-8">
    <title>„Obchod“</title>
    
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

            getFile();

            function getFile()
            {
                $f = file("zbozi.txt");

                $num = count($f);
                echo "<h3> Produkty</h3>  ";
                echo '<table width=""height=""border="1" style="border-collapse: collapse;">';
                echo "<tr><td>Název</td><td>Popis</td><td>Cena</td><td>⬜</td></tr>";
                foreach ($f as $line) {
                    $produkty = explode("/", $line);
                    $produkty_formatted = array("id" => $produkty[0], "nazev" => $produkty[1], "info" => $produkty[2], "cena" => number_format($produkty[3], 2, ',', ' ',));
                    echo "<tr>";
                        echo "<td><label for=" . $produkty_formatted['id'] . "> ". $produkty_formatted['nazev'] . "</label></td>";
                        echo "<td>" . $produkty_formatted['info'] . "</td>";
                        echo "<td class='pricel-cell'>" . $produkty_formatted['cena'] . "</td>";
                        echo "<td class='checkbox-cell'> <input type='checkbox' id=" . $produkty_formatted['id'] . " name=" . $produkty_formatted['id'] . " value=" . $produkty_formatted['id'] . "/></td>";
                        echo "</tr>";
                }
                echo "</table>";
            }
            ?>
        </div>

        <div>

            <h2>Zadání kontakních údajů</h2>
            <table width=" "height="199"border="1" style="border-collapse: collapse;">
                <tr>
                    <form action="shrnuti.php" method="post" >
                        <td> Oslovení:
                        <td><input type="radio" name="title" value="Pan">Pan
                            <input type="radio" name="title" value="Paní">Paní
                            <input type="radio" name="title" value="Jiné">Jiné
                </tr>
                <tr></tr>
                <td> Jméno:  </td>
                <td><input type="text" name="jmeno" required></td>
                </tr>
                <tr>
                    <td> Příjmení: </td>
                    <td><input type="text" name="prijmeni" required></td>
                </tr>
                <tr>
                    <td>Město:
                    <td><input type="text" name="mesto" required>
                </tr>
                <tr>
                    <td>   </fieldset>
                        Kraj:</td>
                    <td>  <select id="kraj" name="kraj" style="margin-left: 10px; "required>
                            <option value="k0">-vyber kraj-</option>
                            <option value="k1">Hlavní město Praha</option>
                            <option value="k2">Jihočeský kraj</option>
                            <option value="k3">Jihomoravský kraj</option>
                            <option value="k4">Karlovarský kraj</option>
                            <option value="k5">Kraj Vysočina</option>
                            <option value="k6">Královéhradecký kraj</option>
                            <option value="k7">Liberecký kraj</option>
                            <option value="k8">Moravskoslezský kraj</option>
                            <option value="k9">Olomoucký kraj</option>
                            <option value="k10">Pardubický kraj</option>
                            <option value="k11">Plzeňský kraj</option>
                            <option value="k12">Středočeský kraj</option>
                            <option value="k13">Ústecký kraj</option>
                            <option value="k14">Zlínský kraj</option>
                        </select>
                        </fieldset>
                    </td>
                </tr><tr>
                    <td>Telefoní číslo: </td>
                    <td><input type="text" name="cislo"required></td>
                </tr><tr>
                    <td>E-mail: </td>
                    <td><input type="text" name="email" required></td>
            </table>
            <input type="submit" name="submit" value=" Potvrdit " Text-align: center>
            </form>
        </div>
    </div>
    <div class="flex-foot">
        <p>©0ndra_m_  2020-<?php echo date("Y");?></p>

    </div>

</body>
</html>