<h3>This is where you create your new post!</h3>

<div>
    <?php
    if (isset($validation)) :
    ?> <div><?= $validation->listErrors() ?></div>
    <?php
    endif;
    ?>
    <form method="post">

        <h5>Title</h5>
        <input type="text" name="title" value="" size="50">

        <h5>Slug</h5>
        <input type="text" name="slug" value="" size="50">

        <h5>Body</h5>
        <textarea type="text" name="body" value=""></textarea>

        <div><input type="submit" value="Submit"></div>

    </form>
</div>