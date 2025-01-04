<?php 
 class RecipeController extends Controller {
    private $model;

    public function __construct()
    {
        $this->model = new  RecipeModel();
    }

    public function index(){
        $recipes = $this->model->getAllRecipes();
        $this->view('recipes/index', ['recipes' => $recipes]);
    }

    public function create() {
        $this->view('recipes/create');
    }

    public function store() {
        $title = $_POST['title'];
        $ingredients = $_POST['ingredients'];
        $steps = $_POST['steps'];
        $categorie = $_POST['categorie'];
        $image = '';  // handle image upload later
        $this->model->addRecipe($title, $ingredients, $steps, $categorie,$image);
        header('Location: /recipes');

    }

 }
?>