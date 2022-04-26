<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/web.css" rel="stylesheet">
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    </head>
    <body>
        <header>
            
            <nav>
                <label for="menuButton"><span class="iconify" data-icon="fluent:text-grammar-wand-24-regular" style="color: #4e3d57;" data-flip="horizontal" data-width="60"></span></label>
                <input type="checkbox" id="menuButton">
                <ul>
                    <li><a href="../">home</a></li>
                    <li><a href="../glyphs/">glyphs</a></li>
                    <li><a href="../odds-and-ends/">odds & ends</a></li>
                    <li><a href="#" class="disabled">shrines</a></li>
                    <li><a href="#" class="disabled">thoughts</a></li>
                    <li><a href="./feed.xml">rss</a></li>
                </ul>
            </nav>
            <section id="hero-flex">
                <a href="../index.php">
                    <?php
                        $images = [
                            0 => "<img src=\"../img/tarot/fool.svg\">",
                            1 => "<img src=\"../img/tarot/magician.svg\">",
                            2 => "<img src=\"../img/tarot/star.svg\">",
                            3 => "<img src=\"../img/tarot/empress.svg\">",
                            4 => "<img src=\"../img/tarot/hangedman.svg\">",
                            5 => "<img src=\"../img/tarot/moon.svg\">",
                            6 => "<img src=\"../img/tarot/hermit.svg\">",
                            7 => "<img src=\"../img/tarot/wheel.svg\">",
                            8 => "<img src=\"../img/tarot/world.svg\">",
                            9 => "<img src=\"../img/tarot/tower.svg\">"
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
                <h1>Atelier de Wych</h1>
                <p>welcome to my space.</p>
            </section>

            <section class="title">
                    <h2>Glyphs Page</h2>
                    <p>This is a page for collecting and sharing the glyphs I have created! I don't have a system rn, but I would like to create one soon.</p>
            </section>
        </header>
                
        <main>
            <section>
                <h3>Color Pallets</h3>
                <p>
                    Here's some of my favorite color pallets! I hope you like them.
                </p>
                <ul class="overflow-x">
                    <li><span class="highlight-empty white-outline" style="background-color:hsla(282, 45%, 85%, 1)">--dyed-white: hsla(282, 45%, 85%, 1);</span></li>
                    <li><span class="highlight-empty white-outline" style="background-color:hsla(282, 26%, 75%, 1);">--pale-violet: hsla(282, 26%, 75%, 1);</span></li>
                    <li><span class="highlight-empty white-outline" style="background-color:hsla(282, 23%, 70%, 1);">--pale-violet-dark: hsla(282, 23%, 70%, 1);</span></li>
                    <li><span class="highlight-empty white-outline" style="background-color:hsla(282, 18%, 65%, 1);">--pale-violet-darker: hsla(282, 18%, 65%, 1);</span></li>
                    <li><span class="highlight-empty white-outline" style="background-color:hsla(282, 13%, 70%, 1);">--dusky-violet: hsla(282, 13%, 70%, 1);</span></li>
                    <li><span class="highlight-empty white-outline" style="background-color:hsla(282, 8%, 40%, 1);">--dead-violet: hsla(282, 8%, 40%, 1);</span></li>
                    <li><span class="highlight-empty white-outline" style="background-color:hsl(290, 13%, 29%);">--deep-violet: hsl(290, 13%, 29%);</span></li>
                    <li><span class="highlight-empty white-outline" style="background-color:hsl(330, 17%, 29%);">--dirty-violet: hsl(330, 17%, 29%);</span></li>
                    <li><span class="highlight-empty white-outline" style="background-color:hsl(330, 25%, 50%);">--flushed-violet: hsl(330, 25%, 50%);</span></li>
                </ul>
            </section>
        </main>
    </body>