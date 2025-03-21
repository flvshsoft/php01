<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flashsoft</title>
    <style>
        body {
            padding: 0px;
            background: red;
            display: contents;
        }

        .kontainer {
            display: flex;
            margin: 0px;
            padding: 0px;
        }

        .sidebar {
            width: 20%;
            min-height: 100vh;
            padding: 20px;
        }

        .main {
            margin: 0px;
            padding: 0px;
            background: rgb(234, 234, 234);
            width: 80%;
            display: block;
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
        <div class="main" style="width:100%;">
            <!-- Navbar -->
            <div style="display: block;margin-bottom:30px;">
                <div>
                    <div style="background:#FFFFFF;display:flex;justify-content:flex-end;">
                        <h3 style="margin-right: 30px;">Administator</h3>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div style="margin:0px 30px 0px 30px">
                <!-- #1 -->
                <div style="display:flex;margin-bottom:30px;justify-content:space-between;">
                    <!-- breadcrumb -->
                    <div style="margin:0px;padding:0px;">
                        <h1 style="margin-top: 0px;margin-bottom:0px;">Dashboard</h1>
                        <h4 style="margin: 0px;">Dashboard / Data Inventaris</h4>
                    </div>
                    <!-- tambah -->
                    <a href="#">Tambah</a>
                </div>
                <!-- #2 -->
                <div style="background: white;">
                    <h4>Tabel</h4>
                    <table style="width:100%" border="1">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Komputer</td>
                            <td>10 unit</td>
                            <td>Baik</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Komputer</td>
                            <td>10 unit</td>
                            <td>Baik</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>