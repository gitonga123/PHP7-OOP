<?php

class Book {
    private $isbn;
    private $author;
    private $title;
    private $available;



    public function __construct(

        string $isbn,
        string $author,
        string $title,
        int $available=0
    )
    {
        $this->title = $title;
        $this->available = $available;
        $this->author = $author;
        $this->isbn = $isbn;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getAvailable()
    {
        return $this->available;
    }

    public function isAvailable(): bool{
        return $this->isAvailable();
    }


    public function getPrintableTitle(): string{
        $result = '<i>' . $this->title .
            '</i> - '.$this->author;
        if(empty($this->available)){
            $result = '<b>Not Available</b>';
        }

        return $result;
    }

    public function getCopy(): bool{
        if($this->available < 1){
            return false;
        }else{
            $this->available--;
            return true;
        }
    }

    public function addCopy(){
        $this->available++;
    }
}