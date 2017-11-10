<?php
    require_once __DIR__.'/Book.php';
    require_once __DIR__.'/Customer.php';
    use Bookstore\Domain\{Book, Customer};


    $book1 = new Book("BSHA90012","Ngugi Wa Thiongo","Poor Man's Show",7);
    $book2 = new Book("1984", "George Orwell", 9785267006323);
    $result = $book2->getPrintableTitle();
    $book_remaining = $book1->getCopy();

    echo $result. "<br />";

    if($book_remaining){
        echo "<b>Books Remaining: </b>". $book1->getAvailable();
    }

    $customer = new Customer(1,"Daniel","Mutwiri","mutwirianiel@gmail.com");
    $customer->setEmail("danielsci@mutwiri.com");
    var_dump($customer->getEmail());
    var_dump($customer::getLastId());