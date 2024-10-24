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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.uikit.css">
    <script src="./frameworks/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <title>Champions</title>
</head>
<body>

<h1>Historia de las finales de champions</h1>

<main>

<div class="table-container">
<table class="match" id="finales">

<thead>
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
</div>


<div class="table-container">
<table id="clubes">
<thead>
<tr>

<?php

foreach ($ranking_clubes->headers as $header) {
    echo "<th>" . $header . "</th>";
}

?>

</tr>
</thead>

<tbody>

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
</tbody>


</table>

</div>

<div class="table-container">

<table id="paises">
    <thead>
<tr>

<?php

foreach ($ranking_paises->headers as $header) {
    echo "<th>" . $header . "</th>";
}

?>

</tr>
</thead>

<tbody>
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
</tbody>


</table>
</div>

</main>
    
<script src="scripts/index.js"></script>
</body>
</html>