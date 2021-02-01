### https://php-design-patterns-001-factor.herokuapp.com/
 
## PHP Design Patterns | Factory Pattern

1. INTRODUCTION

Here  I have created one of the most popular design patterns called the Factory Pattern. Design patterns use OOP and make code easier  to maintain and organise. With a factory pattern a class simply creates the object that you want to use. So I have developed two classes; one is the actual object created, and the other is the class that creates the object.

The book class has the constructor function that creates the instance of each book. It also holds the method that gets the name and the author. These functions are both public as they need to be accessed by the static book factory class.

As the book name and author variables are both private the book factory class must have a public and static function to create and return the name and author of each instantiated book. Each book instance's data is hard coded as this is a simple project on factory patterns for PHP design patterns, it has no need for a database.

After pushing each book instance to an array I can then loop through it in the HTML and display each book card with the interpolated data. 
