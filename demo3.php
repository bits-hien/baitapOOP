<?php
    class Caculator {
        public $first;
        public $second;

        function __construct($first, $second){
            $this->first = $first;
            $this->second = $second;
        }

        function cong(){
            return $this->first + $this->second;
        }

        function tru(){
            return $this->first - $this->second;
        }

        function nhan(){
            return $this->first * $this->second;
        }

        function chia(){
            if ($second = 0){
                return false;
            } else {
                return $this->first / $this->second;
            }
        }    
    }
   $GT1 = new Caculator(5, 0);
   echo $GT1->cong();
   echo "<br>";
   echo $GT1->tru();
   echo "<br>";
   echo $GT1->nhan();
   echo "<br>";
   echo $GT1->chia();
   
?>