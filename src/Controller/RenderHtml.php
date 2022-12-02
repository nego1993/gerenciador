<?php

namespace Alura\Cursos\Controller;

abstract class RenderHtml
{
    public function henderingHtml(string $routeTemplate, array $dados)
    {
        extract($dados);
        ob_start();
        require __DIR__ . "/../../view/" . $routeTemplate;
        $html = ob_get_clean();

        return $html;
    }
}
