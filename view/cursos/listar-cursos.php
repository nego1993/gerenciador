    <a href="/novo-curso" class="btn btn-primary mb-2">
        Novo curso
    </a>

    <ul class="list-group">
        <?php foreach ($cursos as $curso): ?>
            <li class="list-group-item d-flex justify-content-between">
                <?= $curso->getDescricao(); ?>
                <span>
                    <a href="edit-course?id=<?= $curso->getId() ?>" class="btn btn-outline-primary"><i class="fas fa-pencil-alt"></i> Editar</a>
                    <a href="delete-course?id=<?= $curso->getId() ?>" class="btn btn-outline-danger"><i class="fa fa-trash"></i> Excluir</a>
                </span>
            </li>
        <?php endforeach; ?>
    </ul>
