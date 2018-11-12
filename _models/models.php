<?php
//establish connection to database
require_once('./models/dbconnect.php')
 
class User {
   // Klasse zur Abbildung der Nutzer
 
   public static function newUser($email, $vorname, $nachname, $passwort) {
   }
 
   public static function findByEmail($email) {
   }
 
 
   public function delete() {
   }
 
   public function setPassword($newPassword) {
   }
 
}

class CustomerSupplier {
    // Klasse zur Abbildung der Kunden und Lieferanten
}
    
    
    
class Product {
   // Klasse zur Darstellung der Waren
   //...
}
 
class Order {
   // Klasse zur Darstellung neuer Produktbestellungen
   public function __constructor(User $user) {
   }
 
   public function addProduct(Product $product) {
   }
 
   public function addProductById($productId) {
   }
 
   public function buy() {
   } 
}
?>