
<?php

// get yesterday date
$date = new DateTime();
$date->sub(new DateInterval('P1D'));

// config
$api_url = 'http://data.fixer.io/api/';
$req_latest = 'latest';
$reg_yesterday =& $date;
$api_key = '8f5aafa782161e3a4b771e1e4ff11c9c';

// 1 Conect to fixer.io
$data = file_get_contents($api_url.$req_latest.'?access_key='.$api_key);
$yestarday_data = file_get_contents($api_url.$reg_yesterday->format('Y-m-d').'?access_key='.$api_key);

// 2 Get currencies
$currencies = json_decode($data, true);
$yestarday_currencies = json_decode($yestarday_data, true);

//variables
$date = $currencies['date'];
$eur = $currencies['rates']['EUR'];
$usd = $currencies['rates']['USD'];
$mdl = $currencies['rates']['MDL'];

$y_date = $yestarday_currencies['date'];
$y_eur = $yestarday_currencies['rates']['EUR'];
$y_usd = $yestarday_currencies['rates']['USD'];
$y_mdl = $yestarday_currencies['rates']['MDL'];

// format for out cuurencies
$format = "%08.3f";

// Дз
// 1) Привести к формату 0000.0000
// 2) вместо skills создать форму:
// 1 select>option > ключ  : оформить при помощи foreach() rates
// 2 button > значение
// 3) пустить два запроса 1 текущий 2 предыдущий   сравнить динамику 
//




?>
