<?php 

    // factory pattern ///
    
    class Book {
        private $bookName;
        private $bookAuthor;
        const BR = '<br />';
    
        public function __construct($name, $author) {
            $this->bookName = $name;
            $this->bookAuthor = $author;
        }
        public function getNameAndAuthor() {
            return $this->bookName . ' - ' . $this->bookAuthor.self::BR;
        }

    }

    class BookFactory {

        public static function create($name, $author) {
            return new Book($name, $author);
        }
    }

    $book1 = BookFactory::create('The Redbreast', 'Jo Nesbo');
    $book2 = BookFactory::create('The Seventh Scroll', 'Wilbur Smith');
    $book3 = BookFactory::create('Birdsong', 'Sebastian Faulks');
    $book4 = BookFactory::create('Artimis', 'Andy Weir');

    $book1Info = $book1->getNameAndAuthor();
    $book2Info = $book2->getNameAndAuthor();
    $book3Info = $book3->getNameAndAuthor();
    $book4Info = $book4->getNameAndAuthor();

    $books = array();

    array_push($books, $book1Info, $book2Info, $book3Info, $book4Info);
    
?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<h4 class="center grey-text">My Favorite Books!</h4>

<div class="container">
    <div class="row">
        <?php foreach($books as $book): ?>
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <img src="public/img/books.png" class="pizza" alt="">
                <div class="card-content center">
                    <h6><?php echo $book; ?></h6>
                    <ul class="grey-text">

                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include('templates/footer.php'); ?>

</html>