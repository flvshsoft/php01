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
    </style>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="kontainer">
        <div class="sidebar">
            <h1>SIAK</h1>
            <a href="dashboard.php" class="btn btn-primary mb-2">
                <i class="fa-solid fa-home"></i>
                Dashboard
            </a>
            <a href="data_guru.php" class="btn btn-primary mb-2">
                <i class="fa-solid fa-image"></i>
                Data Guru
            </a>
            <a href="#" class="btn btn-primary mb-2">
                <i class="fa-solid fa-user"></i>
                Data ??
            </a>
        </div>
        <div class="main" style="width:100%;">
            <!-- Navbar -->
            <div class="d-block mb-5">
                <div>
                    <div class="bg-white d-flex" style="justify-content:flex-end;">
                        <h3 style="margin-right: 30px;">Administator</h3>
                    </div>
                </div>
            </div>
            <!-- Content -->
            <div class="mx-4">
                <!-- #1 -->
                <div class="d-flex mb-4" style="justify-content:space-between;">
                    <!-- breadcrumb -->
                    <div style="margin:0px;padding:0px;">
                        <h1 style="margin-top: 0px;margin-bottom:0px;">Data Guru</h1>
                        <h4 style="margin: 0px;">Dashboard / Data Inventaris</h4>
                    </div>
                    <!-- tambah -->
                    <div style="display: block;">
                        <a href="#" class="btn btn-success">Tambah</a>
                    </div>
                </div>
                <!-- #2 -->
                <div class="bg-white">
                    <h4>Tabel</h4>
                    <table style="width:100%" border="1" class="table table-bordered table-striped">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Kondisi</th>
                            </tr>
                        </thead>
                        <tbody>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>