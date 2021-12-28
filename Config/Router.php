<?php

declare(strict_types=1);

namespace Config;

use App\Controller\DisplayData;
use App\Controller\StartForm;

class Router
{
    private const HOME_URL = '';

    /** @return array|mixed[] */
    private static function routes(): array
    {
        return [
            self::HOME_URL => StartForm::class,
            'display-data' => DisplayData::class,
        ];
    }

    public static function fitUrl(): object
    {
        $params = explode('/', $_SERVER['REQUEST_URI']);
        $key = isset($params[3]) ? $params[3] : self::HOME_URL;
        $className = self::routes()[$key];

        return new $className;
    }
}