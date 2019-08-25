<?php include 'header.php'; ?>


<div class="row">
<h3><?php echo $lang->t('admin|manage'); ?> <?php echo $lang->t('link|categories'); ?></h3></div>

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
            <th width="35%"><?php echo $lang->t('admin|tbl_meta_desc'); ?></th>
            <th width="15%"><?php echo $lang->t('admin|tbl_url'); ?></th>
            <th width="0%"><?php echo $lang->t('admin|tbl_sort'); ?></th>
            <th width="20%"><?php echo $lang->t('admin|tbl_action'); ?></th>
        </tr>
        </thead>
        <tbody>

        <?php foreach($categs as $cat): ?>
        <tr>
            <td><?php _e($cat->id); ?></td>
            <td><?php _e($cat->name); ?></td>
            <td><?php _e($cat->description); ?></td>
            <td><?php _e($cat->url); ?></td>
            <td><?php _e($cat->sort); ?></td>
            <td>
                <button type="button" class="btn btn-info btn-sm" title="<?php echo $lang->t('admin|btn_edit'); ?>" onclick="window.location.href='<?php _e(ADMIN_MANAGE . "/categories/{$cat->id}/edit"); ?>'">
                    <span class="glyphicon glyphicon-pencil"></span>
                </button>
                <button type="button" class="btn btn-danger btn-sm" title="<?php echo $lang->t('admin|btn_delete'); ?>" onclick="window.location.href='<?php _e(ADMIN_MANAGE . "/categories/{$cat->id}/delete"); ?>'">
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
    <h4><?php if ($category && $category->name) { echo $lang->t('admin|btn_edit') . "<span class='pull-right'><a href='". ADMIN_MANAGE . '/categories' ."'>". $lang->t('admin|btn_add_new') ."</a></span>"; } else { echo $lang->t('admin|btn_add_new'); } ?></span></h4>
    <form class="form" role="form" method="post" action="<?php _e(ADMIN_MANAGE . '/categories'); ?>">
      <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="<?php echo $lang->t('admin|tbl_name'); ?>" value="<?php if ($category && $category->name) { _e($category->name); } ?>" required />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="description" placeholder="<?php echo $lang->t('admin|tbl_meta_desc'); ?>" maxlength="150" value="<?php if ($category && $category->description) { _e($category->description); } ?>" required />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="url" placeholder="<?php echo $lang->t('admin|slug_url'); ?>" value="<?php if ($category && $category->url) { _e($category->url); } ?>" required />
      </div>
      <div class="form-group">
        <input type="text" class="form-control" name="sort" placeholder="<?php echo $lang->t('admin|tbl_sort'); ?>" value="<?php if ($category && $category->sort) { _e($category->sort); } ?>" required />
      </div>
      <input type="hidden" name="id" value="<?php if ($category && $category->id) { _e($category->id); } ?>">
      <input type="hidden" name="<?php _e($csrf_key); ?>" value="<?php _e($csrf_token); ?>">
      <button type="submit" class="btn btn-info"><?php echo $lang->t('admin|btn_submit'); ?></button>
    </form>
  </div>
</div>

<?php include 'footer.php'; ?>