<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HymnFlow | Home</title>
    <link rel="icon" href="assets/logo.png">
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <header>
        <?php include 'components/navigationBar.html'; ?>
    </header>

    <div class="contentBox">
        <div class="searchBox">
            <input type="text" class="searchBar" placeholder="Search for a hymn...">
            <img src="assets/search-icon.png" class="searchIcon" alt="Search Icon">
        </div>
        <div class="sideBox">
            <div class="left">
                <h1 class="boxName">View Hymns</h1>
                <p>"Discover all available hymns in our database. Click here to browse through the entire collection, find your favorite worship songs, and view their full details."</p>
                <h3>Click Here</h3>
            </div>
            <div class="right">
                <h1 class="boxName">Create Hymn Slot</h1>
                <p>"Plan and organize your worship service with ease. Select up to 10 hymns from the library, customize their order, and launch them into a presentation-ready slot."</p>
                <h3>Click Here</h3>
            </div>
        </div>
    </div>

    <footer>
        <?php include 'components/footer.html'; ?>
    </footer>
    <script src="index.js"></script>
</body>
</html>