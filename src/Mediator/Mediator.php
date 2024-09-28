<?php

namespace Mediator;

interface Mediator {
    public function notify($sender, $event);
}
