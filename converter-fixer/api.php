<?php

// config
$api_url = 'http://data.fixer.io/api/';
$req_time = 'latest';
$api_key = '8f5aafa782161e3a4b771e1e4ff11c9c';

// 1 Conect to fixer.io
$data = file_get_contents($api_url.$req_time.'?access_key='.$api_key);


// 2 Get currencies
$currencies = json_decode($data, true);

//variables
$date = $currencies['date'];
$eur = $currencies['rates']['EUR'];
$usd = $currencies['rates']['USD'];
$mdl = $currencies['rates']['MDL'];

// Дз
// 1) Привести к формату 0000.0000
// 2) вместо skills создать форму:
// 1 select>option > ключ  : оформить при помощи foreach() rates
// 2 button > значение
// 3) пустить два запроса 1 текущий 2 предыдущий   сравнить динамику 
//




?>