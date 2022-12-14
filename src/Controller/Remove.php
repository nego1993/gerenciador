<?php 

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessage;
use Alura\Cursos\Infra\EntityManagerCreator;

class Remove implements InterfaceRequisicao
{

    use FlashMessage;

    /** @var \Doctrine\ORM\entityManagerCreator  */

    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
        ->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET,
        "id",
        FILTER_VALIDATE_INT);

        if (is_null($id) || $id === false){
            $this->defineMessage('danger', 'Curso inexistente');
            header("Location: /listar-cursos");
            return;
        }
        
        $curso = $this->entityManager->getReference(Curso::class, $id);
        $this->entityManager->remove($curso);
        $this->entityManager->flush();
        $this->defineMessage('danger' , 'Curso excluído com sucesso');
        header("Location: /listar-cursos");
    }
}