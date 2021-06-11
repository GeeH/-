<?php

declare(strict_types=1);

namespace 🧞;

class 🪔
{
    public function __invoke()
    {
        $🧙🏻‍ = new \Laminas\ServiceManager\ServiceManager(include __DIR__.'/../⚙️/🦮.php');
        $🚚 = \FastRoute\simpleDispatcher(include __DIR__.'/../⚙️/🚕.php');

        $🕷 = $_SERVER['REQUEST_METHOD'];
        $🕸 = $_SERVER['REQUEST_URI'];
        if (false !== $pos = strpos($🕸, '?')) {
            $🕸 = substr($🕸, 0, $pos);
        }
        $🕸 = rawurldecode($🕸);
        $🛣 = $🚚->dispatch($🕷, $🕸);

        if ($🛣[0] !== \FastRoute\Dispatcher::FOUND) {
            throw new \🧞\💣\👀('🛑', 404);
        }

        $👮‍ = $🧙🏻‍->get($🛣[1]);
        return $👮‍($🛣[2]);
    }
}
