<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class CitationTwigExtension extends AbstractExtension {

    public function getFilters() {
        return [
            new TwigFilter('citation', [$this, 'makeCitation']),
            new TwigFilter('smile', [$this, 'addSmiley']),
            new TwigFilter('emoji', [$this, 'emojiFilter'])
        ];
    }

    /**
     * @param string $text
     * @return string
     */
    public function makeCitation(string $text): string {
        return "“ $text ”";
    }

    public function addSmiley(string $text): string {
        return "$text 🥳 ";
    }

}