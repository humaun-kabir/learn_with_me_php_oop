<?php
    interface School{
        public function mySchool();
    }

    interface College{
        public function myCollege();
    }

    interface University{
        public function myUniversity();
    }

    class Teacher implements School, College, University{

        public function __construct(){
            $this->mySchool();
            $this->myCollege();
            $this->myUniversity();
        }
        public function mySchool(){
            echo "I am a school teacher <br>";
        }

        public function myCollege(){
            echo "I am a college teacher <br>";
        }

        public function myUniversity(){
            echo "I am a university teacher <br>";
        }
    }

    class Student implements School, College, University{

        public function __construct(){
            $this->mySchool();
            $this->myCollege();
            $this->myUniversity();
        }
        public function mySchool(){
            echo "I am a school Student <br>";
        }

        public function myCollege(){
            echo "I am a college Student <br>";
        }

        public function myUniversity(){
            echo "I am a university Student";
        }
    }

    $teacher = new Teacher();

    $student = new Student();

// interface e je method thake setar kono body part thakena.
// interface ke arekti class e extend korte hoy, then interface e je method thake oigulake override kore kaj korte hoy.
// multiple interface ekti class e use kora jai.
// abar interface ke multiple class e use kora jai. 
?>