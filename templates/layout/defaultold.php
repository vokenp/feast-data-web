<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= h($this->fetch('title')) ?></title>        
        

        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('font-awesome.min.css') ?>    
        <?php
        /*
         * TODO: There's currenty no separation in the stylesheet between "CORE"
         * and "entity" styles, so we'll assume the entity contains all relevant
         * styles for now rather than including both stylesheets which would be
         * mostly redundant.
         */
        
        echo $this->Html->css('/css/style.css');
        echo $this->Html->meta('icon','/img/favicon.ico');
        ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
    </head>
    <body>
        <!--Start wrapper -->
        <div class="wrapper">
            <!-- Start Header -->
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a href="http://ilri.org/" target="_blank" class="navbar-brand">                    
                            <img src="/img/sonata_logo.png" alt="sonata_logo.png" />
                        </a>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-right navbar-nav">
                            <?php if (isset($authedUser) && $authedUser) { ?>
                            <li>
                                <a href="/profile"><?= $authedUser['name_first']?></a>
                            </li>
                            <li class="v-line"></li>
                            <li>
                                <a href="/user/logout">Logout</a>
                            </li>
                            <li class="v-line"></li>
                            <?php } else { ?>
                            <li>
                                <a href='/'>Sign In / Register</a>
                            </li>
                            <li class="v-line"></li>
                            <li>
                                <a href='http://www.ilri.org/feast' target='_blank'>Visit the <strong>FEAST</strong> Home Page</a
                            </li>
                            <li class="v-line"></li>
                            <?php } ?>
                            <li><a class="help-link" href="/help" target="_blank">Help</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Header -->

            <!-- Start Content -->
            <div class="content">
                <?= $this->fetch('content') ?>
            </div>
            <!-- End Content -->
        </div>
        <!-- End wrapper -->
        <!-- Start Footer -->
        <div class="container footer"> <!-- all content -->
            <div class="row">
                <div class="col-md-12 footer-contents">
                <?php
                if (isset($currentEntity)) {
                    include(WWW_ROOT . '/static/html/footer.html');
                }
                ?>        
                </div>
            </div>
        <!-- End Footer -->
        </div><!-- end all content -->            

        <div id="modal">
            <div class="modal-box">
                <div class="content">

                    <div class="ui-bar">
                        <button class="btn-close">X</button>
                    </div>

                </div>
            </div>
        </div>    
        <?= $this->Html->script('knockout-3.3.0.js') ?>
        <?= $this->Html->script('jquery-2.1.4.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('moment-with-locales.min.js') ?>
        <?= $this->Html->script('main.js') ?>
        <?= $this->fetch('script') ?>
        <script type='text/javascript'>
            moment.locale(navigator.languages? navigator.languages[0] : (navigator.language || navigator.userLanguage));
        </script>
        <?php if (!empty($currentEntity['google_analytics_code'])) { ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', '<?= $currentEntity['google_analytics_code']?>', 'auto');
            ga('send', 'pageview');
        </script>
        <?php } ?>

    </body>
</html>
