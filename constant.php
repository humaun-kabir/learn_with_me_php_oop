<?php
    class UserData{
        public $user;
        public $userId;

        //constant declare 
        const NAME = "Humaun Kabir";

        //access constant 
        // class_name::const_name;

        public function __construct($userName,$userId){
            $this->user = $userName;
            $this->userId = $userId;

            echo "Username is {$this->user} and userid is {$this->userId}";
        }

        public function display(){
            echo "Full name is".UserData::NAME;
        }

        public function __destruct()
        {
            unset($this->user);
            unset($this->userId);
            
        }
        
    }

    $user = "humaun";
    $id = "25";
    $ur = new UserData($user,$id);
    echo "<br>";
    $ur->display();


?>