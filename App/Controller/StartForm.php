<?php

declare(strict_types=1);

namespace App\Controller;

use Infrastructure\Core\ViewMaker;

class StartForm
{
    public function __invoke()
    {
        return (new ViewMaker())->render('startform');
    }
}