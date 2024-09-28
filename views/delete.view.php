<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Web Dev Course</title>
    <link
        rel="stylesheet"
        href="/pico.min.css"
    />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <li><a href="/index.php">List Contacts</a></li>
            <li><a href="/add.php">Add Contact</a></li>
            <li><a href="/delete.php">Delete Contact</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Add Contact</h1>
    <form method="post">
        <label>Enter id of the contact you want to delete:</label>
        <input type="int" name="id">
        <input type="submit">
    </form>
</main>
</body>
</html>