<?php

namespace 🧪;

use PHPUnit\Framework\TestCase;
use 🧞\💣\💥;
use 🧞\🪠;

class 🪠🧪 extends TestCase
{

    public function test_invoke_sets_headers_and_returns_exception_message()
    {
        $🖕 = '🖕';

        $💥 = new 💥($🖕, 42);
        $🪠 = new 🪠();

        self::assertSame($🪠($💥), $🖕);
        self::assertSame(42, http_response_code());
    }
}
