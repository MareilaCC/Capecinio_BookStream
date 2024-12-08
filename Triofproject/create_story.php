<!DOCTYPE html>
<html>
<head>
    <title>Create Story</title>
</head>
<body>
    <h1>Create Story</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Title: <input type="text" name="title"><br>
        Content: <textarea name="content"></textarea><br>
        <input type="submit" value="Create Story">
    </form>
</body>
</html>