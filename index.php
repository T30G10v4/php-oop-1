<?php 

    class Movie {

        public $name = "";
        public $genre = "";

        public function printMovie() {

            return "Nome =".$this->name." Genere =".$this->genre.".";
            
        }

        public function __construct($name, $genre) {

            $this->name = $name;
            $this->genre = $genre;

        }

    }

    $strangeDays = new Movie("Strange Days", "Sci-Fi");
    $lordOfTheRings = new Movie("The Lord Of THre Rings","Fantasy");

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
    
    <h2><?php $strangeDays->printMovie(); ?></h2>
    <h2><?php $lordOfTheRings->printMovie(); ?></h2>

</body>
</html>