<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>

    <body>       

        <h1> This is my site.</h1><hr>
        <div id="variables">
            <h3>PHP basics : Variables</h3>
            <?php
                $characterName = "John";
                $characterAge = 50;
                echo("Hello World! I am here...</br>"); 
                echo"There was a man name $characterName.</br>";
                $likedAge = $characterAge - 10;
                echo"He was $characterAge years old but liked being $likedAge again.";

                $phrase = "To be or not to be";
                $age = 30;
                $gpa = 3.7;
                $isMale = true;
                echo"<hr>";
                echo "$phrase </br>";
                echo $age;
                echo"<br>";

                $phrase = "Giraffe Academy";
                echo"$phrase<br>";
                echo"The length is : ";
                echo strlen($phrase);
                echo"<br>The first character is : ";
                echo $phrase[0];
                $phrase[0]="B";
                echo"<br>$phrase<br>";
                echo"The first character now is : ";
                echo $phrase[0];
                echo"<br> The modified text is : ";
                echo str_replace("ffe", "Panda", $phrase);
                echo"<br>Now using substr function : <br>";
                echo substr($phrase,8,3);
                echo"<hr><br>";

                echo 40;
                echo "<br>";
                echo 40.55;
                echo"<br>";
                echo 10%4;
                echo "<br>";
                $num = 10;
                echo $num*2 + 5;
                echo "<br>the absolute value of -100 is : <br>";
                echo abs(-100);
                echo"<br>the max of 20 and 30 is : <br>";
                echo max(10,20);
                echo"<br>the min of 10 and 15 is : <br>";
                echo min(10,15);
                echo "<br>the rounded value of 3.2 is : <br>";
                echo round(3.2);
                echo "<br>the ceil of 4.3 is : <br>";
                echo ceil(4.3);
                echo "<br>the floor of 5.7 is : <br>";
                echo floor(5.7);
            ?>
        </div>

        <br><hr>
        <h3>My Template</h3>
        <div>
            <form action="demo1.php">
                <input type="text" name="" id=""><br>
                <input type="submit"><br>
            </form>
            <?php 
                
            ?>
        </div>

        <br><hr>
        <h3>Taking input from users using form<h3>
        <hr>
        <h3>Building a basic User form :</h3>
        <div id="userform">
            <form action="demo1.php" method="get">
                Name: <input type="text" name="username"><br>
                Age: <input type="text" name="age"><br>
                <input type="submit">
            </form>

            <?php 
                echo "<br>The submitted name is : <br>";
                echo $_GET["name"];
                echo "<br>The age is : <br>";
                echo $_GET["age"];
            ?>
        </div>
        
        <br><hr> 
        <h3>Building a basic calculator :</h3>
        <div id="calculator">
            <form action="demo1.php" method="get">
                First number : <input type="number" name="num1"><br>
                Second number : <input type="number" name="num2"><br>
                <input type="submit" name="add" value="add"><br>
            </form>

            <?php
                echo "The sum of two numbers is : <br>";
                echo $_GET["num1"]+$_GET["num2"];
            ?>
        </div>
        

        <br><hr> 
        <h3>Building a Mad Libs game :</h3>
        <div id="madlibs">
            <form action="demo1.php" method="get">
                Color : <input type="text" name="color"><br>
                Plural noun : <input type="text" name="pluralNoun"><br>
                Celebrity : <input type="text" name="celebrity"><br>
                <input type="submit">
            </form>        
            <?php 
                $color = $_GET["color"];
                $pluralNoun = $_GET["pluralNoun"];
                $celebrity = $_GET["celebrity"];
                echo "Roses are $color <br>";
                echo "$pluralNoun are blue <br>";
                echo "I love $celebrity <br>";
            ?>
        </div>

        <br><hr>
        <h3>URL parameters :</h3>
        <div id="urlParameters">
            <h3>Using method="get" for retriving password : </h3>
            <form action="demo1.php" method="get">
                Name : <input type="text" name="username"><br>
                Password : <input type="password" name="password"><br>
                <input type="submit">
            </form>
            <?php
                $password = $_GET["password"];
                echo "<br>Your Password is : $password ";
                echo "<br>Password shown in the Url as well!!!<br>";
                
            ?>
            <br>
            <h3>Using method="post" for retriving password : </h3>
            <form action="demo1.php" method="post">
                Name : <input type="text" name="username"><br>
                Password : <input type="password" name="password"><br>
                <input type="submit">
            </form>

            <?php
                $password = $_POST["password"];
                echo "<br>Your Password is : $password ";
                echo "<br>Password is not shown in the Url...<br>";
            ?>
        </div>

        <br><hr> 
        <h3>Arrays basics :</h3>
        <div id="array">
            <?php
                $friends = array("Tom","Harry","Mathew","Patrick");
                echo $friends;
                $length = count($friends);
                echo "<br>Total number of friends is : $length<br>";
                echo "The first friend in the list is : $friends[0]<br>";
                $friends[$length] = "Angela";
                $length=count($friends);
                $newFriend = $friends[$length-1];
                echo "The new friend added is : $newFriend<br>";
                echo "Total number of friends now is : $length <br>";

            ?>
        </div>

        <br><hr> 
        <h3>Getting inputs using checkboxes :</h3>
        <div id="checkboxes">
            <form action="demo1.php" method="post">
                <p>Select your favourite fruit : </p>
                Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
                Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
                Bananas: <input type="checkbox" name="fruits[]" value="bananas"><br>
                Grapes: <input type="checkbox" name="fruits[]" value="grapes"><br>
                <input type="submit"><br>
            </form>

            <?php
                $selectedFruits = $_POST["fruits"];
                echo "<br>the first fruit selected is : $selectedFruits[0]<br>";

            ?>
        </div>

        <br><hr> 
        <h3>Associative Array : "Key"=>"Value" pairs</h3>
        <div id="assArray">
            <form action="demo1.php" method="post">
                Student name : <input type="text" name="student">
                <input type="submit">
            </form>

            <?php
                $grades = array("Jim"=>"A+","Tom"=>"A","Pam"=>"B+","Dan"=>"A-");
                $student = $_POST["student"];
                echo "<br>The grade of student is : $grades[$student]";
            ?>
        </div>

        <br><hr>
        <h3>Functions in PHP : </h3>
        <div id="functions">

            <?php
                function sayHi($user){
                    echo "Hello $user!<br>";
                }
                sayHi("Tom");
                sayHi("David");
            ?>  

            <p>-------Return Statements in functions.--------</p> 
            <form action="demo1.php">
                <p>Enter a number to cube : </p>
                <input type="number" name="numberToCube">
                <input type="submit">
            </form>
            <?php

                function cube($num){
                    return $num*$num*$num;
                }
                $cube = cube($_GET["numberToCube"]);
                echo "<p>The cube is : $cube </p>";   
            ?>
        </div>

        <br><hr>
        <h3>If statement (conditional statements)</h3>
        <div id="ifStatement">
             <?php
                $isMale = true;
                $isTall = true;
                if($isMale && $isTall){
                    echo "You are a tall male<br>";
                } elseif($isMale && !$isTall){
                    echo "You are a short male<br>";
                } elseif(!$isMale && $isTall){
                    echo "You are tall but not male<br>";
                } else {
                    echo "You are neither male nor tall<br>";
                }
             ?>  
             <p>-----comparision using if-statement-----</p> 
             <?php
                function getMax($num1, $num2, $num3){
                    if($num1 >= $num2 && $num1 >= $num3){
                        return $num1;
                    } elseif($num2 >= $num1 && $num2 >= $num3){
                        return $num2;
                    } else {
                        return $num3;
                    }
                }
                echo "the max number is : ";
                echo getMax(3,9,7);
                echo "<br>";
             ?>
        </div>

        <br><hr>
        <h3>Building a better calculator.</h3>
        <div id="betterCalculator">
               <form action="demo1.php" method="post">
                    First Num: <input type="number" step="0.1" name="num1"><br>
                    OP: <input type="text" name="op"><br>
                    Second Num: <input type="number" step="0.1" name="num2"><br>
                    <input type="submit">
               </form> 

            <?php 
                $fnum = $_POST["num1"];
                $snum = $_POST["num2"];
                $op = $_POST["op"];

                if($op == "+"){
                    $sum = $fnum + $snum;
                    echo "<br>The sum is : $sum";
                } elseif($op == "-"){
                    $diff = $fnum - $snum;
                    echo "<br>The difference is : $diff";
                } elseif($op == "*"){
                    $mul = $fnum * $snum;
                    echo "<br>The product is : $mul";
                } elseif($op == "/"){
                    $div = $fnum / $snum;
                    echo "<br>The division is : $div";
                } else {
                    echo "<br>Invalid Operator";
                }
            ?>
        </div>

        <br><hr>
        <h3>Using switch statements for conditional operations</h3>
        <div id="switchStatement">
            <form action="demo1.php">
                <p>Enter your grade : </p>
                <input type="text" name="grade"><br>
                <input type="submit">
            </form>

            <?php 
                $grade = $_POST["grade"];
                switch($grade){
                    case "A":
                        echo "You did amazing!<br>";
                        break;
                    case "B":
                        echo "You did great!<br>";
                        break;
                    case "C":
                        echo "You did good.<br>";
                        break;
                    case "D":
                        echo "You should work hard.<br>";
                        break;
                    default:
                        echo "Invalid grade entered.<br>";
                }
            ?>      
        </div>

        <br><hr> 
        <h3>Using While loops </h3>
        <div id="whileLoops">
            <form action="demo1.php" method="post">
                
                <input type="submit">
            </form>

            <?php
                $index = 1;
                while($index <= 5){
                    echo "$index <br>";
                    $index++;
                }
                
            ?>
        </div>

        <br><hr>
        <h3>Using do-while loop</h3>
        <div id="doWhileLoop">
            <form action="">
                <input type="text"><br>
                <input type="submit"><br>
            </form>
            <?php 
                $index = 1;
                do{
                    echo "$index <br>";
                    $index++;

                }while($index <= 5);
                
            ?>
        </div>

        <br><hr>
        <h3>Using for loops</h3>
        <div>
            <form action="demo1.php">
                <input type="text"><br>
                <input type="submit"><br>
            </form>
            <?php 
                $luckyNumbers = array(4,8,14,16,23,34);
                for($i=0; $i < count($luckyNumbers); $i++){
                    echo "$luckyNumbers[$i] <br>";
                    $index++;
                }
            ?>
        </div>

        <br><hr>
        <h3>Using comments in PHP</h3>
        <div>
            <form action="demo1.php">
                <input type="text"><br>
                <input type="submit"><br>
            </form>
            <?php
                // this is my comment for this section
                // this line prints out a string 
                echo "Comments are fun!<br>";
                echo "// lets us put single line comment<br>";
                echo "/* your multi-line comments here <br>";
                echo " second line of comment */<br>";

            ?>
        </div>

        <br><hr>
        <h3>Using include statement in PHP</h3>
        <div>
            <form action="demo1.php">
                <input type="text"><br>
                <input type="submit"><br>
            </form>
            <?php 
               include "footer.html" 
            ?>

            <p>----including another php file----</p>
            <?php 
                $title = "My First Post";
                $author = "Bimal";
                $wordCount = 250;
                include "article-header.php";
                
                // echo "There are $metersInKilometers meters in a kilometer <br>";                
                // sayHi("Mike");
                // include "useful-tools.php";
            ?>
        </div>

        <br><hr>
        <h3>Classes and Objects in PHP</h3>
        <div>
            <form action="demo1.php">
                <input type="text"><br>
                <input type="submit"><br>
            </form>
            <?php 
                class Book{
                    var $bookTitle;
                    var $bookAuthor;
                    var $bookPages;
                }

                $book1 = new Book;
                $book1->bookTitle = "Harry Potter";
                $book1->bookAuthor = "JK Rowling";
                $book1->bookPages = 400;
               echo "<br>The author of $book1->bookTitle is $book1->bookAuthor<br>";

               $book2 = new Book;
               $book2->bookTitle = "Lord of the Rings";
               $book2->bookAuthor = "Tolkien";
               $book2->bookPages = 700;
              echo "<br>The author of $book2->bookTitle is $book2->bookAuthor<br>";
            ?>

            <p>------- Now lets get to know the Constructors of a Class -------</p>
            <?php 
                class Novel{
                    var $novelTitle;
                    var $novelAuthor;
                    var $novelPages;

                    function __construct(){
                        echo "New Novel Created. <br>";
                    }
                }

                $novel1 = new Novel();
                $novel1->novelTitle = "The Alchemist";
                $novel1->novelAuthor = "Paulo Coelho";
                $novel1->novelPages = "300";
                echo "The author of $novel1->novelTitle is $novel1->novelAuthor <br>";

            ?>

            <p>------ Time to use parametrized constructors -------</p>
            <?php 
                class Journal{
                    var $journalTitle;
                    var $journalAuthor;
                    var $journalPages;

                    function __construct($title, $author, $pages){
                        $this->journalTitle = $title;
                        $this->journalAuthor = $author;
                        $this->journalPages = $pages;
                        echo "New Journal Created..<br>";
                    }
                }

                $journal1 = new Journal("The General Theory of Relativity","Albert Einstein",350);
                echo "The author of $journal1->journalTitle is $journal1->journalAuthor <br>";

            ?>
        </div>

        <br><hr>
        <h3>Object Functions in PHP</h3>
        <div>
            <form action="demo1.php">
                <input type="text"><br>
                <input type="submit"><br>
            </form>
            <?php 
                class Student {
                    var $name;
                    var $major;
                    var $gpa;

                    function __construct($name, $major, $gpa){
                        $this->name = $name;
                        $this->major = $major;
                        $this->gpa = $gpa;
                        echo "<p>New Student Created...</p>";
                    }

                    function hasHonors(){
                        if($this->gpa >= 3.5){
                            return "true";
                        }
                        return "false";   //returning string, not boolean
                    }
                }

                $student1 = new Student("Harry", "Business", 3.2);
                $student2 = new Student("Tom", "Art", 3.7);
                echo "$student1->name has honors : ";
                echo $student1->hasHonors();
                echo "<br>$student2->name has honors : ";
                echo $student2->hasHonors();
            ?>


            <br><p>------- Getters and Setters functions of a Class -------</p>
            <?php 
                class Movie{
                    public $title; // visibility modifiers -- public/var, private
                    private $rating; // ratings can be G, PG, PG-13, NR

                    function __construct($title, $rating){
                        $this->title = $title;
                        $this->setRating($rating);
                        echo "New Movie Created...<br>";
                    }

                    function getRating(){
                        return $this->rating;
                    }

                    function setRating($rating){
                        if($rating == "G" || $rating == "PG" || $rating == "PG-13"){
                            $this->rating = $rating;                            
                        } else {
                            $this->rating = "NR";
                        }
                    }
                }

                $avengers = new Movie("Avengers", "PG-13");
                $avengers->setRating("Dog");
                echo "<br>The rating of $avengers->title is : ";
                echo $avengers->getRating();
            ?>
        </div>

        <br><hr>
        <h3>Inheritance in PHP Classes</h3>
        <div>
            <form action="demo1.php">
                <input type="text"><br>
                <input type="submit"><br>
            </form>
            <?php 
                class Chef {
                    function makePasta(){
                        echo "The Chef makes pasta.<br>";
                    }
                    function makeSpecialDish(){
                        echo "The Chef makes bbq ribs.<br>";
                    }
                }

                class ItalianChef extends Chef {
                    function makePizza(){
                        echo "The Chef makes pizza.<br>";
                    }
                    function makeSpecialDish(){
                        echo "The Chef makes roasted turkey.<br>";
                    }
                }

                $chef = new Chef();
                $chef->makePasta();
                $chef->makeSpecialDish();
                $italianChef = new ItalianChef();
                $italianChef->makePasta();
                $italianChef->makeSpecialDish();

                
            ?>
        </div>



        
    </body>
</html>