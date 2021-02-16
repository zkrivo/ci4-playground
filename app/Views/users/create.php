<div>
    <h3>Add New User</h3>
    <div>
        <form action="" method="post" style="display:flex; flex-direction: column; width: 24%; padding: 4px">
            <label for="name" style="padding-top: 20px">Name</label>
            <input type="text" name="name" id="name" value="<?= set_value('name') ?>">

            <label for="surname" style="padding-top: 20px">Surname</label>
            <input type="text" name="surname" id="surname" value="<?= set_value('surname') ?>">

            <label for="username" style="padding-top: 20px">Username</label>
            <input type="text" name="username" id="username" value="<?= set_value('username') ?>">

            <label for="email" style="padding-top: 20px">Email</label>
            <input type="text" name="email" id="email" value="<?= set_value('email') ?>">

            <label for="password" style="padding-top: 20px">Password</label>
            <input type="password" name="password" id="password">

            <label for="password_confirm" style="padding-top: 20px">Confirm Passowrd</label>
            <input type="password" name="password_confirm" id="password_confirm">

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
                <input type="submit" value="Create User" style="margin-top: 20px; padding: 6px">
            </div>
        </form>

    </div>
</div>