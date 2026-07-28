# function-with-parameters
function-with-parameters - https://minhazfaisal.github.io/php-function-with-parameters/
<?php

        echo "<h1> Function with parameters</h1>";

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

        function greetings7($name){
            echo "<h4> Hello $name </h4>";
        }
        greetings7("Minhaz");

        $greetings8 = function($name = "world"){
            echo "<h4> Hello $name </h4>";
        };
        $greetings8();
        
?>
