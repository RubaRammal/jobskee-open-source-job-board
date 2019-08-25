<?php include 'header.php'; ?> 
    <div class="row">
        <div class="col-md-9">
            <?php include 'flash.php'; ?>
            <h2><?php _e($job->title); ?></h2>
            <small class="muted"><?php echo $lang->t('jobs|posted'); ?> <?php niceDate($job->created); ?></small>
            <h4><?php _e($job->company_name); ?></h4>
            <h4><?php _e($city); ?> (<?php _e($category); ?>)</h4>
            <h4><a href="<?php _e($job->url); ?>" target="_blank"><?php _e($job->url); ?></a></h4>
            <?php if (userIsValid()): ?>
                <span class="float-left">
                    <button type="button" class="btn btn-info btn-sm" title="<?php echo $lang->t('admin|btn_edit'); ?>" onclick="window.location.href='<?php _e(ADMIN_URL . "jobs/{$job->id}/edit/{$job->token}"); ?>'">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <?php if (!$job->is_featured): ?>
                        <button type="button" class="btn btn-primary btn-sm" title="<?php echo $lang->t('admin|btn_feature_on'); ?>" onclick="window.location.href='<?php _e(ADMIN_URL . "jobs/{$job->id}/feature/on/{$job->token}"); ?>'">
                            <span class="glyphicon glyphicon-star"></span>
                        </button>
                    <?php else: ?>
                        <button type="button" class="btn btn-default btn-sm" title="<?php echo $lang->t('admin|btn_feature_off'); ?>" onclick="window.location.href='<?php _e(ADMIN_URL . "jobs/{$job->id}/feature/off/{$job->token}"); ?>'">
                            <span class="glyphicon glyphicon-star"></span>
                        </button>
                    <?php endif; ?>
                    <?php if (!$job->status): ?>
                        <button type="button" class="btn btn-success btn-sm" title="<?php echo $lang->t('admin|btn_activate'); ?>" onclick="window.location.href='<?php _e(ADMIN_URL . "jobs/{$job->id}/activate/" . accessToken($job->id)); ?>'">
                            <span class="glyphicon glyphicon-ok"></span>
                        </button>
                    <?php else: ?>
                        <button type="button" class="btn btn-warning btn-sm" title="<?php echo $lang->t('admin|btn_deactivate'); ?>" onclick="window.location.href='<?php _e(ADMIN_URL . "jobs/{$job->id}/deactivate/" . accessToken($job->id)); ?>'">
                            <span class="glyphicon glyphicon-minus"></span>
                        </button>
                    <?php endif; ?>
                    <button type="button" class="btn btn-danger btn-sm" title="<?php echo $lang->t('admin|btn_delete'); ?>" onclick="window.location.href='<?php _e(ADMIN_URL . "jobs/{$job->id}/delete/{$job->token}"); ?>'">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                </span>
            <?php endif; ?>
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
                <h2><?php echo $lang->t('jobs|perks'); ?></h2>
                <p class="lead">
                    <?php _e($job->perks,'r'); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="col-md-3">
            <div class="list-group">
                <a class="list-group-item" href="<?php _e(ADMIN_URL . "applications/jobs/{$job->id}"); ?>" />
                    <h4 class="list-group-item-heading"> <?php _e($applications); ?> <?php echo $lang->t('apply|applications'); ?></h4>
                </a>
            </div>
        </div>
    </div>
    <div class="well">
        <h2><?php echo $lang->t('jobs|how_to_apply'); ?></h2>
        <p class="lead"><?php _e($job->how_to_apply,'r'); ?></p>
    </div>
<?php include 'footer.php'; ?>