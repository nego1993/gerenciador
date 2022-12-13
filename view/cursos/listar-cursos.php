    <a href="/novo-curso" class="btn btn-primary mb-3">
        Novo curso
    </a>

    <ul class="list-group mb-5">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item d-flex justify-content-between" style="border: 2px solid #000">
                <?= $curso->getDescricao(); ?>
                <span>
                    <a href="editar-curso?id=<?= $curso->getId() ?>" class="btn btn-outline-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                    <a href="delete-course?id=<?= $curso->getId() ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Excluir</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
