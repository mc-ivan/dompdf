<?php

use App\Entities\Product;
use Dompdf\Dompdf;

require '../vendor/autoload.php';
require '../config/database.php';

ob_start();
$products = Product::get();
include '../resources/views/lists.php';

$dompdf = new Dompdf();
$dompdf->loadHtml(ob_get_clean());

$dompdf->render();
$dompdf->stream();
