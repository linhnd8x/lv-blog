<html>
<head>
  <title><?php echo e(config('blog.title')); ?></title>
  <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1><?php echo e(config('blog.title')); ?></h1>
    <h5>Page <?php echo e($posts->currentPage()); ?> of <?php echo e($posts->lastPage()); ?></h5>
    <hr>
    <ul>
      <?php foreach($posts as $post): ?>
        <li>
          <a href="/blog/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a>
          <em>(<?php echo e($post->published_at->format('M jS Y g:ia')); ?>)</em>
          <p>
            <?php echo e(str_limit($post->content)); ?>

          </p>
        </li>
      <?php endforeach; ?>
    </ul>
    <hr>
    <?php echo $posts->render(); ?>

  </div>
</body>
</html>