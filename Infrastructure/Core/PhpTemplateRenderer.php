<?php

declare(strict_types=1);

namespace Infrastructure\Core;

class PhpTemplateRenderer implements TemplateRendererInterface
{
    public function render(string $templateName = '', ?array $parameters = []): string
    {
        if ( is_array( $parameters ) ){
            extract( $parameters );
        }

        ob_start();
        include __DIR__ . '/../../templates/' . $templateName . '.php';

        return ob_get_clean();
    }
}