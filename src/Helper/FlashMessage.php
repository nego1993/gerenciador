<?php 

namespace Alura\Cursos\Helper;

trait FlashMessage
{
    public function defineMessage(string $type, string $message): void
    {
        $_SESSION['message'] = $message;
        $_SESSION['type_message'] = $type;
    }
}