<?php

declare(strict_types=1);

namespace App\Request\Validator;

use Infrastructure\Exception\InvalidArgumentException;
use Infrastructure\Parser\ParserInterface;

class DisplayDataRequestValidator
{
    private const ALLOWED_FILE_FORMATS = [ParserInterface::FORMAT_CSV, ParserInterface::FORMAT_XML, ParserInterface::FORMAT_JSON];

    public function validate(): void
    {
        if (isset($_FILES["filename"])) {
            $filename = $_FILES["filename"]["name"];
            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);
            if (! in_array($fileExtension , self::ALLOWED_FILE_FORMATS)) {
                throw new InvalidArgumentException('Invalid file format.');
            }
        } else {
            throw new InvalidArgumentException('There is no file uploaded.');
        }
    }
}