<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>F1 Fan</title>
        <meta name="description" content="A website by F1 fan for F1 fan" />
        <link rel="stylesheet" type="text/css" href="/api/css/styles.css" />
        <script data-search-pseudo-elements defer src="https://kit.fontawesome.com/d5d901e044.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/api/scripts/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="/api/scripts/f1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    </head>
    <body>
        <h2 class="hidden">F1 Fan</h2>
        <header id="header">
            <div class="page-container">
                <a href="/api/index.php" class="logo"><img src="/api/images/f1fan-logo.png" alt="F1 Fan Logo" /></a>
                <nav id="main-menu">
                    <h2 class="hidden">Main navigation</h2>
                    <ul class="menu">
                        <li><a href="/api/views/gallery.php">Gallery</a></li>
                        <li><a href="#">News</a></li>
                        <li>
                            <a href="#">Teams <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown">
                                <li class="dropitem"><a href="/api/views/teams-current.php">Current Season</a></li>
                                <li class="dropitem"><a href="/api/views/teams-all.php">All Time</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Drivers <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown">
                                <li class="dropitem"><a href="/api/views/drivers-current.php">Current Season</a></li>
                                <li class="dropitem"><a href="/api/views/drivers-all.php">All Time</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Standings <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown">
                                <li class="dropitem"><a href="/api/views/race-results.php">Races</a></li>
                                <li class="dropitem"><a href="/api/views/drivers-standing.php">Drivers </a></li>
                                <li class="dropitem"><a href="/api/views/teams-standing.php">Constructors </a></li>
                            </ul>
                        </li>
                        <li><a href="/api/views/calendar.php">Calendar</a></li>
                        <li><a href="/api/views/f1-rivalries.php">Blog</a></li>
                        <li>
                            <div class="donate"><a href="/api/views/donate.php">Donate</a></div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
    </body>
</html>
