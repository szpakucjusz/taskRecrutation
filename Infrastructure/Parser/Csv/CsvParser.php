<?php

declare(strict_types=1);

namespace Infrastructure\Parser\Csv;

use Infrastructure\Parser\ParserInterface;

class CsvParser implements ParserInterface
{
    public function parse($file): string
    {
        return 'csv parsed';
    }
}