<?php

declare(strict_types=1);

namespace Infrastructure\Core;

class ViewMaker
{
    /** @param array|null|mixed[] $parameters */
    public function render(string $templateName = '', ?array $parameters = []): string
    {
        // Make values in the associative array easier to access by extracting them
        if ( is_array( $parameters ) ){
            extract( $parameters );
        }

        ob_start();
        include __DIR__ . '/../../templates/' . $templateName . '.php';
        return ob_get_clean();
    }
}