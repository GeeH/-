<?php

namespace ๐งช;

use PHPUnit\Framework\TestCase;
use ๐ง\๐ช;

class ๐ช๐งช extends TestCase
{
    /** @test */
    public function ๐งช_๐ช_๐ฃ_โ_๐คฃ()
    {
        $๐งโ๏ธ = [
            'factories' => [
                '๐โ๏ธ' => function () {
                    return function (\FastRoute\RouteCollector $๐งณ) {
                        $๐งณ->addRoute('GET', '/', '๐');
                    };
                },
                '๐' => fn() => fn() => '๐'
            ]
        ];

        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/?๐ฉ=๐';

        $๐ช = new ๐ช();
        self::assertSame('๐', $๐ช($๐งโ๏ธ));
    }

    /** @test */
    public function ๐งช_๐ง_๐ฅ_โ_๐()
    {
        $๐งโ๏ธ = [
            'factories' => [
                '๐โ๏ธ' => fn() => fn() => null
            ]
        ];

        $๐ช = new ๐ช();

        $_SERVER['REQUEST_METHOD'] = 'GET';
        $_SERVER['REQUEST_URI'] = '/?๐ฉ=๐';

        self::expectException(\๐ง\๐ฃ\๐::class);
        self::expectExceptionCode(404);
        self::expectExceptionMessage('๐๐ฃ');

        $๐ช($๐งโ๏ธ);
    }
}
