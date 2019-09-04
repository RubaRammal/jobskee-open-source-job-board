<?php include 'header.php'; ?>

<div class="row text-right">
  <div class="col-md-12">
      <?php include 'flash.php'; ?>
      <form id="apply" class="form-horizontal" role="form" action="<?php echo BASE_URL; ?>apply/submit" method="post" enctype="multipart/form-data">
      <div class="row"> 
        <div class="col-md-12 list form-job"> 
          <h3><?php echo $lang->t('apply|header'); ?></h3>
            
          <div class="form-group">
              <label for="title" class="col-sm-3 control-label input-lg"><?php echo $lang->t('apply|job_title'); ?></label>
              <div class="col-sm-12 col-md-8">
                  <input type="text" class="form-control input-lg" id="job_title" name="job_title" value="<?php _e($job_title); ?>" disabled />
              </div>
          </div>
          <hr />
          <div class="form-group">
              <label for="cover_letter" class="col-sm-3 control-label input-lg"><?php echo $lang->t('apply|cover_letter'); ?></label>
              <div class="col-sm-12 col-md-8">
                <textarea class="form-control input-lg" id="cover_letter" name="cover_letter" rows="10" required ></textarea>
              </div>
          </div>

          <div class="form-group">
          <label for="company_name" class="col-sm-3 control-label input-lg"><?php echo $lang->t('apply|full_name'); ?></label>
              <div class="col-sm-12 col-md-8">
                <input type="text" class="form-control input-lg" id="full_name" name="full_name" required />
              </div>
          </div>
          
          <div class="form-group">
          <label for="email" class="col-sm-3 control-label input-lg"><?php echo $lang->t('apply|email'); ?></label>
              <div class="col-sm-12 col-md-8">
                <input type="email" class="form-control input-lg" id="email" name="email" required />
              </div>
          </div>
          

          <div class="form-group">
          <label for="location" class="col-sm-3 control-label input-lg"><?php echo $lang->t('apply|location'); ?></label>
              <div class="col-sm-12 col-md-8">
                <input type="text" class="form-control input-lg" id="location" name="location" />
              </div>
          </div>
            
          <div class="form-group">
          <label for="websites" class="col-sm-3 control-label input-lg"><?php echo $lang->t('apply|websites'); ?></label>
              <div class="col-sm-12 col-md-8">
                <textarea id="websites" name="websites" class="form-control input-lg" rows="2" required ></textarea>
              </div>
          </div>
          
            
          <div class="form-group">
          <label for="attachment" class="col-sm-3 control-label input-lg"><?php echo $lang->t('apply|attachment'); ?></label>
              <div class="col-sm-12 col-md-8">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="attachment" name="attachment">
                  <label class="custom-file-label" for="customFile" id="attachment-label"><?php echo $lang->t('jobs|btn_file'); ?></label>
                </div>
              </div>
          </div>          
          
          <div class="form-group">
              <label for="bid" class="col-sm-3 control-label input-lg"><?php echo $lang->t('jobs|bid'); ?></label>
              <div class="input-group mb-3 col-sm-12 col-md-8">
                <input type="text" class="form-control input-lg" id="bid" name="bid" placeholder="<?php echo $lang->t('apply|bid_ph'); _e($job_bid); ?>" />
                <div class="input-group-prepend">
                  <span class="input-group-text">SAR</span>
                </div>
              </div>
          </div>

          <div class="form-group">
              <div class="text-center">
                <input type="hidden" id="job_id" name="job_id" value="<?php _e($job_id); ?>" />
                <input type="hidden" id="token" name="token" value="<?php _e($token); ?>" />
                <input type="hidden" id="trap" name="trap" value="" />
                <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
                <input type="submit" class="btn btn-success btn-lg all-btns job-btn float-left" value="<?php echo $lang->t('apply|btn_submit'); ?>" />
              </div>
          </div>
          </div>  
        </div>   
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>