<?php

declare(strict_types=1);

namespace Infrastructure\Core;

class ViewMaker
{
    private TemplateRendererInterface $maker;

    public function __construct()
    {
        $this->maker = new PhpTemplateRenderer();
    }

    /** @param array|null|mixed[] $parameters */
    public function render(string $templateName = '', ?array $parameters = []): string
    {
        return $this->maker->render($templateName, $parameters);
    }
}