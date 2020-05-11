<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{

}
$table->integer('customers_id');
$table->enum('status', ['done', 'preparing', 'error'])->default('preparing');