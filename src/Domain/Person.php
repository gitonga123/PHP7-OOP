<?php
/**
 * Created by PhpStorm.
 * User: otbafrica
 * Date: 11/10/17
 * Time: 1:24 PM
 */

namespace Bookstore\Domain;


class Person
{
    protected $firstname;
    protected $surname;

    public function __construct(
        string $firstname,
        string $surname
    )
    {
        $this->surname = $surname;
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }


}