<?php

declare(strict_types=1);

namespace 🧞;

use 🧞\💣\💥;

class 🪠
{
    public function __invoke(💥 $💥): string
    {
        http_response_code($💥->getCode());
        return $💥->getMessage();
    }
}
