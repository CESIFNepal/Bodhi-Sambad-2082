<?php
require 'vendor/autoload.php';
$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('c:/Users/aryal/OneDrive/Desktop/BODHI SAMBAD CESIF.pdf');
file_put_contents('pdf_content.txt', $pdf->getText());
