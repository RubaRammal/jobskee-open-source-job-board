<?php include 'header.php'; ?>
    <div class="row">
        <div class="col-md-9">
            <?php include 'flash.php'; ?>
            <h2><?php _e($job->title); ?></h2>
            <small class="muted"><?php echo $lang->t('jobs|posted'); ?> <?php niceDate($job->created); ?></small>
            <h4><?php _e($job->company_name); ?></h4>
            <h4><?php _e($city); ?> (<?php _e($category); ?>)</h4>
            <h4><a href="<?php _e($job->url); ?>" target="_blank"><?php _e(excerpt($job->url, 50)); ?></a></h4>
        </div> 
        <div class="col-md-3">
            <?php if ($job->logo != ''): ?>
            <img src="<?php echo ASSET_URL ."images/thumb_{$job->logo}"; ?>" alt="" class="img-thumbnail">
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <hr />
    </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <div class="lead">
                <?php echo Parsedown::instance()->parse($job->description); ?>
            </div>
            <?php if ($job->perks != ''): ?>
                <h3><?php echo $lang->t('jobs|perks'); ?></h3>
                <p class="lead">
                    <?php _e($job->perks,'r'); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="col-md-3">
            <div class="list-group">
                <a class="list-group-item text-center">
                    <?php Blocks::showBlockByID(1); ?>
                </a>
                <?php if ($job->how_to_apply == ''): ?> 
                <a class="list-group-item  text-center" />
                    <h4 class="list-group-item-heading"> <?php _e($applications); ?> <?php echo $lang->t('apply|applications'); ?></h4>
                </a>
                <span class="list-group-item  text-center">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location.href='<?php _e(BASE_URL . "apply/{$job->id}"); ?>';"><?php echo $lang->t('apply|apply_now'); ?></button>
                    <?php endif; ?>
                </span>
            </div>
        </div>
    </div>
    <?php if ($job->how_to_apply != ''): ?>
    <div class="well">
        <h3><?php echo $lang->t('jobs|how_to_apply'); ?></h3>
        <p class="lead"><?php _e($job->how_to_apply,'r'); ?></p>
    </div>
    <?php endif; ?>
<?php include 'footer.php'; ?>