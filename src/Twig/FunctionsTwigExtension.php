<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FunctionsTwigExtension extends AbstractExtension {

    public function getFunctions(): array {
        return [
            new TwigFunction('toInteger', [$this, 'toInteger'])
        ];
    }

    public function toInteger(string $value): int {
        return (int)$value;
    }
}