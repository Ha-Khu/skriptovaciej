<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hlavný nadpis</h1>
    <?php

        $meno = "Peter";
        echo "$meno <br>";
        var_dump($meno);
        echo "<br>";

        $farby = array("červená", "modrá", "zelená");
        echo $farby[0];
        echo("<br>");

        foreach($farby as $farba) {
            echo "Farba: ".$farba."<br>";
        }

        $data = array("Peter" => 25,
                      "Jana" => 30,
                      "Marek" => 20
        );

        foreach($data as $name => $age) {
            echo "$name má $age rokov <br>";
        }
    ?>
</body>
</html>