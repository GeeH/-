<?php

declare(strict_types=1);

namespace 🧞;

use FastRoute\Dispatcher;
use Laminas\ServiceManager\ServiceManager;

use function FastRoute\simpleDispatcher;

class 🪔
{
    private array $🛣️;
    private array $🧙⚙️;

    public function __invoke(array $🧙⚙️): string
    {
        $this->🧙⚙️ = $🧙⚙️;
        $this->🚚();

        return $this->👮‍()($this->🪣());
    }

    private function 🚚(): void
    {
        $🕷 = $_SERVER['REQUEST_METHOD'];
        $🕸 = $_SERVER['REQUEST_URI'];
        if (false !== $pos = strpos($🕸, '?')) {
            $🕸 = substr($🕸, 0, $pos);
        }
        $🕸 = rawurldecode($🕸);

        $this->🛣️ = simpleDispatcher($this->🧙()->get('🚕⚙️'))->dispatch($🕷, $🕸);

        if ($this->🛣️[0] !== Dispatcher::FOUND) {
            throw new \🧞\💣\👀('🛑🛣', 404);
        }
    }

    private function 🧙(): ServiceManager
    {
        return new ServiceManager($this->🧙⚙️);
    }

    private function 👮‍(): callable
    {
        return $this->🧙()->get($this->🛣️[1]);
    }

    private function 🪣()
    {
        return $this->🛣️[2];
    }
}
