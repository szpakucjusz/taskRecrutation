<?php

declare(strict_types=1);

namespace Infrastructure\Core;

interface ViewMakerInterface
{
    public function render(string $templateName = ''): string;
}