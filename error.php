<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <header>
        <h1>ToDo List</h1>
    </header>
    <main>
        <h2>Database Error</h2>
        <p>There is an error connecting to the database.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <br>
        <p><a href=".">Back to ToDO List</a></p>
    </main>
</body>
</html>