<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BIBIK</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
   <?php echo css('assets/css/style.css') ?>
   <?php echo css('assets/css/slicknav.css') ?>
   <?php echo js('assets/js/cart.js') ?>
</head>

<body>
  <div class="wrapper">
<?php snippet('header') ?>


  <?php foreach($page->images() as $image): ?>
      <img class="shopItemPic"  src="<?php echo $image->url() ?>" alt="">
  <?php endforeach ?>



<span class="productTitlePrice"><?php echo $page->title()->html() ?></span>
<br>
<span class="productTitlePrice"><?php echo kirbytext($page->price()) ?></span>
<?php echo kirbytext($page->data()) ?>
<div style="clear: left"></div>
<span id="description"><?php echo kirbytext($page->description()) ?></span>
</div>

<?php echo js('assets/js/jquery.slicknav.js') ?>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav();
});
</script>
</body>

</html>
