<?php $__env->startSection('title'); ?>
Edit Post
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script type="text/javascript" src="<?php echo e(asset('/js/tinymce/tinymce.min.js')); ?>"></script>
<script type="text/javascript">
  tinymce.init({
    selector : "textarea",
    plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
    toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages"
  }); 
</script>

<form method="post" action='<?php echo e(url("posts/update")); ?>'>
  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  <input type="hidden" name="post_id" value="<?php echo e($post->id); ?><?php echo e(old('post_id')); ?>">
  <div class="form-group">
    <input required="required" placeholder="Enter title here" type="text" name = "title" class="form-control" value="<?php if(!old('title')): ?><?php echo e($post->title); ?><?php endif; ?><?php echo e(old('title')); ?>"/>
  </div>
  <div class="form-group">
    <textarea name='content' class="form-control">
      <?php if(!old('content')): ?>
      <?php echo $post->content; ?>

      <?php endif; ?>
      <?php echo old('content'); ?>

    </textarea>
  </div>
  <?php if($post->active == '1'): ?>
  <input type="submit" name='publish' class="btn btn-success" value = "Update"/>
  <?php else: ?>
  <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
  <?php endif; ?>
  <input type="submit" name='save' class="btn btn-default" value = "Save As Draft" />
  <a href="<?php echo e(url('posts/delete/'.$post->id.'?_token='.csrf_token())); ?>" class="btn btn-danger">Delete</a>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>