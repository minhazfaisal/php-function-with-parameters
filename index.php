<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    
    <div class="container">
        <?php

        echo "<h1> Function with parameters</h1>";

        echo "<p>  </p>";

        //function with parameters
        function grettings(){
            echo "<h4> Hello </h4>";
        }
        grettings();

        function grettings1($info){
            echo "<h4> Hello, " . $info . "!</h4>";
        }
        grettings1("Minhaz");

        function grettings2(){
            $name = "Minhaz";
            echo "<h4> Hello, " . $name . "!</h4>";
        }
        grettings2();

        $name1 = "Minhaz";
        function grettings3(){
            global $name1;
            echo "<h4> Hello, " . $name1 . "!</h4>";
        }
        grettings3();

        function grettings4($number1, $number2){
            return $number1 + $number2;
        }
        $result = grettings4(10, 20);
        echo "<h4> The sum is: " . $result . "</h4>";

        function grettings5($name2 = "world"){
            echo "<h4> Hello, " . $name2 . "!</h4>";
        }
        grettings5();   
        
        function grettings6($name2 = "world"){
            echo "<h4> Hello, " . $name2 . "!</h4>";
        }
        grettings6("Minhaz");
        
        ?>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>