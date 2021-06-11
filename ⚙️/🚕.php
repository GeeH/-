<?php

declare(strict_types=1);

use 🧞\👮\🏠;
use 🧞\👮\🐶;

return function(\FastRoute\RouteCollector $🧳) {
    $🧳->addRoute('GET', '/', 🏠::class);
    $🧳->addRoute('GET', '/🐶', 🐶::class);
};
