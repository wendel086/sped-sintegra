<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\Sintegra\Elements\Z57;

$std = new stdClass();
$std->CNPJ = '66291561000103';
$std->IE = '283305054';
$std->COD_MOD = '01';
$std->SERIE = '099';
$std->NUM_DOC = '23';
$std->CFOP = '5102';
$std->CST = '101';
$std->NUMERO_ITEM = '1';
$std->CODIGO_PRODUTO = '136';
$std->NUM_LOTE = '20050502200505021';
$std->BRANCOS = null;

try {
    $z57 = new Z57($std);

    header("Content-Type: text/plain");
    echo "{$z57}";
} catch (\Exception $e) {
    echo $e->getMessage();
}
