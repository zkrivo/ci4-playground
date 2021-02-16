<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CI App</title>
</head>

<body>

    <header>
        <h1><a href="/" style="text-decoration: none; color:blue; opacity: 0.6">MoreRead</a></h1>
        <div>
            <?php
            if (session()->get('isLogged')) :
            ?>
                <div style="font-size: 1.3rem;display: flex; flex-direction: row; justify-content: space-between; width: 90%; margin: 0 auto">
                    <div>
                        <nav>
                            <ul style="display: flex; flex-direction: row; flex-wrap: wrap; list-style-type:none; justify-content:space-around">
                                <li style="padding-left: 10px"><a href="/">Dashboard</a></li>
                                <li style="padding-left: 10px"><a href="/users/profile">My Profile</a></li>
                                <li style="padding-left: 10px"><a href="/posts">Posts</a></li>
                                <li style="padding-left: 10px"><a href="/posts/create">New Post</a></li>
                                <li style="padding-left: 10px"><a href="/users/create">Create User</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div>
                        <nav>
                            <ul style="list-style-type: none">
                                <li><a href="/users/logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            <?php
            endif;
            ?>
        </div>
    </header>