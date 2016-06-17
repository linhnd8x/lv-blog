<html>
<head>
  <title><?php echo e($post->title); ?></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1><?php echo e($post->title); ?></h1>
    <h5><?php echo e($post->published_at->format('M jS Y g:ia')); ?></h5>
    <hr>
    <?php echo nl2br(e($post->content)); ?>

    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
      « Back
    </button>
  </div>
</body>
</html>