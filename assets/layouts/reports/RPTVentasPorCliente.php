<?php

$data = $_POST["data"];
$table = $_POST["table"];
$key = $_POST["key"];
$cod = $_POST["cod"];

?>
<?php

setlocale(LC_TIME, "ES");

?>
<?php

// Concatenar el dia a las variables de rango de fechas 
$cod2 = $cod . '-01';
$cod3 = $cod . '-31';

//Asigna a variable de id producto
$idproducto = substr($data, -6, 4);

//Consultas a la base de datos
$queryProductos = Controller::$connection->query("SELECT dv.idproducto, p.nombre, COUNT(dv.idproducto) AS Cantidad_Ventas, SUM(dv.cantidad) AS TOTAL
        FROM venta AS v
        INNER JOIN detalle_venta as dv ON dv.idventa = v.idventa
        INNER JOIN producto AS p ON p.idproducto = dv.idproducto
        WHERE v.fecha BETWEEN '$cod2' AND '$cod3' AND dv.idproducto = '$idproducto'
        GROUP BY dv.idproducto");

if($queryProductos->rowCount()) {

    $dataProductos = $queryProductos->fetch(PDO::FETCH_ASSOC);

}else {
    die("No hay datos.");
  }


class MYPDF extends TCPDF {

    //Page header
    public function Header() {

        // get the current page break margin
        $bMargin = $this->getBreakMargin();
        // get current auto-page-break mode
        $auto_page_break = $this->AutoPageBreak;
        // disable auto-page-break
        $this->SetAutoPageBreak(false, 0);
        // set bacground image
        $img_file = '../assets/layouts/reports/images/report.jpg';
        $this->Image(null, 0, 0, 216, 356, '', '', '', false, 300, '', false, false, 0);
        // restore auto-page-break status
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        // set the starting point for the page content
        $this->setPageMark();
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('');
$pdf->SetSubject('');

$pdf->SetPrintHeader(true);
$pdf->SetPrintFooter(true);

$pdf->SetMargins(18, 18, 18, true);


// add a page
$pdf->AddPage('P', 'LETTER');


// declaro variable detalle
$detalle = "";

// Carga los productos a la variable detalle
    foreach($dataProductos as $key => $value) {

      $detalle .= "<tr>

      <td>".$value["idproducto"]."</td>
      <td>".$value["nombre"]."</td>
      <td>".$dataExistencia["TOTAL"]."</td>

      </tr>";

  }

// define some HTML content with style
$html = <<<EOF

<style>

body{

    font-size: 8px;
}

h1 {

    font-size: 20px;
}

</style>

<html>
<head>
    <title> Existencia </title>
</head>
<body>
    <div style="text-align:center; line-height: 1px;"><h1> Reporte de Productos más Vendidos </h1></div>
    <div style="text-align:center;"> COMERCIAL CINDY </div>
    <div> </div>
    <br>

    <h2>Productos Más Vendidos</h2>
    <table width="100%" cellpadding="5" border="1" align="center">

    <tr align='center'>
        <td><strong><big>Código de Producto</big></strong></td>
        <td><strong><big>Nombre del Producto</big></strong></td>
        <td><strong><big>Total Vendido</big></strong></td>
    </tr>

        $detalle

    </table>
   
</body>
</html>


EOF;



// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Venta.pdf', 'I');

?>
