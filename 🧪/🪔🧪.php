<?php

namespace 🧪;

use PHPUnit\Framework\TestCase;
use 🧞\🪔;

class 🪔🧪 extends TestCase
{
    /** @test */
    public function 🧪_🪔_🛣_✅_🤣()
    {
        $🧙⚙️ = [
            'factories' => [
                '🚕⚙️' => function () {
                    return function (\FastRoute\RouteCollector $🧳) {
                        $🧳->addRoute('GET', '/', '🐈');
                    };
                },
                '🐈' => fn() => fn() => '🐈'
            ]
        ];

        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/?🍩=😋';

        $🪔 = new 🪔();
        self::assertSame('🐈', $🪔($🧙⚙️));
    }

    /** @test */
    public function 🧪_🧞_💥_❌_🚏()
    {
        $🧙⚙️ = [
            'factories' => [
                '🚕⚙️' => fn() => fn() => null
            ]
        ];

        $🪔 = new 🪔();

        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/?🍩=😋';

        self::expectException(\🧞\💣\👀::class);
        self::expectExceptionCode(404);
        self::expectExceptionMessage('🛑🛣');

        $🪔($🧙⚙️);
    }
}
