<?php

$finales_json = file_get_contents('data/finales.json');
$ranking_clubes_json = file_get_contents('data/ranking_clubes.json');
$ranking_paises_json = file_get_contents('data/ranking_paises.json');

$finales = json_decode($finales_json, false);
$ranking_clubes = json_decode($ranking_clubes_json, false);
$ranking_paises = json_decode($ranking_paises_json, false);