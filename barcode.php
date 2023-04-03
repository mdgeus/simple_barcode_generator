<?php
// Include the barcode generator library
require_once('vendor/autoload.php');

// Get the URL parameters
$text = $_GET['text'];
$width = isset($_GET['width']) ? $_GET['width'] : 200;
$height = isset($_GET['height']) ? $_GET['height'] : 100;

// Create a new barcode generator object
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();

// Generate the Code-128 barcode using the text parameter
$barcode = $generator->getBarcode($text, $generator::TYPE_CODE_128, $width, $height);

// Set the content type header to image/png
header('Content-Type: image/png');

// Output the barcode image to the browser
echo $barcode;
?>
