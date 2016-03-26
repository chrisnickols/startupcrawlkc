<?php
$p = 'blog';
require('../header.php');

$entry = $_SERVER['QUERY_STRING'];
$path = 'entries/' . $entry . '.html';

if ($entry !== '' && file_exists($path)) {
    $content = file_get_contents($path);
} else {
    $content = file_get_contents('entries/.not-found.html');
}

preg_match('/<h1>(.+)<\/h1>/', $content, $title);
$title = $title[1];
?>

    <div class="section white">
        <div class="container">

            <div class="row">
                <nav class="breadcrumb-nav sc-red">
                    <div class="nav-wrapper">
                        <div class="col s12">
                            <a href="blog" class="breadcrumb">Blog</a>
                            <a class="breadcrumb"><?=$title?></a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="content">
<?php echo $content; ?>
            </div>

        </div>
    </div>


<?php require('../footer.php') ?>