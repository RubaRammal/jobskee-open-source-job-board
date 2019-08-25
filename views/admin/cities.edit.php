<?php include 'header.php'; ?>

<div class="row">
<h3><?php echo $lang->t('admin|manage'); ?> <?php echo $lang->t('link|cities'); ?></h3>
</div>
<div class="row">
<?php include 'flash.php'; ?>
</div>


<div class="row">
  <div class="col-md-9">
    
    <div class="table-responsive">
        <table class="table table-striped">
        <thead>
        <tr>
            <th width="5%"><?php echo $lang->t('admin|tbl_id'); ?></th>
            <th width="20%"><?php echo $lang->t('admin|tbl_name'); ?></th>
            <th width="40%"><?php echo $lang->t('admin|tbl_meta_desc'); ?></th>
            <th width="15%"><?php echo $lang->t('admin|tbl_url'); ?></th>
            <th width="0%"><?php echo $lang->t('admin|tbl_sort'); ?></th>
            <th width="20%"><?php echo $lang->t('admin|tbl_action'); ?></th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($cits as $cit): ?>
        <tr>
            <td><?php _e($cit->id); ?></td>
            <td><?php _e($cit->name); ?></td>
            <td><?php _e($cit->description); ?></td>
            <td><?php _e($cit->url); ?></td>
            <td><?php _e($cit->sort); ?></td>
            <td>
                <button type="button" class="btn btn-info btn-sm" title="<?php echo $lang->t('admin|btn_edit'); ?>"onclick="window.location.href='<?php _e(ADMIN_MANAGE . "/cities/{$cit->id}/edit"); ?>'">
                    <span class="glyphicon glyphicon-pencil"></span>
                </button>
                <button type="button" class="btn btn-danger btn-sm" title="<?php echo $lang->t('admin|btn_delete'); ?>" onclick="window.location.href='<?php _e(ADMIN_MANAGE . "/cities/{$cit->id}/delete"); ?>'">
                    <span class="glyphicon glyphicon-remove"></span>
                </button>
            </td>
        </tr>
        <?php endforeach; ?>

        </tbody>
        </table>
    </div>
      
  </div>
<div class="col-md-3">
    <h4><?php if ($city && $city->name) { echo $lang->t('admin|btn_edit') . "<span class='pull-right'><a href='". ADMIN_MANAGE . '/cities' ."'>". $lang->t('admin|btn_add_new') ."</a></span>"; } else { echo $lang->t('admin|btn_add_new'); } ?></h4>
    <form class="form" role="form" method="post" action="<?php _e(ADMIN_MANAGE . '/cities'); ?>">
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="<?php echo $lang->t('admin|tbl_name'); ?>" value="<?php if ($city && $city->name) { _e($city->name); } ?>" required />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="description" placeholder="<?php echo $lang->t('admin|tbl_meta_desc'); ?>" maxlength="150" value="<?php if ($city && $city->description) { _e($city->description); } ?>" required />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="url" placeholder="<?php echo $lang->t('admin|slug_url'); ?>" value="<?php if ($city && $city->url) { _e($city->url); } ?>" required />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="sort" placeholder="<?php echo $lang->t('admin|tbl_sort'); ?>" value="<?php if ($city && $city->sort) { _e($city->sort); } ?>" required />
      </div>
      <input type="hidden" name="id" value="<?php if ($city && $city->id) { _e($city->id); } ?>">
      <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
      <button type="submit" class="btn btn-info"><?php echo $lang->t('admin|btn_submit'); ?></button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>