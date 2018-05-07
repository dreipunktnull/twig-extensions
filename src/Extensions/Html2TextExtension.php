<?php

namespace DPN\TwigExtensions\Extensions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Html2TextExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('html2text', [$this, 'html2text']),
        ];
    }

    public function html2text($html)
    {
        return \Html2Text\Html2Text::convert($html);
    }
}
