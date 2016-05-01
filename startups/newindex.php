<?php
$p = 'startups';
require('../header.php');
require_once('data.php');
?>

    <div class="section white">
        <div class="container content">
            <div class="center-align">
                <i class="fa fa-rocket fa-4x"></i>
            </div>
            <h3>KC Startup Roll Call</h3>

            <div class="center-align">
<?php foreach($locations as $key => $location): ?>
                <div class="chip"><a href="#<?=$key?>"><?=$location?></a></div>
<?php endforeach; ?>
            </div>

<?php foreach($locations as $key => $location): ?>
            <ul id="<?=$key?>" class="collection with-header hoverable">
                <li class="collection-header"><h5><?=$location?></h5></li>
<?php       foreach($startups[$key] as $startup): ?>
                <li class="collection-item row">
                        <div class="col s12 m3"><a href="<?=$startup['url']?>" target="_blank"><?=$startup['name']?></a></div>
                        <div class="col s12 m9"><?=$startup['info']?></div>
                </li>
<?php       endforeach; ?>
            </ul>
<?php endforeach; ?>


<!--            <h5>The Device Shop:</h5>-->
<!--            <div class="row">-->
<!--                <div class="col s12 m3">Whobaloo</div>-->
<!--                <div class="col s12 m6">Online graphic design platform</div>-->
<!--                <div class="col s12 m3"><a href="http://whobaloo.com" target="_blank">whobaloo.com</a></div>-->
<!--            </div>-->

<?php /*
            <h4>Submit Your Startup</h4>
            <div id="mc_embed_signup" class="row">
                <form action="//startupcrawlkc.us12.list-manage.com/subscribe/post?u=71eb1400a32d351b8917147f2&amp;id=46a9084581" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="col s12" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group input-field col s12 m6 l4">
                            <label for="mce-MMERGE4">Startup Name <span class="asterisk">*</span></label>
                            <input type="text" value="" name="MMERGE4" class="required validate" id="mce-MMERGE4">
                        </div>
                        <div class="mc-field-group input-field col s12 m6 l4">
                            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
                            <input type="email" value="" name="EMAIL" class="required email validate" id="mce-EMAIL">
                        </div>
                        <div class="mc-field-group input-field col s12 l4">
                            <label for="mce-MMERGE3">Website </label>
                            <input type="url" value="" name="MMERGE3" class=" url" id="mce-MMERGE3">
                        </div>
                        <div class="mc-field-group input-field col s12 m6">
                            <label for="mce-FNAME">First Name </label>
                            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                        </div>
                        <div class="mc-field-group input-field col s12 m6">
                            <label for="mce-LNAME">Last Name </label>
                            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                        </div>
                        <div id="mce-responses" class="clear col s12">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_71eb1400a32d351b8917147f2_46a9084581" tabindex="-1" value=""></div>
                        <div class="mc-submit-btn clear col s12 center-align"><input type="submit" value="Submit Your Startup" name="subscribe" id="mc-embedded-subscribe" class="button waves-effect waves-light btn-large"></div>
                    </div>
                </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[3]='MMERGE3';ftypes[3]='url';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
*/?>
            <br>

            <div class="startup-showcase center-align row z-depth-1 grey lighten-2">
                <div class="col s12">
                    <h5>Startups, learn how to maximize the opportunity to showcase your startup</h5>
                    <p><a class="" href="startups/KCStartupCrawl2-StartupTips-2016.pdf">Startup Showcase Tips PDF (6.2 MB)</a></p>
                </div>
            </div>

        </div>
    </div>

<?php require('../footer.php') ?>