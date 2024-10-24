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
    <script src="./frameworks/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <title>Champions</title>
</head>
<body>

<h1>Historia de las finales de champions</h1>
    <div class="container">
    <input type ="text" placeholder="Buscar...">
    <button><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="buscador"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg></button>
    </div>
<table class="match">
<tr>

<?php

foreach ($finales->headers as $header) {
    echo "<th>" . $header . "</th>";
}

?>

</tr>
</thead>

<tbody>

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
</tbody>


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
    
<script src="scripts/index.js"></script>
</body>
</html>