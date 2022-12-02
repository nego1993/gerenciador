<?php

use Alura\Cursos\Controller\Editcourse;
use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;
use Alura\Cursos\Controller\Remove;

$routes = [
    '/listar-cursos' => ListarCursos::class,
    '/novo-curso'    => FormularioInsercao::class,
    '/salvar-curso'  => Persistencia::class,
    '/delete-course' => Remove::class,
    '/editar-curso'   => Editcourse::class  

];

return $routes;