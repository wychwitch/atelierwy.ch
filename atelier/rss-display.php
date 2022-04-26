<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta property="og:url" content="https://atelierwy.ch/" />
        <meta property="og:type" content="homepage" />
        <meta property="og:title" content="Atelier Wych" />
        <meta property="og:description" content="Bididi bopidi boo" />
        <meta property="og:image" content="https://atelierwy.ch/img/screenshot.png" />
        <meta property="twitter:card" content="summary_large_image">

        <!-- Style Sheets -->
        <link type="text/css"  href="./css/os-theme-round-dark.css" rel="stylesheet">
        <link type="text/css" href="./css/OverlayScrollbars.min.css" rel="stylesheet"/>
        <link type="text/css" href="css/iframe.css" rel="stylesheet">

        <!-- Scripts -->
        <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
        <script src="./js/OverlayScrollbars.min.js"></script>
        <script src="./js/scrollbars.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", iframeScroll);
        </script>
    </head>

    <?php

    $rss = new DOMDocument();
    $rss->load('./feed.xml');

    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = array ( 
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            );
        array_push($feed, $item);
    }

    $limit = limitOrLength(5, count($feed));

    for($x=0;$x<$limit;$x++) {
        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
        $link = $feed[$x]['link'];
        $description = $feed[$x]['desc'];
        $date = date('l F d, Y', strtotime($feed[$x]['date']));
        echo '<h2><a href="'.$link.'" title="'.$title.'">'.$title.'</a></h2>';
        echo '<p class="date">Posted on '.$date.'</p>';
        echo '<p>'.$description.'</p>';
    }

    function limitOrLength($limit, $length){
        if($limit > $length){
            return $length;
        } else {
            return $limit;
        }
    }
    ?>
</html>