<?php
    trait Java{
        public function javaCoder(){
            return "I love java <br>";
        }
    }

    trait Php{
        public function phpCoder(){
            return "I love PHP <br>";
        }
    }

    class CoderOne{
        use Java, Php;
    }

    $c1 = new CoderOne();
    echo $c1->javaCoder();
    echo $c1->phpCoder();

?>