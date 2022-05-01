<?php
    $images = [
        0 => "<img class=\"tarotcard\" src=\"img/tarot/fool.svg\">",
        1 => "<img class=\"tarotcard\" src=\"img/tarot/magician.svg\">",
        2 => "<img class=\"tarotcard\" src=\"img/tarot/star.svg\">",
        3 => "<img class=\"tarotcard\" src=\"img/tarot/empress.svg\">",
        4 => "<img class=\"tarotcard\" src=\"img/tarot/hangedman.svg\">",
        5 => "<img class=\"tarotcard\" src=\"img/tarot/moon.svg\">",
        6 => "<img class=\"tarotcard\" src=\"img/tarot/hermit.svg\">",
        7 => "<img class=\"tarotcard\" src=\"img/tarot/wheel.svg\">",
        8 => "<img class=\"tarotcard\" src=\"img/tarot/world.svg\">",
        9 => "<img class=\"tarotcard\" src=\"img/tarot/tower.svg\">",
        10 => "<img class=\"tarotcard\" src=\"img/tarot/sun.svg\">",
        11 => "<img class=\"tarotcard\" src=\"img/tarot/death.svg\">",
        12 => "<img class=\"tarotcard\" src=\"img/tarot/temperance.svg\">",
        13 => "<img class=\"tarotcard\" src=\"img/tarot/lovers.svg\">",
        14 => "<img class=\"tarotcard\" src=\"img/tarot/judgement.svg\">",
        15 => "<img class=\"tarotcard\" src=\"img/tarot/priestess.svg\">",
        16 => "<img class=\"tarotcard\" src=\"img/tarot/queen-of-swords.svg\">",
        17 => "<img class=\"tarotcard\" src=\"img/tarot/queen-of-wands.svg\">",
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
        9 => "<p class=\"keyword\">Sudden change, upheaval, chaos, revelation, awakening</p>",
        10 => "<p class=\"keyword\">Light, warmth, joy, success, vitality</p>",
        11 => "<p class=\"keyword\">Endings, change, transformation, transition</p>",
        12 => "<p class=\"keyword\">Balance, moderation, patience, purpose</p>",
        13 => "<p class=\"keyword\">Love, harmony, relationships, values alignment, choices</p>",
        14 => "<p class=\"keyword\">Judgement, rebirth, inner calling, absolution</p>",
        15 => "<p class=\"keyword\">Intuition, sacred knowledge, divine feminine, the subconscious mind</p>",
        16 => "<p class=\"keyword\">Independent, unbiased judgement, clear boundaries, direct communication</p>",
        17 => "<p class=\"keyword\">Courage, confidence, independence, social butterfly, determination</p>",
    ];
    $i = rand(0,17);
    echo $keywords[$i];
    
    echo $images[$i];
?>