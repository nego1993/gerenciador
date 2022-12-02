<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Editcourse extends RenderHtml implements InterfaceRequisicao
{

    /**
     * @var Doctrine\ORM\Persistence\ObjectRepository
     */

    private $repositoryCourse;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator)
            ->getEntityManager();
        $this->repositoryCourse = $entityManager->getRepository(Curso::class);
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(
            INPUT_GET,
            'id',
            FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) {
            header("Location: /listar-cursos");
            return;
        }

        //estudar sobre extract(), para trazer templates
        //     $curso = $this->repositoryCourse->find($id);
        //     echo $this->henderingHtml("curso/formulario.php",[
        //     "curso" => $curso,
        //     "titulo" => "Editar Curso" . $curso->getDescricao()
        //     ]
        // );

        $curso = $this->repositoryCourse->find($id);
        $titulo = "Editar Curso" . $curso->getDescricao();
        require __DIR__ . "/../../view/header.php";
        require __DIR__ . "/../../view/cursos/formulario.php";
        require __DIR__ . "/../../view/footer.php";
    }
}
