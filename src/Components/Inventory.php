<?php

namespace Components;

class Inventory {
    public function updateStock($productId, $quantity) {
        echo "Reduciendo el inventario para el producto $productId en $quantity unidades.\n";
    }
}
