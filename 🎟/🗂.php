<?php

declare(strict_types=1);

require_once(__DIR__.'/../vendor/autoload.php');

try {
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
    echo $👮‍($🛣[2]);

} catch (\🧞\💣\💥 $💩) {

    $🪠 = new \🧞\🪠();
    echo $🪠($💩);

}
