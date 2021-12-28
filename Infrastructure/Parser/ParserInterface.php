<?php

declare(strict_types=1);

namespace Infrastructure\Parser;

use Infrastructure\ValueObject\File;

interface ParserInterface
{
    public const FORMAT_XML = 'xml';
    public const FORMAT_JSON = 'json';
    public const FORMAT_CSV = 'csv';

    /** @return array|mixed[] */
    public function parse(File $file): array;
}