<?php

namespace Components;

use Mediator\Mediator;

class Order {
    private $mediator;
    private $productId;
    private $quantity;
    private $amount;

    public function __construct(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    public function placeOrder($productId, $quantity, $amount) {
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->amount = $amount;

        echo "Pedido realizado para el producto $productId.\n";

        // Notificamos al mediador que se ha colocado un pedido
        $this->mediator->notify($this, 'orderPlaced');
    }

    public function getProductId() {
        return $this->productId;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function getAmount() {
        return $this->amount;
    }
}
