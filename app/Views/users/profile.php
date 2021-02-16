<div style="margin-left: 40px">
    <h2>My Profile</h2>
    <div>
        <div style="display:  flex; flex-direction: row">
            <h3>Name: <p style="font-weight: normal;"><?= $user['name'] ?></p>
        </div>
        </h3>
    </div>
    <div style="display:  flex; flex-direction: row">
        <h3>Surname: <p style="font-weight: normal;"><?= $user['surname'] ?></p>
        </h3>
    </div>
    <div style="display:  flex; flex-direction: row">
        <h3>Username: <p style="font-weight: normal;"><?= $user['username'] ?></p>
        </h3>
    </div>
    <div style="display:  flex; flex-direction: row">
        <h3>Email: <p style="font-weight: normal;"><?= $user['email'] ?></p>
        </h3>
    </div>
</div>
</div>

<!-- display user's posts -->