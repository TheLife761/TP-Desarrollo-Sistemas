<?php

include_once "data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/champions.css">
    <title>Champions</title>
</head>
<body>

<h1>Historia de las finales de champions</h1>

<table class="match">
<tr>

<?php

foreach ($finales->headers as $header) {
    echo "<th>" . $header . "</th>";
}

?>

</tr>

<?php

foreach ($finales->rows as $final) {
    echo "<tr>";

    foreach ($final as $final_row) {
        echo "<td>" . $final_row . "</td>";
    }

    echo "</tr>";
}

?>

</tr>


</table>

<table>
<tr>

<?php

foreach ($ranking_clubes->headers as $header) {
    echo "<th>" . $header . "</th>";
}

?>

</tr>

<?php

foreach ($ranking_clubes->rows as $ranking_club) {
    echo "<tr>";

    foreach ($ranking_club as $ranking_row) {
        echo "<td>" . $ranking_row . "</td>";
    }

    echo "</tr>";
}

?>

</tr>


</table>

<table>
<tr>

<?php

foreach ($ranking_paises->headers as $header) {
    echo "<th>" . $header . "</th>";
}

?>

</tr>

<?php

foreach ($ranking_paises->rows as $ranking_pais) {
    echo "<tr>";

    foreach ($ranking_pais as $ranking_row) {
        echo "<td>" . $ranking_row . "</td>";
    }

    echo "</tr>";
}

?>

</tr>


</table>
    
</body>
</html>