<!-- search -->
<div class="well">
    <div class="row">
        <div class="col-md-12">
            <form  role="form" method="post" action="<?php _e(BASE_URL . 'search/'); ?>">
                <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
                <div class="row">
                  <div class="col-md-12">
                      <input type="text" class="form-control form-control-lg" name="terms" placeholder="<?php echo $lang->t('search|search_for'); ?>">
                  </div>                  
<!--                   <div class="col">
                      <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
                      <button style="display: none;" type="button" class="btn btn-info btn-lg btn-block all-btns" onclick="window.location.href = '<?php _e(BASE_URL); ?>jobs/new';"  <?php if (ALLOW_JOB_POST == INACTIVE) { echo 'disabled'; } ?>>
                      <?php echo $lang->t('jobs|post_job'); ?>  
                      </a>
                  </div> -->
               </div>
            </form>
        </div>
    </div>
</div>