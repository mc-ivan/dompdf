<?php

use App\Entities\Product;

require '../vendor/autoload.php';
require '../config/database.php';

$products = Product::get();
include '../resources/views/lists.php';
