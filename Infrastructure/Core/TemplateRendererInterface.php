<?php

declare(strict_types=1);

namespace Infrastructure\Core;

interface TemplateRendererInterface
{
    /** @param array|null|mixed[] $parameters */
    public function render(string $templateName = '', ?array $parameters = []): string;
}