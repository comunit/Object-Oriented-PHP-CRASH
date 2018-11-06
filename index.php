<?php
 class AboutMe {

   private $name;
   private $email;
   private $age;
   private $likes;

   public function __construct($name, $email, $age, $likes) {
     $this->name = $name;
     $this->email = $email;
     $this->age = $age;
     $this->likes = $likes;
   }

   public function getLikes() {
     return $this->likes;
   }
 }

$aboutme = new AboutMe('Imran', 'Comunit@live.com', 28, 'Coding');

echo $aboutme->getLikes();
?>