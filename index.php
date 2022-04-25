<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/web.css" rel="stylesheet">
        
        <meta property="og:url" content="https://atelierwy.ch/" />
        <meta property="og:type" content="homepage" />
        <meta property="og:title" content="Atelier Wych" />
        <meta property="og:description" content="Bididi bopidi boo" />
        <meta property="og:image" content="https://atelierwy.ch/img/screenshot.png" />
        <meta property="twitter:card" content="summary_large_image">
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    </head>
    <body>
        <header>
            
            <nav>
                <label for="menuButton"><span class="iconify" data-icon="fluent:text-grammar-wand-24-regular" style="color: #4e3d57;" data-flip="horizontal" data-width="60"></span></label>
                <input type="checkbox" id="menuButton">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li><a href="glyphs/index.php">glyphs</a></li>
                    <li><a href="#" class="disabled">updates</a class="disabled"></li>
                    <li><a href="#" class="disabled">shrines</a></li>
                    <li><a href="#" class="disabled">thoughts</a></li>
                    <li><a href="#" class="disabled">rss</a></li>
                </ul>
            </nav>
            <section id="flexBox">
                <a href="index.php">
            <?php
                $images = [
                    0 => "<img src=\"img/tarot/fool.svg\">",
                    1 => "<img src=\"img/tarot/magician.svg\">",
                    2 => "<img src=\"img/tarot/star.svg\">",
                    3 => "<img src=\"img/tarot/empress.svg\">",
                    4 => "<img src=\"img/tarot/hangedman.svg\">",
                    5 => "<img src=\"img/tarot/moon.svg\">",
                    6 => "<img src=\"img/tarot/hermit.svg\">",
                    7 => "<img src=\"img/tarot/wheel.svg\">",
                    8 => "<img src=\"img/tarot/world.svg\">",
                    9 => "<img src=\"img/tarot/tower.svg\">"
                ];
                $keywords = [
                    0 => "<p class=\"keyword\">Beginnings, innocence, spontaneity, a free spirit</p>",
                    1 =>"<p class=\"keyword\">Manifestation, resourcefulness, power, inspired action</p>",
                    2 => "<p class=\"keyword\">Hope, faith, purpose, renewal, spirituality</p>",
                    3 => "<p class=\"keyword\">Femininity, beauty, nature, nurturing, abundance</p>",
                    4 => "<p class=\"keyword\">Pause, surrender, letting go, new perspectives</p>",
                    5 => "<p class=\"keyword\">Illusion, fear, anxiety, subconscious, intuition</p>",
                    6 => "<p class=\"keyword\">Soul-searching, introspection, being alone, inner guidance</p>",
                    7 => "<p class=\"keyword\">Good luck, karma, life cycles, destiny, a turning point</p>",
                    8 => "<p class=\"keyword\">Completion, integration, accomplishment, travel</p>",
                    9 => "<p class=\"keyword\">Sudden change, upheaval, chaos, revelation, awakening</p>"
                ];
                $i = rand(0,9);
                echo $keywords[$i];
                
                echo $images[$i];
            ?>
            </a>
            
                
                    <h1>Atelier Wych</h1>
                    <p>welcome to my space.</p>
            </section>
        </header>

        <main>
            <section>

                <p>
                    Hello! I'm wych(witch) but you can just call me wych! I'm a poc transgirl who likes witches, coding, and nerd shit lmao. This is a space for me to shout to the void that is the internet!! I have some plans for some shrines, articles to write, and more! Right now I just have my Glyphs that you can look at ^^ enjoy your stay!
                </p>
            </section>
        </main>
    </body>