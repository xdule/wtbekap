
<?php


require('./fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();



$pdf->SetFont('Arial','B',16);


$pdf->Cell(40,10,'Izvjestaj stanja model:',0,1,'c');
$pdf->SetFont('Arial','B',10);


$file = 'modeli.xml';
    if(!$xml = simplexml_load_file($file))
    {
        //include 'napuni_kartice_modeli.php';

            if(!$xml = simplexml_load_file($file))
        {
                     if(!$xml = simplexml_load_file($file))
            {

            }

        }

    }



for ($i=0; $i<=$xml->count()-1; $i++)
{
    $k=$i+1;
    $pdf->Cell(40,10,'Model:'.$k.' . TITLE: '.$xml->model[$i]->tekst.' PODTEKST:'.$xml->model[$i]->title,0,1);
    
    
    
}




$pdf->Output();

//$pdf->Output('fajl.pdf', 'D');







?>