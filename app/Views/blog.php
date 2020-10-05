    <h1><?= $title; ?></h1>
    <div>
        <?php foreach($posts as $post) : ?>
            <h3><?= $post . '<br>'; ?></h3>
            <img src="/assets/images/img.jpg" alt="" style="width: 200px; height: auto;">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non quis nulla dolore at dolor officia natus praesentium quaerat quod, quam repellendus deleniti, dignissimos autem sequi maxime, velit modi asperiores harum.</p>
        <?php endforeach; ?>
    </div>