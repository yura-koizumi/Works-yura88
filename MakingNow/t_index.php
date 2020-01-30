!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Making Now</title>
<link rel="stylesheet" href="blog.css">
</head>
<body>
<h1>Making Now</h1>


<?php foreach($posts as $post){ ?>
<div class="post">
  <h2><?php echo $post['title']</h2>
  <p><?php echo nl2br($post['content'])?></p>
    <?php } ?>
    
    
    <?php foreach($post['comment'] as $comment){ ?>
  <div class="comment">
    <h3><?php echo $post['title']?></h3>
    <p><?php echo nl2br($post['content'])?></p>
  </div>
  <?php } ?>


  <p class="commment_link">
    投稿日：<?php echo $post['time']?>
    <a href="comment.php?no=<?php echo $post['no']?>">コメント</a>
  </p>
  
  
</div>

</body>
</html>