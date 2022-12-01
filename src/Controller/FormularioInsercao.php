<?php

namespace Alura\Cursos\Controller;

class FormularioInsercao implements InterfaceRequisicao
{
    public function processaRequisicao(): void
    {
        $titulo = 'Novo curso';
        require __DIR__ . '/../../view/header.php';
        require __DIR__ . '/../../view/cursos/formulario.php';
        require __DIR__ . '/../../view/footer.php';
    }
}
