<?php
namespace Bookstore\Domain;
class Customer extends Person {
    private $id;
    private $email;

    private static $lastId = 0;

    public function __construct(
        int $id,
        string $firstname,
        string $surname,
        string $email
    )
    {
        parent::__construct($firstname,$surname);
        if ($id == null){
            $this->id = ++self::$lastId;
        }else{
            $this->id = $id;
            self::$lastId = $id;
        }
        $this->firstname = $firstname;
        $this->email = $email;

        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public static function getLastId(): int {
        return self::$lastId;
    }
}