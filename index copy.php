<?php

// Inventory.php
class Inventory {
    public function updateStock($productId, $quantity) {
        echo "Reduciendo el inventario para el producto $productId en $quantity unidades.\n";
    }
}

// Payment.php
class Payment {
    public function processPayment($amount) {
        echo "Procesando pago de $amount.\n";
    }
}

// Order.php
class Order {
    private $inventory;
    private $payment;

    public function __construct(Inventory $inventory, Payment $payment) {
        $this->inventory = $inventory;
        $this->payment = $payment;
    }

    public function placeOrder($productId, $quantity, $amount) {
        $this->inventory->updateStock($productId, $quantity);
        $this->payment->processPayment($amount);
        echo "Pedido confirmado para el producto $productId.\n";
    }
}

// Uso
$inventory = new Inventory();
$payment = new Payment();
$order = new Order($inventory, $payment);
$order->placeOrder(101, 2, 50);
