<?php

$finales_json = file_get_contents('data/finales.json');

$finales = json_decode($finales_json, false);
