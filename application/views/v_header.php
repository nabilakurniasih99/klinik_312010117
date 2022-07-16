<!-- Halaman Utama -->
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistem Klinik Nabila</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url();?>">KLINIK Nabila</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <!-- Dropdown Master Data -->
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Master Data
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="<?= base_url('dokter');?>">Data Dokter</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('pasien');?>">Data Pasien</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('obat');?>">Data Obat</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('users');?>">Data Users</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('kunjungan');?>">Berobat</a>
                    </li>
                   
                    
                    <li class="nav-item">
                         <a class="nav-link" href="<?= base_url('auth/logout');?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav>