<?php

namespace Mediator;

use Components\Inventory;
use Components\Payment;

class EcommerceMediator implements Mediator {
    private $inventory;
    private $payment;

    public function __construct(Inventory $inventory, Payment $payment) {
        $this->inventory = $inventory;
        $this->payment = $payment;
    }

    // Este método notifica a los componentes cuando ocurre un evento
    public function notify($sender, $event) {
        if ($event === 'orderPlaced') {
            $this->inventory->updateStock($sender->getProductId(), $sender->getQuantity());
            $this->payment->processPayment($sender->getAmount());
        }
    }
}
