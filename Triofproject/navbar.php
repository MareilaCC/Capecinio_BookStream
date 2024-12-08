<!DOCTYPE html>
<html>
<head>
    <title>BookStream</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <nav>
        <div class="logo">
            <img src="Logo1.jpg" alt="BookStream">
        </div>
        <ul>
            <li><a href="home.php"><i class='fas fa-home'></i>Home</a></li>
            <li><a href="books.php"><i class="fas fa-book"></i> Books</a></li>
            <li><form class="search" action="search.php" method="get">
                <input type="text" name="query" id="search-input" placeholder="Search stories...">
                <button type="submit" id="search-button"><i class="fa fa-search"></i></button>
                <div id="story-results"></div>
                </form> 
            </li>
            <li><a href="create_story.php"><i class="fas fa-pencil-alt"></i> Create Story</a></li>  
        </ul>
        <div class="logo">
            </div>
        <div class="profile-dropdown">
            <img src="Profile.jpg" alt="Profile Picture" class="profile-pic"> <div class="dropdown-content">
                <a href="#">My Profile</a>
                <a href="#">Inbox</a>
                <a href="#">Notifications</a>
                <a href="#">Library</a>
                <a href="#">Language: English</a>
                <a href="#">Help</a>
                <a href="#">Settings</a>
            <div class="user-details">
                <a href="logout.php">Log Out</a>
            </div>
        </div>
</div>
    </nav>
    </body>
</html>