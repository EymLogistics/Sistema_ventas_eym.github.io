<?php

require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\SpreadSheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new SpreadSheet();
$spreadsheet->getProperties()->setCreator("Juan Bautista")->setTitle("Mi Excel");

$spreadsheet->setActiveSheetIndex(0);
$hojaActiva = $spreadsheet->getActiveSheet();

$hojaActiva->setCellValue('A1', 'CODIGOS' );
$hojaActiva->setCellValue('B2',123123 );

$hojaActiva->setCellValue('C1', 'juan bautista')->setCellValue('D1','CDP');

$writer= new Xlsx($spreadsheet);
$writer->save('Listado de inventario.xlsx')

?>


