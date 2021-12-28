<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\DisplayDataRequest;

class DisplayData
{
    public function __invoke(DisplayDataRequest $request)
    {
        $params = $request->get();
        $file = $params['filename'];
        $filePath = $file["tmp_name"];
        $content = file_get_contents($filePath);
        print_r($content);

        return 'Parsuje dane';
    }
}