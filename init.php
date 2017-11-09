<?php
use Bookstore\Domain\Book\Book;
use Bookstore\Domain\Customer\Customer;

//require_once __DIR__.'/Book.php';
//require_once __DIR__.'/Customer.php';

$number1 = 4;

$book1 = new Book("1984SBN0001", "George Bush Biography","Daniel Mutwiri",4);
$book2 = new Book("1984SBN0001", "George Bush Biography","Daniel Mutwiri");

$customer1 = new Customer(1,"James", "Salvation","salvationjames@salvation.com");
$customer2 = new Customer(2,"Daniel", "Mutwiri","mutwiridanielsci@gmail.com");

$customer5 = new Customer(5, 'John', 'Doe', 'johndoe@mail.com');
$customer4 = new Customer($number1, 'Mary', 'Poppins', 'mp@mail.com');
$customer3 = new Customer(3, 'James', 'Bond', '007@mail.com');

var_dump($customer1->getId());
var_dump($customer2->getId());
var_dump($customer3->getId());
var_dump($customer4->getId());
var_dump($customer5->getId());

var_dump(Customer::getLastId());