<?php
//namespace Bookstore\Domain;

class Person{
    protected $firstname;
    protected $lastname;

    public function __construct(string $firstname, string $lastname)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

    public function getFirstname(): string{
        return $this->firstname;
    }
    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }
}