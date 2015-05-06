<html>
<head>
  <title><?= $title ?></title>

  <link rel="apple-touch-icon-precomposed" sizes="57x57"
        href="<?= URL::base() ?>public/icon/apple-touch-icon-57x57.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="<?= URL::base() ?>public/icon/apple-touch-icon-114x114.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="<?= URL::base() ?>public/icon/apple-touch-icon-72x72.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="<?= URL::base() ?>public/icon/apple-touch-icon-144x144.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="<?= URL::base() ?>public/icon/apple-touch-icon-60x60.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="<?= URL::base() ?>public/icon/apple-touch-icon-120x120.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="<?= URL::base() ?>public/icon/apple-touch-icon-76x76.png"/>
  <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="<?= URL::base() ?>public/icon/apple-touch-icon-152x152.png"/>
  <link rel="icon" type="image/png" href="<?= URL::base() ?>public/icon/favicon-196x196.png" sizes="196x196"/>
  <link rel="icon" type="image/png" href="<?= URL::base() ?>public/icon/favicon-96x96.png" sizes="96x96"/>
  <link rel="icon" type="image/png" href="<?= URL::base() ?>public/icon/favicon-32x32.png" sizes="32x32"/>
  <link rel="icon" type="image/png" href="<?= URL::base() ?>public/icon/favicon-16x16.png" sizes="16x16"/>
  <link rel="icon" type="image/png" href="<?= URL::base() ?>public/icon/favicon-128.png" sizes="128x128"/>
  <meta name="application-name" content="&nbsp;"/>
  <meta name="msapplication-TileColor" content="#FFFFFF"/>
  <meta name="msapplication-TileImage" content="<?= URL::base() ?>public/icon/mstile-144x144.png"/>
  <meta name="msapplication-square70x70logo" content="<?= URL::base() ?>public/icon/mstile-70x70.png"/>
  <meta name="msapplication-square150x150logo" content="<?= URL::base() ?>public/icon/mstile-150x150.png"/>
  <meta name="msapplication-wide310x150logo" content="<?= URL::base() ?>public/icon/mstile-310x150.png"/>
  <meta name="msapplication-square310x310logo" content="<?= URL::base() ?>public/icon/mstile-310x310.png"/>

  <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,700,400' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <?php
  if (!empty($styles)) {
    foreach ($styles as $style => $media) {
      echo HTML::style($style, array('media' => $media), true), "\n";
    }
  } ?>

  <?= empty($side_bar) ? '<style>#body_text {width:100%}</style>' : '' ?>
  <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
  <script>tinymce.init({
      selector: 'textarea', invalid_elements: "style", plugins: "image"
    });</script>
</head>
<body>

<div id="head">
  <div id="insangel_logo"><?= HTML::image('public/images/insangel.png'); ?></div>
  <div id="navigation">
    <ul id="menu">
      <? foreach ($navigation as $title => $link) {

        if (is_string($link)) {
          echo '<li><a href="' . $link . '">' . $title . '</a></li>';
        } else {
          echo '<li><a href="#">' . $title . '</a>';
          echo '<ul class="sub-menu">';
          foreach ($link as $subtitle => $sublink) {
            echo '<li><a href="' . $sublink . '">' . $subtitle . '</a></li>';
          }
          echo '</li></ul>';
        }
      }
      ?>
    </ul>
  </div>
</div>
<div id="main">
  <?php if (!empty($side_bar)) {
    ?>
    <div id="side_bar">
      <div id="side_bar_text"><?= $side_bar ?></div>
    </div>
  <?php } ?>
  <div id="body">
    <div id="body_text">
      <?= $message; ?>
    </div>
  </div>
</div>
<div id="footer">
  <div id="footer_details">
    <p><a href="<?= URL::site('login'); ?>">INSANGEL</a> | E: <a
        href="mailto:phil@insangel.co.uk">phil@insangel.co.uk</a> | T: 07901 616 185 | <a
        href="https://www.facebook.com/groups/insangel/">Facebook</a></p>
  </div>
</div>
</body>
</html>
<script>
  $(function () {

    $('.sub').each(
      function () {
        var main_class = $(this).attr('id').split('_').pop();
        var main_height = $('#navigation_' + main_class).find('a:first').height();
        var main_width = $('#navigation_' + main_class).find('a:first').width();


        var offset = $('#navigation_' + main_class).find('a:first').offset();

        console.log(offset);

      }
    );

    $(".navigation_link").bind("mouseover", function () {
      $('.sub').hide();
    });

    $(".navigation_category").bind("mouseover", function () {
      $('.sub').hide();
      var sub_class = $(this).attr('id').split('_').pop();
      $('.sub_' + sub_class).show();
    });

  });
</script>