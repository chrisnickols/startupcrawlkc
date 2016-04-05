<?php

$locations = [
    [
        'image' => 'google-fiber.jpg',
        'title' => 'Google Fiber',
        'link' => 'https://fiber.google.com/cities/kansascity/',
        'address' => '',
        'overview' => 'Google Fiber starts with a connection that\'s up to 1,000 megabits per second. Super fast downloads. TV like no other. And endless possibilities.'
    ], [
        'image' => 'Kansas-City-Missouri.jpg',
        'title' => 'Startup Crawl KC Location',
        'link' => 'http://startupcrawlkc.com',
        'address' => '',
        'overview' => 'Here is some more information about this product that is only revealed once clicked on.'
    ], [
        'image' => 'Kansas-City-Missouri.jpg',
        'title' => 'Startup Crawl KC Location',
        'link' => 'http://startupcrawlkc.com',
        'address' => '',
        'overview' => 'Here is some more information about this product that is only revealed once clicked on.'
    ], [
        'image' => 'Kansas-City-Missouri.jpg',
        'title' => 'Startup Crawl KC Location',
        'link' => 'http://startupcrawlkc.com',
        'address' => '',
        'overview' => 'Here is some more information about this product that is only revealed once clicked on.'
    ]
];


$p = 'locations';
require('../header.php');
?>

    <div class="section white">
        <div class="container">
            <div class="center-align">
                <i class="fa fa-map-marker fa-5x"></i>
                <h4>Thanks to our <a href="/sponsors">sponsors</a>, the SC-KC buses will be running free of charge to all of these participating 2016 startups and venues.</h4>
                <!--            <h4>We will be posting the list of participating startups and venues for Startup Crawl KC 2016 soon.</h4>-->
            </div>

            <div class="row">
                <?php foreach ($locations as $locale): ?>
                    <div class="col s12 m6 l4">
                        <div class="card medium">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator" src="images/locations/<?=$locale['image']?>">
                            </div>
                            <div class="card-content">
                                <div class="card-title activator grey-text text-darken-4"><i class="fa fa-ellipsis-v right"></i><?=$locale['title']?></div>
                                <p><a href="<?=$locale['link']?>" target="_blank">website</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><?=$locale['title']?><i class="fa fa-close right"></i></span>
                                <p><?=$locale['overview']?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

<?php require('../footer.php') ?>