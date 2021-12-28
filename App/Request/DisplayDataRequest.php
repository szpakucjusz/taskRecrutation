<?php

declare(strict_types=1);

namespace App\Request;

use App\Request\Validator\DisplayDataRequestValidator;
use Infrastructure\ValueObject\File;

class DisplayDataRequest
{
    public function __construct()
    {
        (new DisplayDataRequestValidator())->validate();
    }

    /** @return array|mixed[] */
    public function get(): array
    {
        $params = ['filename' => new File($_FILES['filename'])];
        $_FILES = [];

        return $params;
    }
}