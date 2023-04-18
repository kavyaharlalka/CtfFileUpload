<!DOCTYPE html>
<html>
<head>
    <title>Event Search</title>
</head>
<body>
    <h1>Search upcoming Events</h1>
    <h3>There are currently two upcoming events - hackumass and hackher.</h3>
    <h3>Hint - The search functionality uses file inclusion. The `secret` lies just above the root of the web app.</h3>
    <form>
        <label>Search: <input type="text" name="search"></label>
        <button type="submit">Submit</button>
    </form>
    <?php
    if(isset($_GET['search'])) {
        $keyword = $_GET['search'];
        include("$keyword.php");
    }
    ?>
</body>
</html>
