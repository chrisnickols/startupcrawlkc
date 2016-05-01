<?php
$p = 'blog';
require('../header.php');

$entries = [];
$files = glob('entries/*.html');
foreach ($files as $file) {
    $content = file_get_contents($file);
    preg_match('/<h1>(.+)<\/h1>/', $content, $title);
    preg_match('/<p[^>]*>(.+)<\/p>/ims', $content, $body);
    $entries[filemtime($file)] = [
        'path' => $file,
        'url' => preg_replace('/entries\/(.+)\.html/', '$1', $file),
        'title' => $title[1],
        'body' => substr(strip_tags($body[1]), 0, 200)
    ];
}

krsort($entries);
$i = 0;
?>


<div class="section white">
    <div class="container">
        <h3>Crawl Blog</h3>
        <div class="row">
<?php foreach ($entries as $entry): ?>
            <div class="col s12 m4">
                <div class="card small hoverable">
                    <div class="card-content">
                        <h6 class="card-title"><?=$entry['title']?></h6>
                        <p><?=$entry['body']?> &hellip;</p>
                    </div>
                    <div class="card-action right-align">
                        <a href="entries.php?<?=$entry['url']?>">Read More</a>
                    </div>
                </div>
            </div>
<?php endforeach ?>
        </div>
    </div>
</div>


<?php require('../footer.php') ?>