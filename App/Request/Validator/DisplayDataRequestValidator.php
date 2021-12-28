<?php

declare(strict_types=1);

namespace App\Request\Validator;

use Infrastructure\Exception\InvalidArgumentException;

class DisplayDataRequestValidator
{
    public function validate(): void
    {
        if (isset($_FILES["filename"])) {
            $filename = $_FILES["filename"]["name"];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);
            if (! in_array($ext , ['json', 'xml', 'csv'])) {
                throw new InvalidArgumentException('Invalid file format.');
            }
        } else {
            throw new InvalidArgumentException('There is no file uploaded.');
        }
    }
}