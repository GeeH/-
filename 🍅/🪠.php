<?php

declare(strict_types=1);

namespace 🧞;

use 🧞\💣\💥;

class 🪠
{
    public function __construct() { }

    public function __invoke(💥 $💥)
    {
        http_response_code($💥->getCode());
        return $💥->getMessage();
    }
}
