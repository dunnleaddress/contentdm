
    <div class="events-title">
        <h2>History &amp; Genealogy Events</h2>
    </div>
<?php
    $rss = new DOMDocument();
    $rss->load('https://chipublib.bibliocommons.com/events/events/rss/all?nocache=');
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
        $item = array ( 
            'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
            'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
            'loc' => $node->getElementsByTagNameNS('http://bibliocommons.com/rss/1.0/modules/event/', 'name')->item(0)->nodeValue,
            'date' => $node->getElementsByTagNameNS('http://bibliocommons.com/rss/1.0/modules/event/', 'start_date')->item(0)->nodeValue,
            'cat' => $node->getElementsByTagName('category')->item(0)->nodeValue
            );
        if ($node->getElementsByTagName('category')->item(0)->nodeValue == 'History and Genealogy') array_push($feed, $item);
    }
    $limit = 5;
    for($x=0;$x<$limit;$x++) {
        $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
        $link = $feed[$x]['link'];
        $location = $feed[$x]['loc'];
        $date = date('M j', strtotime($feed[$x]['date']));
        $time = date('g:iA', strtotime($feed[$x]['date']));
        echo '<div class="event">';
        echo '<h4 class="event-title"><a href="' . $link . '" class="event-link">' . $title . ' <span class="raquo">&raquo;</span></a></h4>';
        echo '<div class="event-location"><a href="' . $locationLink . '" class="event-location-link">' . $location . '</a></div>';
        echo '<div class="event-datetime"><div class="event-date">' . $date . '</div>';
        echo '<div class="event-time">' . $time . '</div></div>';
        echo '</div>';
    }
?>
<div class="events-viewmore"><a href="https://chipublib.bibliocommons.com/events/search/index">View More&hellip;</a></div>

