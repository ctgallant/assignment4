<?php 

require('database.php');

    $query = 'SELECT * FROM todoitems ORDER BY ItemNum';
    $statement = $db->prepare($query);
    $statement->execute();
    $todoitems = $statement->fetchAll();
    $statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>ToDo List</title> 
</head>

<body>
    <main>
        <?php if(!empty($todoitems)) { ?>
    <section>
        <h1>ToDo List</h1>

    <?php foreach ($todoitems as $item) : ?>
    <p><?php echo $item['Title']; ?></p>
    <p><?php echo $item['Description']; ?></p>
</div>

<div>
    <form action="delete.php" method="post">
        <input type="hidden" name="item_num" value="<?php echo $item['ItemNum']; ?>">
        <button>Delete</button>
    </form>    
</div>
    </section>
<?php endforeach; ?>
<p>No items exist yet.</p>
<?php } else { ?>
    <p>No to do list items exist yet.</p>
<?php } ?>
<section>
<div>
    <form action="add.php" method="post">
            <label>Title:</label>
                <input type="text" name="title" maxlength="20" placeholder="Title" required>
            <label>Description:</label>
                <input type="text" name="description" maxlength="50" placeholder="Description" required>
            <button>Add</button>
    </form>   
</div>
</section>
</main>
</body>
</html>
