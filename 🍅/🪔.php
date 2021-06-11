<?php

declare(strict_types=1);

namespace 🧞;

use FastRoute\Dispatcher;
use Laminas\ServiceManager\ServiceManager;

use function FastRoute\simpleDispatcher;

class 🪔
{
    private array $ℹ;

    public function __invoke()
    {
        $this->🚚();
        return $this->🧙()->get($this->👮‍())($this->🪣());
    }

    private function 🧙(): ServiceManager
    {
        return new ServiceManager(include __DIR__ . '/../⚙️/🦮.php');
    }

    private function 🚚(): void
    {
        $🕷 = $_SERVER['REQUEST_METHOD'];
        $🕸 = $_SERVER['REQUEST_URI'];
        if (false !== $pos = strpos($🕸, '?')) {
            $🕸 = substr($🕸, 0, $pos);
        }
        $🕸 = rawurldecode($🕸);

        $this->ℹ = simpleDispatcher(include __DIR__ . '/../⚙️/🚕.php')->dispatch($🕷, $🕸);

        if ($this->ℹ[0] !== Dispatcher::FOUND) {
            throw new \🧞\💣\👀('🛑', 404);
        }
    }

    private function 👮‍()
    {
        if (!isset($this->ℹ[1])) {
            throw new \🧞\💣\👀('🛑👮', 404);
        }
        return $this->ℹ[1];
    }

    private function 🪣()
    {
        if (!isset($this->ℹ[2])) {
            throw new \🧞\💣\👀('🛑🪣', 404);
        }
        return $this->ℹ[2];
    }
}
