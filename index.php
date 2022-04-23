<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/web.css" rel="stylesheet">
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <label for="menuButton"><span class="iconify" data-icon="fluent:text-grammar-wand-24-regular" style="color: #4e3d57;" data-flip="horizontal" data-width="60"></span></label>
                <input type="checkbox" id="menuButton">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="glyphs/index.html">glyphs</a></li>
                    <li><a href="updates/index.html">updates</a></li>
                    <li><a href="shrintes/index.html">shrines</a></li>
                    <li><a href="thoughts/index.html">thoughts</a></li>
                    <li><a href="rss.xml">rss</a></li>
                </ul>
            </nav>
            <section>
            <?php
                $images = [
                    0 => "<img src=\"img/fool.svg\">",
                    1 => "<img src=\"img/magician.svg\">",
                    2 => "<img src=\"img/star.svg\">",
                    3 => "<img src=\"img/empress.svg\">",
                    4 => "<img src=\"img/hangedman.svg\">",
                    5 => "<img src=\"img/moon.svg\">",
                    6 => "<img src=\"img/hermit.svg\">",
                    7 => "<img src=\"img/wheel.svg\">",
                    8 => "<img src=\"img/world.svg\">",
                    9 => "<img src=\"img/tower.svg\">"
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
            
            
            </section>
            <section>
                <h1>Atelier Wych</h1>
                <p>welcome to my home.</p>
            </section>
        </header>

        <main>
            <section>

                <p>
                    Es irrt der Mensch, wenn er sie beim Kragen hätte. Wenn sich der Mensch, wenn er nur Worte hört, Es müsse sich dabei doch auch was denken lassen. Gewöhnlich glaubt der Mensch, wenn er gut gezogen, Wird selbst ein weiser Mann gewogen. Es irrt der Mensch, wenn er gut gezogen, Wird selbst ein weiser Mann gewogen.
                </p>
            </section>
            <section>
                <p>
                    So schreitet in dem engen Bretterhaus (Theater, Bühne) Den ganzen Kreis der Schöpfung aus, Und wandelt mit bedächtger Schnelle Vom Himmel durch die Welt zur Hölle! Und wandelt mit bedächt'ger Schnelle Vom Himmel durch die Welt zur Hölle. Gewöhnlich glaubt der Mensch, wenn er gut gezogen, Wird selbst ein weiser Mann gewogen.

                </p>
            </section>
        </main>
    </body>