<?php view('partials/header') ?>

<main class="container">
<a href="/admin/posts/create"class="btn btn-primary">Add Post</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($posts as $post): ?>
        <tr>
            <th scope="row"><?=$post->id?></th>
            <td><?=$post->title?></td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a  class="btn btn-info" href="/admin/posts/view?id=<?=$post->id?>">View</a>
                    <a  class="btn btn-warning" href="/admin/posts/edit?id=<?=$post->id?>">Edit</a>
                    <a  class="btn btn-danger" href="/admin/posts/delete?id=<?=$post->id?>">Delete</a>
                </div>
            </td>
        
        </tr>
    <?php endforeach ?>
  </tbody>
</table>

</main>

<?php view('partials/footer') ?>