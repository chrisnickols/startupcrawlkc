<footer class="page-footer">
    <div class="container white-text">
        <div class="row">
            <div class="col m6 hide-on-small-only">
                <p class="flow-text">
                    "The startup crawl was one of the first startup events I attended after moving to KC. It was such a fantastic night and instantly made me feel connected with everything going on in the community. We met some amazing people and made some lasting connections."
                </p>
                <p style="font-size: 78%;">Startup Crawl KC is a <a href="http://www.kcsourcelink.com/1weekkc">1 Week KC event</a><br />Visit the site for more great events</p>
            </div>
            <div class="col m3 hide-on-small-only">
                &nbsp;
            </div>
            <div class="col m3 s12">
                <h5>Connect</h5>
                <div class="collection">
                    <a class="collection-item white-text" href="https://twitter.com/kcstartupcrawl"><i class="fa fa-twitter fa-lg"></i> twitter</a>
                    <a class="collection-item white-text" href="https://facebook.com/kcstartupcrawl"><i class="fa fa-facebook fa-lg"></i> facebook</a>
<!--                    <a class="collection-item white-text" href="#"><i class="fa fa-instagram fa-lg"></i> instagram</a>-->
<!--                    <a class="collection-item white-text" href="#"><img class="periscope-icon" src="/images/periscope-icon.png"> periscope</a>-->
                    <a class="collection-item white-text" href="bsod"><i class="fa fa-pied-piper-alt fa-lg"></i> pied piper</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col s4">&copy;2016 <span class="hide-on-small-only">Startup Crawl</span></div>
                <div class="col s8 right-align"><strong>Made by <a class="orange-text text-lighten-3" href="http://sherpainnovation.com">Sherpa Innovation</a></strong> <small>featuring <a class="orange-text text-lighten-3" href="https://www.linkedin.com/in/chrisnickols">Chris Nickols</a></small></div>
            </div>
        </div>
    </div>
</footer>

<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<script>
    $(function() {
        $('.button-collapse').sideNav();
<?php if (isset($p) && $p === 'index'): ?>
        $('.modal-trigger').leanModal();
<?php endif; ?>
    });
</script>

</body>
</html>