<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lunch Recipes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="hlunch">Lunch</h1>

    <form method="post" action="display_recipes.php">
    <?php 
        $conn = new mysqli('localhost', 'root', '', 'openyourfridge');

        $query = "SELECT * FROM lunch_recipes";
        $recipes = $conn->query($query);

        
        foreach ($recipes as $recipe) {
            echo '<div class="breakfast_recipes_box" style="background-image: url(' . $recipe['image_url'] . '); background-size: cover; ">';
            echo '<h2 class="h2_breakfast" >' . $recipe['Name'] . '</h2>';
            echo '<p><strong class="h2_breakfast">Ingredients:</strong> ' . $recipe['ingredients'] . '</p>';
            echo '<p><strong class="h2_breakfast">Preparation:</strong> ' . $recipe['steps'] . '</p>';
            echo '</div>';
        }
       
    

      
    ?>
    
    </form>
</body>
</html>
