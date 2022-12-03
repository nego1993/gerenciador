<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Controller\InterfaceRequisicao;

class Login implements InterfaceRequisicao
{
    public function processaRequisicao(): void
    {
        $titulo = 'Login';
        require __DIR__ . '/../../view/common/login/header.php';
        require __DIR__ . '/../../view/login/login.php';
        require __DIR__ . '/../../view/common/login/footer.php';
    }

}