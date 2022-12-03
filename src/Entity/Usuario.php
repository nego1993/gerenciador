<?php

namespace Alura\Cursos\Entity;

/**
 * @Entity
 * @Table(name="usuarios")
 */
class Usuario
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $email;
    /**
     * @Column(type="string")
     */
    private $senha;

    public function validPassword(string $senhaPura): bool
    {
        return password_verify($senhaPura, $this->senha);

    }
}
