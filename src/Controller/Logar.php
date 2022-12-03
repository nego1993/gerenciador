<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Infra\EntityManagerCreator;

class Logar implements InterfaceRequisicao
{

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
            echo 'e-mail nao encontrado na nossa base de dados';
            exit();
        }

        // print '<pre>';
        // print_r($email);
        // print '</pre>';

        $senha = filter_input(
            INPUT_POST,
            'senha',
            FILTER_SANITIZE_STRING
        );

        // print '<pre>';
        // print_r($senha);
        // print '</pre>';

        /**
         * @var Usuario $user
         */
        $user = $this->userRepository->findOneBy(["email" => $email]);
        if (is_null($user) || !$user->validPassword($senha)) {

            echo 'E-mail ou senha inválidos';
            return;
        }

        header("Location: /listar-cursos");
    }
}
