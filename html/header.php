<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo site_description(); ?>">

    <link href="<?php echo theme_url('/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo theme_url('/css/hover.css'); ?>" rel="stylesheet" media="all">

    <title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(current_url()); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">

    <?php if(customised()): ?>
        <!-- Custom CSS -->
        <style><?php echo article_css(); ?></style>

        <!--  Custom Javascript -->
        <script><?php echo article_js(); ?></script>
    <?php endif; ?>

  </head>
  <body class="<?php echo body_class(); ?>">
    
      <?php if(has_menu_items()): ?>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <ul class="nav navbar-nav">
        <a class="navbar-brand" href="index.php"><?php echo site_name(); ?></a>
        <li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>" class="button hvr-wobble-bottom" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?><span class="sr-only">(current)</span></a></li>
        <?php endwhile; ?>

        <!-- I guess these won't be needed? 
        <li><a href="#" class="button hvr-wobble-bottom">About</a></li>
        <li><a href="#" class="button hvr-wobble-bottom">Posts</a></li>
                                                                    -->

        <form class="navbar-form navbar-right" role="search" method="post" action="<?php echo search_url(); ?>">
            <div class="form-group">
              <input type="text" value="<?php echo search_term(); ?>" class="form-control button hvr-grow-shadow" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
       </form>

        </div>
      </nav>