<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add New Recipe</h1>
    <form action="/recipes/store" method="POST">
        <input type="text" name="title" placeholder="Recipe Title" required>
        <input type="text" name="ingredients" placeholder="Ingredients" required>
        <input type="text" name="steps" placeholder="Steps" required>
        <input type="text" name="categorie" placeholder="Category" required>
        <button type="submit">Add Recipe</button>
    </form>
</body>
</html>