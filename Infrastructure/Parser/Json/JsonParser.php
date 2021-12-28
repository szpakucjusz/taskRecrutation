<?php

declare(strict_types=1);

namespace Infrastructure\Parser\Json;

use Infrastructure\Parser\ParserInterface;

class JsonParser implements ParserInterface
{
    public function parse($file): string
    {
        return 'json parsed';
    }
}