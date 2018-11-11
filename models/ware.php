<?php
//$pdo enthält die Datenbankverbindung
 
class User {
   // Klasse zur Abbildung eurer Benutzer
 
   public static function newUser($email, $vorname, $nachname, $passwort) {
   }
 
   public static function findByEmail($email) {
   }
 
 
   public function delete() {
   }
 
   public function setPassword($newPassword) {
   }
 
}
 
class Product {
   // Klasse zur Darstellung von Produkten im Online-Shop ähnlich wie oben
   //...
}
 
class ProductOrder {
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