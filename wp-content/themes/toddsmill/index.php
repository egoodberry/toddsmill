<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Todd's Mill</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css">
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]>
  <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

  <div class="wrapper">
    <a href="/">
      <img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Todd's Mill'" height="150" />
    </a>

    <?php if (is_front_page()) { ?>
      <div id="contact">
        <span>162 Orchard Street, New York, NY 10002</span>
        <span class="phone-mobile">
          <a href="tel:+12129950300">(212) 995-0300</a>
        </span>
        <span class="phone-desktop with-border">(212) 995-0300</span>
        <span class="social-desktop with-border">
          <a title="Todd's Mill on Facebook" href="http://www.facebook.com/pages/Todds-Mill/445791252105505">
            <img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" />
          </a>
          <a title="Todd's Mill on Twitter" href="https://twitter.com/ToddsMill">
            <img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" />
          </a>
        </span>
      </div>

      <div id="hours">
        <div>
          <div class="title">Dinner</div>
          Sun - Wed 5:30p - 12:00a, Thur - Sat 5:30p - 2:00a
        </div>
        <div>
          <div class="title">Brunch</div>
          Sat - Sun 11:00a - 4:00p
        </div>
      </div>

      <div id="menus">
        <?php $args = array(
          'post_type' => 'attachment',
          'numberposts' => null,
          'post_status' => null,
          'post_parent' => $post->ID
        );
        $attachments = get_posts($args);
        if ($attachments) {
          foreach ($attachments as $attachment) {
            the_attachment_link($attachment->ID, false);
          }
        } ?>
      </div>

      <div id="open-table-wrapper">
        <script type="text/javascript" src="http://www.opentable.com/frontdoor/default.aspx?rid=97558&restref=97558&bgcolor=FFF&titlecolor=000&subtitlecolor=CCC&btnbgimage=http://www.opentable.com/frontdoor/img/ot_btn_black.png&otlink=FFFFFF&icon=dark&mode=wide&hover=1"></script>
      </div>
      <div class="open-table-mobile">
        <a href="http://m.opentable.com/?RestaurantId=97558">Make a Reservation</a>
      </div>
    <?php } elseif (have_posts()) {
            while (have_posts()) {
              the_post();
              the_content();
            }
          } else { ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php } ?>

    <div class="push"></div>
  </div>

  <div id="footer">
    <?php footer_menu(); ?>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>
  <script type="text/javascript" src="//use.typekit.net/ltl4esh.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-37433857-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</body>
</html>
