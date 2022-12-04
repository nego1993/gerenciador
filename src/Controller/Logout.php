<?php 

namespace Alura\Cursos\Controller;

class Logout implements InterfaceRequisicao
{
    public function processaRequisicao(): void
    {
        session_destroy();
        header("Location: /logout");
    }
}