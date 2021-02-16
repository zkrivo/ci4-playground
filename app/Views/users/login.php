<div>
    <h3>Log In</h3>

    <div>
        <form action="" method="post" style="display:flex; flex-direction: column; width: 24%; padding: 4px">

            <label for="username" style="padding-top: 20px">Username</label>
            <input type="text" name="username" value="<?= set_value('username') ?>">

            <label for="password" style="padding-top: 20px">Password</label>
            <input type="text" name="password" id="passbox">

            <div style="margin-top: 4px;">
                <?php
                if (isset($validation)) :
                ?>
                    <div><?= $validation->listErrors() ?></div>
                <?php
                endif;
                ?>
            </div>

            <div>
                <input type="submit" value="Log In" style="margin-top: 20px; padding: 6px">
            </div>
        </form>

    </div>
</div>