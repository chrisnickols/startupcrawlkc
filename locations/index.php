<?php

$locations = [
     [
        'image' => 'crawl-locations-deviceshops.jpg',
        'title' => 'DeviceShops',
        'link' => 'http://deviceshops.com/',
        'address' => '10316 Shawnee Mission Parkway  Shawnee, KS 66203',
        'overview' => 'DeviceShops is an engaging environment where new ideas can flourish and be supported.<br /><br />Taking your ideas from concept to creation takes a lot of work. We believe that our integrated, mature models will empower your ambition and help you grow your business to success.'
    ], [
        'image' => 'crawl-locations-ecjc.jpg',
        'title' => 'ECJC',
        'link' => 'http://www.ecjc.com/',
        'address' => '4220 Shawnee Mission Pkwy, Fairway, KS 66205',
        'overview' => 'The Enterprise Center in Johnson County is a non-profit organization that connects entrepreneurs with the resources they need to grow and scale. <br /><br />We select local entrepreneurs in their early stages of development and provide them with support, financial education, mentoring, consulting and affordable work space to position them for venture development and commercialization.'
    ], [
        'image' => 'crawl-locations-betablox.jpg',
        'title' => 'BetaBlox',
        'link' => 'http://betablox.com/',
        'address' => '3101 Mercier St #407, Kansas City, MO 64111',
        'overview' => 'BetaBlox is held in a cave. Literally. We are 120 feet underground in an environment that is heated/cooled almost exclusively from the earth - making it the most environmentally friendly business incubator in the world. <br /><br />Our entrepreneurs have 24/7 access to conference rooms, a classroom, kitchen/break rooms, and a banquet hall.'
    ], [
        'image' => 'crawl-locations-kcsv.jpg',
        'title' => 'KCSV',
        'link' => 'http://www.villagesquarekc.com/en',
        'address' => '4436 State Line Road  Kansas City, KS 66103',
        'overview' => 'The KCSV is a fun, organic, grassroots community of startups and entrepreneurs supporting one another in a quaint area of Kansas City. You will likely interact with entrepreneurs and local residents during the crawl making for a very eclectic experience.'
    ], [
        'image' => 'crawl-locations-google.jpg',
        'title' => 'Google Fiber',
        'link' => 'https://fiber.google.com/cities/kansascity/',
        'address' => '1814 Westport Rd, Kansas City, MO 64111',
        'overview' => 'Google Fiber starts with a connection that\'s up to 1,000 megabits per second. Super fast downloads. TV like no other. And endless possibilities.'
    ], [
        'image' => 'crawl-locations-sprint.jpg',
        'title' => 'Sprint Accelerator',
        'link' => 'http://sprintaccel.com/',
        'address' => '210 W 19 Terrace, Kansas City, MO 64108',
        'overview' => 'The Sprint Mobile Accelerator powered by Techstars is helping mobile companies move forward!<br /><br />Sprint is committed to bringing the freedom of mobility to consumers, businesses and government users.  <br /><br />The program is a three-month, immersive, mentorship-driven startup accelerator based in Kansas City, Missouri. Located in the thriving Crossroads Arts District of Kansas City, the program helps startups build the future of mobile technology'
    ], [
        'image' => 'crawl-locations-officeport.jpg',
        'title' => 'OfficePort',
        'link' => 'http://officeportkc.com/',
        'address' => '208 W. 19th St. Kansas City, MO 64108',
        'overview' => 'OfficePort KC is a unique coworking environment, perfect for entrepreneurs, freelancers, small businesses or those looking for temporary space.<br /><br />"Porters" share the open, loft-like space, exchange ideas over coffee and expand their community. For those who prefer privacy, enclosed offices are available.'
    ], [
        'image' => 'crawl-locations-tbp.jpg',
        'title' => 'Think Big Partners',
        'link' => 'http://thinkbigpartners.com/',
        'address' => '1712 Main St | 2nd Floor  Kansas City, MO 64108',
        'overview' => 'Think Big Partners helps companies grow faster, smarter and more efficiently through our network of in-house services, community members and national partners. We push the boundaries of the status quo and help entrepreneurs create game changing companies and technologies.'
    ], [
        'image' => 'crawl-locations-sundry.jpg',
        'title' => 'The Sundry',
        'link' => 'http://www.thesundry.com/',
        'address' => '1706 Baltimore Ave, Kansas City, MO',
        'overview' => 'It is the modern expression of a time-proven tradition: the local grocery.  Ours is a place where consistent quality, friendly service and the best of our region is a daily reality, not a distant memory.<br /><br />Here in the heart of the Crossroads you will find an ever-evolving array of local produce and meats, fresh-baked breads, spices and seasonings, prepared foods and handcrafted products.'
    ], [
        'image' => 'crawl-locations-uber.jpg',
        'title' => 'Uber',
        'link' => 'https://www.uber.com/cities/kansas-city/',
        'address' => '1516 McGee St, Kansas City, MO',
        'overview' => 'Whether you are headed to work, the airport, or out on the town, Uber connects you with a reliable ride in minutes. One tap and a car comes directly to you. Your driver knows exactly where to go. And payment is completely cashless.'
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
                                <p class="grey-text"><small><?=$locale['address']?></small></p>
                                <p><a href="<?=$locale['link']?>" target="_blank">website</a></p>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4"><i class="fa fa-close right"></i><?=$locale['title']?></span>
                                <p><?=$locale['overview']?></p>
                                <p><a href="<?=$locale['link']?>" target="_blank">website</a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>

<?php require('../footer.php') ?>