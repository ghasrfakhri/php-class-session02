<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Jadval Zarb</title>
</head>
<body>
<table>


    <?php
    echo "<th>#</th>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<th>$j</th>";
    }

    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>