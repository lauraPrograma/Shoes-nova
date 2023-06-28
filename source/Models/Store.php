<?php
namespace Source\Models;
use Source\Core\Connect;

class Store{
    public function selectAll(){
    $query = "SELECT * FROM store";
    $stmt = Connect::getInstance()->query($query);
    return $stmt->fetchAll();

    }
    public function selectByCategory(string $categoryName){
        $query = "SELECT store.* FROM store JOIN categories ON categories.id = store.category_id
        WHERE categories.name LIKE '{$categoryName}'";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();

    } 
    
}