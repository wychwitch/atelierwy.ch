<h1 class="frame-hide">STICKERS</h1>
<div id="stickersgrid" >
    <?php
        $stickers = [
            "<a class=\"tall-sticker\" href=\"https://rocktype.neocities.org\"><img src=\"https://rocktype.neocities.org/graphics/buttons/rocktype.gif\"></a>",
            "<a href=\"https://gildedware.neocities.org/\"><img src=\"https://gildedware.neocities.org/Page%20Assets/button%202.gif\"></a>",
            "<a href=\"https://naxdot.neocities.org\"><img src=\"https://naxdot.neocities.org/img/naxdot.gif\"></a>",
            "<a href=\"https://leavem3here.neocities.org\"><img src=\"https://leavem3here.neocities.org/assets/leavem3here.png\"></a>",
            "<a href=\"https://caramel64.neocities.org\"><img src=\"/odds-and-ends/img/stickers/caramel64.png\"></a>",
            "<a href=\"https://ifelse95.xyz/\"><img src=\"/odds-and-ends/img/stickers/ifelse95.gif\"</a>",
            "<a href=\"https://mothcore.neocities.org/\"><img src=\"https://mothcore.neocities.org/images/pixels/buttons/neocities/mothcore.gif\"></a>",
            "<a class=\"tall-sticker\" href=\"https://itsevergreen.rip/\"><img src=\"/odds-and-ends/img/stickers/evergreen.png\"></a>",
            "<a><img src=\"/odds-and-ends/img/stickers/notonft.gif\"></a>",
            "<a><img src=\"/odds-and-ends/img/stickers/notoweb3.gif\"></a>",
            "<a><img src=\"/odds-and-ends/img/stickers/wordle.gif\"></a>",
            "<a><img src=\"/odds-and-ends/img/stickers/scott.png\"></a>",
            "<a href=\"https://seapunk.xyz/\"><img src=\"/odds-and-ends/img/stickers/cpnk.gif\"></a>"
        ];
        shuffle($stickers);
        do {
            echo(array_shift($stickers));
        } while((count($stickers) > 0));
        ?>
    </div>
