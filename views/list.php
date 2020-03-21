<?php

if ($item->status == 'published') {
    echo '<article>';
    echo '<h2><a href="?id=' . $item->id . '">' . $item->title . '</a></h2>';
    if ($content instanceof TrackableInterface) {
        include __DIR__ . '/track.php';
    }
    echo '<p>' . $content->shortDescription() . '</p>';
    echo '</article>';
}
