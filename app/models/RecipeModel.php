<?php 
class RecipeModel {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function getAllRecipes(){
        $stmt = $this->db->prepare("SELECT * FROM recipes");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addRecipe($title,$ingredients,$steps,$categorie,$image){
        $stmt = $this->db->prepare("INSERT INTO recipes (title, ingredients, steps, categorie, image) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute($title,$ingredients,$steps,$categorie,$image[]);
    }   

}


?>