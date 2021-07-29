<?php
    class UserData{
        public $user;
        public $userId;

        //constant declare 
        const NAME = "Humaun Kabir";

        //rules constant declare
        // class_name::const_name;


        //declare static property
        public static $age = "30";

        public function __construct($userName,$userId){
            $this->user = $userName;
            $this->userId = $userId;

            echo "Username is {$this->user} and userid is {$this->userId}";
        }

        public static function display(){
            echo "Full name is".UserData::NAME."<br>";
            echo "Age is ".self::$age;
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

    // without creating any object, access static method and properties
    UserData::display();


    // একটি ক্লাস এর মধ্যে যখন স্ট্যাটিক মেথড ব্যবহার করা হয় তখন এটি এক্সেস করার জন্য কোন অবজেক্ট তৈরি করতে হয় না ।
    // ঠিক প্রোপার্টির ক্ষেত্রেও একই , শুধু self কিওয়ার্ড ব্যবহার করলেই হয় ।

?>