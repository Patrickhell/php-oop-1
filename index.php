<?php
class Movie
{

    public $title;
    public $producer;
    public $year;
    public $discount = 0;

    function __construct($_title, $_producer, $_year)
    {
        $this->title = $_title;
        $this->producer = $_producer;
        $this->year = $_year;
    }

    public function setDiscount($_year)
    {
        if ($_year <= 2000) {
            $this->discount = 25;
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}



$movie_1 = new Movie('Mortal combat', 'John Wu', 2000);
$movie_1->setDiscount(2000);
$discount_movie_1 = $movie_1->getDiscount(25);

$movie_2  = new Movie('Mission Impossible', 'Tom cruise', 2023);
$movie_2->setDiscount(2023);
$discount_movie_2 = $movie_2->getDiscount();






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!--
    è definita una classe ‘Movie’ :
 => all'interno della classe sono dichiarate delle variabili d'istanza
 => all'interno della classe è definito un costruttore
 => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
-->


    <div>
        <h2>
            MOVIE 1
        </h2>

        <?php
        foreach ($movie_1 as $key => $value) { ?>
            <p>
                <?php
                echo "$key : $value";
                ?>
            </p>

        <?php } ?>

    </div>

    <div>
        <h2>
            MOVIE 2
        </h2>


        <?php
        foreach ($movie_2 as $key => $value) { ?>
            <p>
                <?php
                echo "$key : $value";
                ?>
            </p>

        <?php } ?>
    </div>
</body>

</html>