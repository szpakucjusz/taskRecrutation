<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\DisplayDataRequest;
use Infrastructure\Parser\ParserFileFactory;

class DisplayData
{
    public function __invoke(DisplayDataRequest $request)
    {
        $params = $request->get();

        return (new ParserFileFactory($params['filename']))->parse();
    }
}