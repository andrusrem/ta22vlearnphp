<?php 
$months = ['January', 'February', 'March'];
$posts = [
  ['title' => 'post1', 'text' => 'some body 1'],
  ['title' => 'post2', 'text' => 'some body 2'],
  ['title' => 'post3', 'text' => 'some body 3'],
  ['title' => 'post4', 'text' => 'some body 4'],
]
?>
<?php include 'partials/header.php'; ?>

<main class="container">
 
<?php include 'partials/hero.php'; ?>
<?php include 'partials/featured.php'; ?>
  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'partials/posts.php'; ?>
    </div>

    <div class="col-md-4">
      <?php include 'partials/side.php'; ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>