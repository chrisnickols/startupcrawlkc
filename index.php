<?php
$p = 'index';
require('header.php');
?>

<div class="title-animation">
    <div class="title-text container">
        <svg viewBox="0 0 1000 500">
            <symbol id="startup-svg-text">
                <text text-anchor="middle" x="50%" y="25%" dy="0">
                    STARTUP
                </text>
            </symbol>
            <use xlink:href="#startup-svg-text" class="startup-text"></use>

            <symbol id="crawl-svg-text">
                <text text-anchor="middle" x="50%" y="64%" dy="0">
                    CRAWL
                </text>
            </symbol>
            <use xlink:href="#crawl-svg-text" class="crawl-text"></use>
            <use xlink:href="#crawl-svg-text" class="crawl-text"></use>
            <use xlink:href="#crawl-svg-text" class="crawl-text"></use>
            <use xlink:href="#crawl-svg-text" class="crawl-text"></use>
            <use xlink:href="#crawl-svg-text" class="crawl-text"></use>

            <symbol id="kc-svg-text">
                <text text-anchor="middle" x="50%" y="94%" dy="0">
                    KC &middot; 2016
                </text>
            </symbol>
            <use xlink:href="#kc-svg-text" class="kc-text"></use>
        </svg>
    </div>

    <div class="bus container right-align">
        <img src="images/startupcrawl-bus.png">
        <!--<img class="kclogo" src="images/kclogo-30.png">-->
    </div>

</div>

<div class="thin-banner">
    <div class="container center-align white-text">
        <i class="fa fa-ticket fa-lg"></i> <a style="color: #fff; text-decoration: underline;" href="http://www.kcsourcelink.com/1weekkc">Tickets Available Through 1 Week KC</a> 
        <!--or through the <a href="https://itunes.apple.com/us/app/flokk/id827600627?mt=8">Flokk App</a>-->
    </div>
</div>

<div class="section white">

    <div class="container">

        <div class="center-align">
            <a class="subscribe-btn waves-effect waves-light btn-large modal-trigger" href="#modal1">Subscribe to the Crawl News</a>
            <p class="flow-text left-align">
                Startup Crawl KC offers area residents a one-night tour of the metro's many budding companies. The goal of this event is to make the startup arena, even more, accessible to local hopefuls, new arrivals and the community in general.  Everyone curious about startups is welcome.  Past crawls have included over <span class="yellow">100</span> various startups and have allowed community members to meet the founders and teams and be inspired to get involved.  It's a great opportunity for homegrown entrepreneurs to tell their stories, extend hospitality and connect with new faces.
            </p>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col m4">
                <div class="card hoverable">
                    <div class="card-content">
                        <div class="card-title center-align">
                            <i class="fa fa-anchor fa-2x"></i><br>
                            Be A Sponsor
                        </div>
                        <p>2016 Startup Crawl is looking for a few sponsors to partner with us to bring this amazing event back to the KC area.</p>
                    </div>
                    <div class="card-action">
                        <a href="sponsors">learn more ></a>
                    </div>
                </div>
            </div>

            <div class="col m4">
                <div class="card hoverable">
                    <div class="card-content">
                        <div class="card-title center-align">
                            <i class="fa fa-map-marker fa-2x"></i><br>
                            Be A Host Venue
                        </div>
                        <p>Want to invite a few startups over for a great party?  Then you're our perfect host venue for the 2016 Startup Crawl KC.</p>
                    </div>
                    <div class="card-action">
                        <a href="locations">learn more ></a>
                    </div>
                </div>
            </div>

            <div class="col m4">
                <div class="card hoverable">
                    <div class="card-content">
                        <div class="card-title center-align">
                            <i class="fa fa-rocket fa-2x"></i><br>
                            Are You A Startup?
                        </div>
                        <p>Are you looking to find potential customers, investors or employees? Then join us for the 2016 Startup Crawl KC!</p>
                    </div>
                    <div class="card-action">
                        <a href="startups">learn more ></a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
        <h4>Subscribe</h4>
        <!--Want to be the first to hear about everything crawl related? Subscribe to our mailing list-->
        <!-- Begin MailChimp Signup Form -->
        <!--<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">-->
        <!--<style type="text/css">-->
            <!--#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }-->
            <!--/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.-->
               <!--We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */-->
        <!--</style>-->
        <div id="mc_embed_signup" class="row">
            <form  class="dkgrey-background" action="//startupcrawlkc.us12.list-manage.com/subscribe/post?u=71eb1400a32d351b8917147f2&amp;id=baf75bc1ee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate col s12" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll" class="row">
                    <div id="mce-responses" class="clear col s12">
                        <div class="response z-depth-1" id="mce-error-response" style="display:none"></div>
                        <div class="response z-depth-1" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!--<div class="col s12 indicates-required"><span class="asterisk">*</span> indicates required</div>-->
                    <div class="mc-field-group input-field col l4 m6 s12">
                        <label for="mce-FNAME" class="">First Name </label>
                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group input-field col l4 m6 s12">
                        <label for="mce-LNAME" class="">Last Name </label>
                        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                    </div>
                    <div class="mc-field-group input-field col l4 m6 s12">
                        <label for="mce-EMAIL" class="">Email Address  <span class="asterisk">*</span></label>
                        <input type="email" value="" name="EMAIL" class="required email validate" id="mce-EMAIL">
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_71eb1400a32d351b8917147f2_baf75bc1ee" tabindex="-1" value=""></div>
                    <div class="mc-submit-btn clear col l12 m6 s12 center-align"><input type="submit" value="Subscribe to the Crawl News" name="subscribe" id="mc-embedded-subscribe" class="button waves-effect waves-light btn-large"></div>
                </div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->

    </div>
</div>

<?php require('footer.php') ?>