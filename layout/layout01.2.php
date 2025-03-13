<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashsoft</title>
    <style>
        body {
            padding: 0px;
        }

        .kontainer {
            display: flex;
            margin: 0px;
        }

        .sidebar {
            width: 20%;
            min-height: 100vh;
            padding: 20px;
        }

        .main {
            background: green;
            width: 80%;
        }

        .card {
            width: 190px;
            min-height: 200px;
            background: white;
            margin: 5px;
            border-radius: 10px;
            padding: 10px;
        }

        .btn {
            font-size: x-large;
            text-decoration: none;
            background: #FFFFFF;
            padding: 14px;
            width: 90%;
            display: block;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .btn-primary {
            background: rgb(19, 121, 230);
            color: #FFFFFF;
        }
    </style>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="kontainer">
        <div class="sidebar">
            <h1>SIAK</h1>
            <a href="#" class="btn btn-primary">
                <i class="fa-solid fa-home"></i>
                Dashboard
            </a>
            <a href="#" class="btn btn-primary">
                <i class="fa-solid fa-image"></i>
                Data Guru
            </a>
            <a href="#" class="btn btn-primary">
                <i class="fa-solid fa-user"></i>
                Data Guru
            </a>
        </div>
        <div class="main">
            <div style="background:rgb(0, 153, 255);">
                Navbar
            </div>
            <div style="display: flex;width:100%;flex-wrap:wrap;">
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
                <div class="card">
                    Card 1
                </div>
            </div>
        </div>
    </div>
</body>

</html>