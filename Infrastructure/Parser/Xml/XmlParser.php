<?php

declare(strict_types=1);

namespace Infrastructure\Parser\Xml;

use Infrastructure\Parser\ParserInterface;
use Infrastructure\ValueObject\File;
use SimpleXMLElement;

class XmlParser implements ParserInterface
{
    /** @inheritDoc */
    public function parse(File $file): array
    {
        $xml = new SimpleXMLElement(file_get_contents($file->getFilePath()));
        $parsedData = [];

        foreach ($xml as $item) {
            $parsedData[] = [
                'firstName' => (string) $item->first_name,
                'age' => (string) $item->age,
                'gender' => (string) $item->gender,
            ];
        }

        return $parsedData;
    }
}