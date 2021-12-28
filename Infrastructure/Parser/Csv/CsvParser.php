<?php

declare(strict_types=1);

namespace Infrastructure\Parser\Csv;

use Infrastructure\Parser\ParserInterface;
use Infrastructure\ValueObject\File;

class CsvParser implements ParserInterface
{
    /** @inheritDoc */
    public function parse(File $file): array
    {
        $parsedData = [];
        if (($handle = fopen($file->getFilePath(), "r")) !== false) {
            $keys = [];
            while (($row = fgetcsv($handle, 1000, ",")) !== false) {
                if (0 === count($keys)) {
                    $keys = $row;
                } else {
                    $rowInParsedData = [];

                    foreach ($row as $key => $value) {
                        $rowInParsedData[$keys[$key]] = $value;
                    }
                    $parsedData[] = $rowInParsedData;
                }
            }
            fclose($handle);
        }

        return $parsedData;
    }
}