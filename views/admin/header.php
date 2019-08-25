<?php global $categories, $cities; ?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php _e(APP_NAME); ?></title>
    <meta name="author" content="<?php _e(APP_AUTHOR); ?>">
    <meta name="description" content="<?php _e(APP_DESC); ?>">
    <!-- Bootstrap -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php _e(THEME_ASSETS); ?>css/bootstrap.css" rel="stylesheet">    
    <link href="<?php _e(THEME_ASSETS); ?>css/bootstrap-grid.min.css" rel="stylesheet">    
    <link href="<?php _e(THEME_ASSETS); ?>css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="<?php _e(THEME_ASSETS); ?>css/theme.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php _e(THEME_ASSETS);; ?>ico/favicon.png">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <?php if (isset($markdown)): ?>
        <link href="<?php _e(ASSET_URL); ?>bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet">
    <?php endif; ?>
        
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php _e(BASE_URL); ?>"><?php _e(APP_NAME); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php _e(BASE_URL); ?>"><?php echo $lang->t('link|home'); ?><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown" style="display: none;" >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $lang->t('link|categories'); ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach($categories as $cat): ?>
              <a class="dropdown-item" href="<?php _e(BASE_URL . "categories/{$cat->id}/{$cat->url}"); ?>"><?php _e($cat->name); ?></a>
              <?php endforeach; ?>
            </div>
          </li> 
          <li class="nav-item dropdown" style="display: none;" >
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $lang->t('link|cities'); ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php foreach($cities as $cit): ?>
              <a class="dropdown-item" href="<?php _e(BASE_URL . "cities/{$cit->id}/{$cit->url}"); ?>"><?php _e($cit->name); ?></a>
              <?php endforeach; ?>
            </div>
          </li> 
          <?php if (userIsValid()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $lang->t('admin|manage'); ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php _e(ADMIN_URL); ?>applications"><?php echo $lang->t('admin|job_applications'); ?></a>
              <a class="dropdown-item" href="<?php _e(ADMIN_URL); ?>manage/categories"><?php echo $lang->t('link|categories'); ?></a>
              <a class="dropdown-item" href="<?php _e(ADMIN_URL); ?>manage/cities"><?php echo $lang->t('link|cities'); ?></a>
              <a class="dropdown-item" href="<?php _e(ADMIN_URL); ?>subscribers"><?php echo $lang->t('admin|subscribers'); ?></a>
              <a class="dropdown-item" style="display:none;" href="<?php _e(ADMIN_URL); ?>pages"><?php echo $lang->t('admin|site_pages'); ?></a>
              <a class="dropdown-item" style="display:none;" href="<?php _e(ADMIN_URL); ?>blocks"><?php echo $lang->t('admin|site_blocks'); ?></a>  
              <a class="dropdown-item" href="<?php _e(ADMIN_URL); ?>jobs/upload"><?php echo $lang->t('admin|bulk_upload'); ?></a>
              <a class="dropdown-item" href="<?php _e(ADMIN_URL); ?>ban"><?php echo $lang->t('admin|ban_list'); ?></a>                 
              <a class="dropdown-item" href="<?php _e(ADMIN_URL); ?>jobs/expire"><?php echo $lang->t('admin|expire_jobs'); ?></a>

            </div>
          </li> 
          <li class="nav-item"><a class="nav-link" href="<?php _e(ADMIN_URL .'jobs/new'); ?>"><?php echo $lang->t('jobs|post_job'); ?></a></li>
          <li class="nav-item"><a class="nav-link" href="<?php _e(ADMIN_URL .'logout'); ?>"><?php echo $lang->t('link|logout'); ?></a></li>
            <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="<?php _e(ADMIN_URL .'login'); ?>"><?php echo $lang->t('link|login'); ?></a></li>
            <?php endif; ?>
        </ul>
      </div>
    </nav>
    <!-- Fixed navbar -->


    <div class="container theme-showcase">
     