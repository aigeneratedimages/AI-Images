    <?php
    $currentURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://") . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $pageTitle2 = "Play Unblocked Google Subway Surfers Game Online With UBG365.Github.IO";
    $pageTitle = "Subway Surfers Unblocked IO Games";
    $pageURL = "thumbnail";
    ?>
    <?php include("assets/header.php"); ?>
    <style>
    .pagination{display:flex;list-style:none;display:flex;justify-content:center;align-items:center;flex-wrap:wrap}.pagination li{margin:0 5px}.pagination>a,.pagination>span{background-color:#fff;color:#434343;display:flex;justify-content:center;align-items:center;font-size:20px;margin:0 5px 8px;border-radius:5px;min-width:20px;padding:0 10px;height:40px;box-shadow:0 1px 8px rgba(0,0,0,.4);text-decoration:none;position:relative;font-family:Helvetica,Arial,sans-serif}.pagination>span{pointer-events:none}.pagination svg{height:24px;width:24px}.pagination>a.page-active,.pagination>a:hover{background-color:#2c3e50;color:#fff}
    </style>
    <div class="container">
    <div class="bottom-container">
    <h1 class="item-title"><?php echo $pageTitle; ?></h1>
    <div class="row">
    <?php
    $items = array(
    array("title" => "Train Run", "image" => "train-run"),
    array("title" => "Drive Mad", "image" => "drive-mad"),
    array("title" => "Red Ball", "image" => "red-ball"),
    array("title" => "Tunnel Rush", "image" => "tunnel-rush"),
    array("title" => "Slope", "image" => "slope"),
    array("title" => "Iron Man", "image" => "iron-man"),
    array("title" => "Robot Fight", "image" => "robot-fight"),
    array("title" => "Horror Night", "image" => "horror-night"),
    array("title" => "Pixel Fight", "image" => "pixel-fight"),
    array("title" => "Bike Race 3D", "image" => "bike-race-3d"),
    array("title" => "Car Crash", "image" => "car-crash"),
    array("title" => "Ball Tales", "image" => "ball-tales"),
    array("title" => "Park Car", "image" => "park-car"),
    array("title" => "Car Eater", "image" => "car-eater"),
    array("title" => "Horror Warriors", "image" => "horror-warriors"),
    array("title" => "Blubble", "image" => "blubble"),
    array("title" => "Bumper Ball", "image" => "bumper-ball"),
    array("title" => "Crowd Drift", "image" => "crowd-drift"),
    array("title" => "Cubes 2048", "image" => "cubes-2048"),
    array("title" => "Ducklings", "image" => "ducklings"),
    array("title" => "EV.IO", "image" => "ev"),
    array("title" => "Flip Hero", "image" => "flip-hero"),
    array("title" => "Horror Night", "image" => "horror-night"),
    array("title" => "Horror Warriors", "image" => "horror-warriors"),
    array("title" => "Invaders", "image" => "invaders"),
    array("title" => "Miner Space", "image" => "miner-space"),
    array("title" => "Princess on Run", "image" => "princess-on-run"),
    array("title" => "Rebel Gamio", "image" => "rebel-gamio"),
    array("title" => "Slime.IO", "image" => "slime-io"),
    array("title" => "Smash Karts", "image" => "smash-karts"),
    array("title" => "Snakes VS Worms", "image" => "snake-vs-worms"),
    array("title" => "Summon the Dragon", "image" => "summon-the-dragon"),
    array("title" => "Sushi Party", "image" => "sushi-party"),
    array("title" => "Top Guns", "image" => "top-guns"),
    array("title" => "Venge.IO", "image" => "venge"),
    array("title" => "Warrior Survival", "image" => "warrior-survival"),
    array("title" => "Atlanta", "image" => "atlanta"),
    array("title" => "Bali", "image" => "bali"),
    array("title" => "Beijing", "image" => "beijing"),
    array("title" => "Berlin", "image" => "berlin"),
    array("title" => "Buenos Aires", "image" => "buenos-aires"),
    array("title" => "Buenos Aires 2023", "image" => "buenos-aires-2023"),
    array("title" => "Chicago", "image" => "chicago"),
    array("title" => "Fantasy Fest", "image" => "fantasy-fest"),
    array("title" => "Haunted Hood", "image" => "haunted-hood"),
    array("title" => "Havana", "image" => "havana"),
    array("title" => "Hawaii", "image" => "hawaii"),
    array("title" => "Hongkong", "image" => "hongkong"),
    array("title" => "Houston", "image" => "houston"),
    array("title" => "Iceland", "image" => "iceland"),
    array("title" => "London", "image" => "london"),
    array("title" => "Marrakesh", "image" => "marrakesh"),
    array("title" => "Monaco", "image" => "monaco"),
    array("title" => "Mumbai", "image" => "mumbai"),
    array("title" => "New Orleans", "image" => "new-orleans"),
    array("title" => "New York", "image" => "new-york"),
    array("title" => "New York 2023", "image" => "new-york-2023"),
    array("title" => "Rio", "image" => "rio"),
    array("title" => "Saint Petersburg", "image" => "saint-petersburg"),
    array("title" => "San Francisco", "image" => "san-francisco"),
    array("title" => "Seoul", "image" => "seoul"),
    array("title" => "Singapore", "image" => "singapore"),
    array("title" => "Tokyo", "image" => "tokyo"),
    array("title" => "Tokyo 2023", "image" => "tokyo-2023"),
    array("title" => "Venice", "image" => "venice"),
    array("title" => "Winter Holiday", "image" => "winter-holiday"),
    array("title" => "Zurich", "image" => "zurich"),
    );
    $itemsPerPage = 30;
    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($items) / $itemsPerPage);
    $startIndex = ($page - 1) * $itemsPerPage;
    $currentItems = array_slice($items, $startIndex, $itemsPerPage);
    foreach ($currentItems as $item) {
    echo '<div class="col-md-2 col-sm-3 col-4 item-grid">';
    echo '<a href="/' . $item['image'] . '.php"><div class="list-game">';
    echo '<div class="list-thumbnail"><img src="/images/' . $item['image'] . '.webp" class="small-thumb" alt="' . $item['title'] . '" loading="lazy"></div>';
    echo '<div class="list-content"><div class="list-title">' . $item['title'] . '</div></div></div></a>'; echo '</div><br>';}?>
    </div><span class="pagination">
    <?php
    if ($page > 1) {echo '<a href="?page=' . ($page - 1) . '">< Previous</a>';}
    if ($page < $totalPages) {echo '<a href="?page=' . ($page + 1) . '">Next ></a>';}?></span>
    </div></div>
    <?php include("assets/footer.php"); ?>