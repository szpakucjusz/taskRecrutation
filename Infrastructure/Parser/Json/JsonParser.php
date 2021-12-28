<?php

declare(strict_types=1);

namespace Infrastructure\Parser\Json;

use Infrastructure\Parser\ParserInterface;
use Infrastructure\ValueObject\File;

class JsonParser implements ParserInterface
{
    /** @inheritDoc */
    public function parse(File $file): array
    {
        $data = json_decode(file_get_contents($file->getFilePath()),  false, 512, JSON_THROW_ON_ERROR);
        $parsedData = [];
        foreach ($data as $row) {
            $parsedData[] = [
                'firstName' => (string) $row->first_name,
                'age' => (string) $row->age,
                'gender' => (string) $row->gender,
            ];
        }

        return $parsedData;
    }
}