<?php

declare(strict_types=1);

namespace App\Request;

use App\Request\Validator\DisplayDataRequestValidator;

class DisplayDataRequest
{
    public function __construct()
    {
        (new DisplayDataRequestValidator())->validate();
    }

    /** @return array|mixed[] */
    public function get(): array
    {
        $params = ['filename' => $_FILES['filename']];
        $_FILES = [];

        return $params;
    }
}