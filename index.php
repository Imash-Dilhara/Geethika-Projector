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
            </div>
            <div class="right">
                <h1 class="boxName">Create Hymn Slot</h1>
            </div>
        </div>
    </div>

    <footer>
        <?php include 'components/footer.html'; ?>
    </footer>
    <script src="index.js"></script>
</body>
</html>