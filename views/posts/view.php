<?php view('partials/header') ?>

<main class="container">
  <form method="GET" action="/admin/posts/view?id=<?=$post->id?>">
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input disabled name="title" type="text" class="form-control" id="title" value="<?=$post->title?>">
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Content</label>
      <textarea disabled name="body" class="form-control" id="body" rows="3"><?=$post->body?></textarea>
    </div>
  </form>
</main>

<?php view('partials/footer') ?>