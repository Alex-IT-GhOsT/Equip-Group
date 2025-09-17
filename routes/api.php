<?php

use Illuminate\Support\Facades\Route;

Route::apiResources(['group' => 'GroupController', 'product' => 'ProductController', 'price' => 'PriceController']);
