<?php

declare(strict_types=1);

namespace Infrastructure\Core;

class ViewMaker implements ViewMakerInterface
{
    public function render(string $templateName = ''): string
    {
        return file_get_contents(__DIR__ . '/../../templates/' . $templateName . '.php');
    }
}