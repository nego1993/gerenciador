<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Helper\FlashMessage;
use Alura\Cursos\Infra\EntityManagerCreator;

class Logar implements InterfaceRequisicao
{
    use FlashMessage;

    /**
     * @var \Doctrine\Common\Persistence\ObjectRepository
     */
    private $userRepository;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->userRepository = $entityManager->getRepository(Usuario::class);
    }
    public function processaRequisicao(): void
    {
        $email = filter_input(
            INPUT_POST,
            'email',
            FILTER_VALIDATE_EMAIL
        );

        if (is_null($email) || $email === false) {
            $this->defineMessage('danger' , 'Usuário inválido');
            header('Location: /login');
            return;
        }
        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING
        );

        /**
         * @var Usuario $user
         */
        $user = $this->userRepository->findOneBy(["email" => $email]);
        if (is_null($user) || !$user->validPassword($senha)) {
            $this->defineMessage('danger', 'E-mail e/ou senha inválidos');
            header('Location: /login');
            return ;
        }

        $_SESSION['logado'] = true;


        header("Location: /listar-cursos");
    }
}
