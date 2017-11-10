<?php
namespace Bookstore\Domain;

class Customer extends Person {
    private $id;
    private $email;
    private static $lastId = 0;

    public function __construct(int $id, string $email,
                                string $firstname,string $lastname)
    {
        parent::__construct($firstname,$lastname);
        if(empty($id)){
            $this->id = ++self::$lastId;
        }else{
            $this->id = $id;
            if($id > self::$lastId){
                self::$lastId = $id;
            }
        }
        $this->email = $email;
    }

    public function getId(): int{
        return $this->id;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setId(string $id) {
        $this->id = $id;
    }

    public static function getLastId(): int{
        return self::$lastId;
    }



}