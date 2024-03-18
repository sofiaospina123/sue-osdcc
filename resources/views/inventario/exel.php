<?php

// Incluir la clase PHPExcel
require 'ruta/a/phpexcel/PHPExcel.php';

// Crear un nuevo objeto PHPExcel
$objPHPExcel = new PHPExcel();

// Configurar las propiedades del documento
$objPHPExcel->getProperties()->setCreator("Tu Nombre")
                             ->setLastModifiedBy("Tu Nombre")
                             ->setTitle("Inventario")
                             ->setSubject("Inventario")
                             ->setDescription("Inventario")
                             ->setKeywords("inventario")
                             ->setCategory("Inventario");

// Agregar datos al archivo Excel
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'ID')
            ->setCellValue('B1', 'Nombre del Producto')
            ->setCellValue('C1', 'Tipo de Producto')
            ->setCellValue('D1', 'Cantidad')
            ->setCellValue('E1', 'Marca')
            ->setCellValue('F1', 'Precio')
            ->setCellValue('G1', 'Proveedor');

// Agrega tus datos aquí (supongamos que $data es un arreglo con los datos)
$row = 2;
foreach ($data as $inventario) {
    $objPHPExcel->getActiveSheet()
                ->setCellValue('A'.$row, $inventario['id'])
                ->setCellValue('B'.$row, $inventario['NombreProducto'])
                ->setCellValue('C'.$row, $inventario['Descripcion'])
                ->setCellValue('D'.$row, $inventario['Cantidad'])
                ->setCellValue('E'.$row, $inventario['Marca'])
                ->setCellValue('F'.$row, $inventario['Precio'])
                ->setCellValue('G'.$row, $inventario['Proveedor']);
    $row++;
}

// Establecer el nombre de la hoja de cálculo
$objPHPExcel->getActiveSheet()->setTitle('Inventario');

// Configurar encabezados para la descarga del archivo
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename="inventario.xlsx"');
header('Cache-Control: max-age=0');

// Crear el escritor de Excel
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');

// Enviar salida al navegador
$objWriter->save('php://output');
exit;

?>
