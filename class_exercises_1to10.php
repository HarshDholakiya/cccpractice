<?php
//Exercise 1: Simple Calculator:
// class Calculator{
//     public function add($a,$b){
//         return $a + $b;
//     }
//     public function subtract($a,$b){
//         return $a - $b;
//     }     
//     public function multiply($a,$b){
//         return $a * $b;

// }
// public function divide($a,$b){
//     if ($b!=0){
//         return $a / $b;
//     }
//     else{
//        return "divide by zero error";
//     }
// }
// }
// $calculator = new calculator();
// echo $calculator->divide(5,3);

//Exercise 2: Student Information:
// class Student{
//     public $name;
//     public $age;
//     public $grade;
//     public function displayInfo(){
//         echo "Name: $this->name,Age: $this->age,Grade: $this->grade";
//     }
// }
//     $student = new Student();
//     $student->name = "Harsh";
//     $student->age = 21;
//     $student->grade = "A";
//     $student->displayInfo();


//Exercise 3: Point in 2D Space:

// class Point{
//     public $x;
//     public $y;

//     public function calculatedistance(point $other){
//         return sqrt(pow($this->x - $other->x, 2) + pow($this->y - $other->y, 2));
//     }
// }
// $point1= new Point();
// $point1->x=1;
// $point1->y= 2;

// $point2 = new Point();
// $point2->x=4;
// $point2->y= 6;
// echo $point1->calculatedistance($point2);

//Exercise 4: Library System:
// class Book{
//     public $title;
//     public $author;
//     public function displayInfo(){
//         echo "Title:$this->title , Author:$this->author";
// }
// } 
// class Library{
//     private $books = [];
//     public function addBook(Book $book) {
//         $this->books[] = $book;
//     }

//     public function displayAllBooks() {
//         foreach ($this->books as $book) {
//             $book->displayInfo();
//             echo "<br>";
//         }
//     }
// }
//     $book1 = new Book();
//     $book1->title = "Hello";
//     $book1->author = "Harsh";

//     $book2 = new Book();
//     $book2->title = "World";
//     $book2->author = "OD";

//     $library = new Library();
//     $library->addBook($book1);
//     $library->addBook($book2);

//     $library->displayAllBooks();

//Exercise 5: Employee Management:

// class Employee {
//     public $name;
//     public $position;
//     public $salary;
//     public function CalculateYearlyBonus() {
//         return $this->salary * 0.1; // Assuming a 10% bonus
//     }
// }
// $employee = new Employee();
// $employee->name = "Harsh";
// $employee->position = "intern";
// $employee->salary = 5000;

// echo $employee->CalculateYearlyBonus();

//Exercise 6: Blog System
// class Post {
//     public $title;
//     public $content;
//     public function DisplayInfo() {
//         echo "Title: $this->title<br>Content: $this->content";
//     }
// }

// class Blog {
//     private $posts = [];

//     public function AddPost(Post $post) {
//         $this->posts[] = $post;
//     }

//     public function DisplayAllPosts() {
//         foreach ($this->posts as $post) {
//             $post->DisplayInfo();
//             echo "<br><br>";
//         }
//     }
// }
// $post1 = new Post();
// $post1->title = "Introduction to PHP";
// $post1->content = "This is a blog post about PHP.";

// $post2 = new Post();
// $post2->title = "Object-Oriented Programming";
// $post2->content = "An overview of OOP principles.";

// $blog = new Blog();
// $blog->AddPost($post1);
// $blog->AddPost($post2);

// $blog->DisplayAllPosts();

// Exercise 7: Shape Hierarchy
// class Shape {

// }
// class Circle extends Shape {
//     public $radius;

//     public function calculateArea() {
//         return pi() * pow($this->radius, 2);
//     }

//     public function calculatePerimeter() {
//         return 2 * pi() * $this->radius;
//     }
// }

// class Rectangle extends Shape {
//     public $length;
//     public $width;
//     public function calculateArea() {
//         return $this->length * $this->width;
//     }

//     public function calculatePerimeter() {
//         return 2 * ($this->length + $this->width);
//     }
// }

// $circle = new Circle();
// $circle->radius = 5;

// $rectangle = new Rectangle();
// $rectangle->length = 4;
// $rectangle->width = 6;

// echo "Circle Area: " . $circle->calculateArea() . "<br>";
// echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter();

// Exercise 8: File Management

// class File {
//     public $filename;
//     public $size;

//     public function getFileExtension() {
//         $parts = explode(".", $this->filename);
//         return end($parts);
//     }

//     public function displayFileInfo() {
//         echo "Filename: $this->filename, Size: $this->size KB";
//     }
// }

// $file = new File();
// $file->filename = "document.txt";
// $file->size = 1024;

// echo "File Extension: " . $file->getFileExtension() . "<br>";
// $file->displayFileInfo();

//Exercise 9: Bank Account:

// class BankAccount {
//     private $accountNumber;
//     private $accountHolder;
//     private $balance;

//     public function __construct($accountNumber, $accountHolder, $initialBalance) {
//         $this->accountNumber = $accountNumber;
//         $this->accountHolder = $accountHolder;
//         $this->balance = $initialBalance;
//     }

//     public function deposit($amount) {
//         $this->balance += $amount;
//     }

//     public function withdraw($amount) {
//         if ($amount <= $this->balance) {
//             $this->balance -= $amount;
//         } else {
//             echo "Insufficient funds for withdrawal.";
//         }
//     }

//     public function displayInfo() {
//         echo "Account Number: {$this->accountNumber}, Account Holder: {$this->accountHolder}, Balance: {$this->balance} USD";
//     }
// }

// $account1 = new BankAccount("118", "Harsh Dholaliya", 1000);

// $account1->deposit(500);
// $account1->withdraw(200);

// $account1->displayInfo();

//Exercise 10: Online Shop

// class Product {
//     private $productId;
//     private $name;
//     private $price;

//     public function __construct($productId, $name, $price) {
//         $this->productId = $productId;
//         $this->name = $name;
//         $this->price = $price;
//     }

//     public function getPrice() {
//         return $this->price;
//     }
// }

// class ShoppingCart {
//     private $items = [];

//     public function addItem(Product $product) {
//         $this->items[] = $product;
//     }

//     public function calculateTotal() {
//         $total = 0;
//         foreach ($this->items as $item) {
//             $total += $item->getPrice();
//         }
//         return $total;
//     }

//     public function displayItems() {
//         echo "Shopping Cart Items:\n";
//         foreach ($this->items as $item) {
//             echo "{$item->getPrice()} - {$item->getPrice()} USD\n";
//         }
//     }
// }

// $product1 = new Product(1, "Laptop", 800);
// $product2 = new Product(2, "Smartphone", 400);

// $cart = new ShoppingCart();

// $cart->addItem($product1);
// $cart->addItem($product2);

// $cart->displayItems();
// echo "Total Price: " . $cart->calculateTotal() . " USD";



?>