<?php

require 'vendor/autoload.php';

use Components\Inventory;
use Components\Payment;
use Components\Order;
use Mediator\EcommerceMediator;

// Creamos los componentes
$inventory = new Inventory();
$payment = new Payment();

// Creamos el mediador
$mediator = new EcommerceMediator($inventory, $payment);

// Creamos la orden
$order = new Order($mediator);
$order->placeOrder(101, 2, 50);
