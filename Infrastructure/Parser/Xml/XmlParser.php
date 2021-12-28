<?php

declare(strict_types=1);

namespace Infrastructure\Parser\Xml;

use Infrastructure\Parser\ParserInterface;

class XmlParser implements ParserInterface
{
    public function parse($file): string
    {
        return 'xml parsed';
    }
}