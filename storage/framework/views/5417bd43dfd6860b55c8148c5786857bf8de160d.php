<?php $__env->startSection('title'); ?>
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php if( !$posts->count() ): ?>
There is no post till now. Login and write a new post now!!!
<?php else: ?>
<div class="">
  <table border="1">
  <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>STATUS</th>
      <th>CREATE DATE</th>
      <th>ACTION</th>
  </tr>

  <?php foreach( $posts as $post ): ?>
  <tr>
      <td><?php echo e($post->id); ?></td>
      <td><a href="<?php echo e(url('posts/'.$post->slug)); ?>"><?php echo e($post->title); ?></a></td>
      <td>
         <?php if($post->active == '1'): ?>
            <a href="<?php echo e(url('posts/unpusblished')); ?>">Unpublished</a>
          <?php else: ?>
            <a href="<?php echo e(url('posts/pusblished')); ?>">Published</a>
          <?php endif; ?> 
      </td>
      <td><?php echo e($post->created_at); ?></td>
      <td>
        <?php if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin())): ?>
            <button class="btn" class="btn btn-success"><a href="<?php echo e(url('posts/edit/'.$post->slug)); ?>">Edit</a></button>
            <button class="btn" class="btn btn-success"><a href="<?php echo e(url('posts/delete/'.$post->id)); ?>">Delete</a></button>
          <?php endif; ?>
      </td>
  </tr>
  <!-- <div class="list-group">
    <div class="list-group-item">
      <h3><a href="<?php echo e(url('posts/'.$post->slug)); ?>"><?php echo e($post->title); ?></a>
        <?php if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin())): ?>
          <?php if($post->active == '1'): ?>
          <button class="btn" style="float: right"><a href="<?php echo e(url('posts/edit/'.$post->slug)); ?>">Edit Post</a></button>
          <?php else: ?>
          <button class="btn" style="float: right"><a href="<?php echo e(url('posts/edit/'.$post->slug)); ?>">Edit Draft</a></button>
          <?php endif; ?>
        <?php endif; ?>
      </h3>
      <p><?php echo e($post->created_at->format('M d,Y \a\t h:i a')); ?> By <a href="<?php echo e(url('/user/'.$post->author_id)); ?>"><?php echo e($post->author->name); ?></a></p>
    </div>
    <div class="list-group-item">
      <article>
        <?php echo str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>'); ?>

      </article>
    </div>
  </div> -->
  <?php endforeach; ?>
  </table>
  <?php echo $posts->render(); ?>

</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>