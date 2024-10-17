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

<table>
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
    
</body>
</html>