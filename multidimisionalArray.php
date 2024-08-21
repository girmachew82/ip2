<?php
require 'nav.php';
$books = [
            [
                "title"=>"PHP",
                "autor"=>"Ramson Lordof",
                "publishedYear"=>1990,
                "price"=>150
            ],
            [
                "title"=>"HTML",
                "autor"=>"Team Bernel lee",
                "publishedYear"=>1940,
                "price"=>200
            ],
            [
                "title"=>"CSS",
                "autor"=>"Ramson Lordof",
                "publishedYear"=>2000,
                "price"=>90
            ]
            ];

 ?>
 <h1>Web Programming Books</h1>  

  <?php for($i = 0; $i < count($books); $i++):?>
    <p>Title : <?php echo $books[$i]['title']?></p>
    <p>Autor: <?php echo $books[$i]['autor']?></p>
    <p>Published year : <?php echo $books[$i]['publishedYear']?></p>
    <p>Price :<?php echo $books[$i]['price']?></p>
    <?php endfor;?>
  