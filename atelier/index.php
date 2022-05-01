<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atelier de Wych</title>
        
        <meta property="og:url" content="https://atelierwy.ch/" />
        <meta property="og:type" content="homepage" />
        <meta property="og:title" content="Atelier de Wych" />
        <meta property="og:description" content="Bididi bopidi boo" />
        <meta property="og:image" content="https://atelierwy.ch/img/screenshot.png" />
        <meta property="twitter:card" content="summary_large_image">
        <link rel="alternate" type="application/rss+xml"href="/feed.xml" title="RSS">
        
        <!-- CSS -->
        <link type="text/css" href="./css/OverlayScrollbars.min.css" rel="stylesheet"/>
        <link type="text/css"  href="./css/os-theme-round-dark.css" rel="stylesheet">
        <link type="text/css" href="css/web.css" rel="stylesheet">
        
        <!-- JS -->
        <script src="./js/OverlayScrollbars.min.js"></script>
        <script src="./js/scrollbars.js"></script>
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", mainScroll);
            document.addEventListener("DOMContentLoaded", overflowScroll);
        </script>
    </head>
    <body>
        <header>
            <?php include './bits/nav.php';?>
        
            
            <section id="hero-flex">
                <a href="./">
                <?php include './bits/tarot.php';?>
                </a>
                <h1>Atelier de Wych</h1>
                <p>welcome to my space.</p>
            </section>
            
            
        </header>
        <section id=scroll-flex>
                <section class="scroll-section">
                    <h2><span class="iconify" data-icon="majesticons:shooting-star" style="color: hsl(282, 18%, 65%);"></span>rss<span class="iconify" data-icon="majesticons:shooting-star" style="color: hsl(282, 18%, 65%);" data-rotate="90deg"></span></h2>
                    <section class="overflow">
                        <?php include './odds-and-ends/rss-display.php';?>
                    </section>
                </section>

                <section class="scroll-section">
                    <h2><span class="iconify" data-icon="majesticons:shooting-star-line" style="color: hsl(282, 18%, 65%);" data-rotate="90deg"></span>stickers<span class="iconify" data-icon="majesticons:shooting-star-line" style="color: hsl(282, 18%, 65%);"></span></h2>
                    <section class="overflow flip-scroll">
                        <?php include './odds-and-ends/stickers.php';?>
                    </section>
                </section>
            </section>
        <main>
            <section>

                <p>
                    Hello! I'm wych(witch) but you can just call me wych! I'm a poc transgirl who likes witches, coding, and nerd shit lmao. This is a space for me to shout to the void that is the internet!! I have some plans for some shrines, articles to write, and more! Right now I just have my Glyphs that you can look at ^^ enjoy your stay!
                </p>
            </section>
        </main>

        
    </body>