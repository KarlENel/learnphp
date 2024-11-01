<?php
$posts = [
    [
        'title' => 'World news 1',
        'body' => 'World news body 1',
        'created_at' => 'December 14, 2020',
        'author' => 'Chris'
    ],
    [
        'title' => 'World news 2',
        'body' => 'World news body 1',
        'created_at' => 'December 14, 2020',
        'author' => 'Kaspar'
    ],
    [
        'title' => 'World news 3',
        'body' => 'World news body 1',
        'created_at' => 'December 14, 2020',
        'author' => 'Martin'
    ],
    [
        'title' => 'World news 4',
        'body' => 'World news body 1',
        'created_at' => 'December 14, 2020',
        'author' => 'Pets'
    ],
    [
        'title' => 'World news 5',
        'body' => 'World news body 1',
        'created_at' => 'December 14, 2020',
        'author' => 'Vello'
    ],
];
?>

<?php include './partials/header.php' ?>

<?php include './partials/hero.php' ?>

<?php include './partials/featured-posts.php' ?>

<div class="row g-5">
  <div class="col-md-8">
    <?php include './partials/posts.php' ?>
  </div>

  <div class="col-md-4">
    <?php include './partials/sidebar.php' ?>
  </div>
</div>

<?php include './partials/pagefoot.php' ?>