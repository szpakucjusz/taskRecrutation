<?php

declare(strict_types=1);

namespace Infrastructure\Parser;

interface ParserInterface
{
    public const FORMAT_XML = 'xml';
    public const FORMAT_JSON = 'json';
    public const FORMAT_CSV = 'csv';

    public function parse($file): string;
}