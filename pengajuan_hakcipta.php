<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/polindra21.png">
    <title>SIKI | Pengajuan Hak Cipta</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body-tertiary bg-white">
        <div class="container">
            <img class="navbar-brand" src="img/polindra2.jpg">
            <span class="position-absolute border border-start border-1 border-black"></span>
            <a class="navbar-brand fs-6 fw-normal font-family-Kokoro" href="#">Sistem Informasi Kekayaan Intelektual<br>Politeknik Negeri Indramayu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="paten.php">Paten</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="#">Hak Cipta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="#">Merek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="#">Desain Industri</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pendaftaraan KI
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="p-paten.php">Hak Cipta</a></li>
                            <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="#">Another action</a></li>
                            <li><a class="dropdown-item fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal font-family-Lucida Sans col-xxl-0 m-0 px-3 py-2" href="#">Disclaimer</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <p class="fs-3 fw-normal font-family-Kokoro text-center">Formulir Pengajuan Paten</p>
        <br>
        <span class="d-flex justify-content-end">
            <a href="https://drive.google.com/drive/u/0/folders/19w54Oc_sAmZakE1NNBt5GD3Yg-qEa7XO" target="_blank" class="link-dark link-underline link-underline-opacity-0" >
                <img src="img/downloadicon.png" alt="">Berkas Yang Di Perlukan
            </a>
        </span>
        <div class="border border-4 border-dark rounded"></div>
        <br>
        <p class="fs-4 fw-normal font-family-Kokoro">I. IDENTITAS</p>
        <div class="container">
            <form method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="email" class="form-control" id="" aria-describedby="" placeholder="Masukkan Nama">
                    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Alamat">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No telepon</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan No telepon">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Tempat Tanggal Lahir">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">KTP Inventor</label>
                    <input type="file" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" id="" placeholder="Masukkan Email">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kewarganegaraan</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Kewarganegaraan">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Kode Pos">
                </div>
                
            </form>
        </div>
        <br><br>
        <p class="fs-4 fw-normal font-family-Kokoro">II. FORMULIR HAK CIPTA</p>
        <div class="container">
                <div class="mb-3">
                    <label for="" class="form-label">Jenis Ciptaan</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Jenis Ciptaan">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Judul Ciptaan</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Judul Ciptaan">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Uraian Singkat Ciptaan</label>
                    <input type="text" class="form-control" id="" placeholder="Masukkan Uraian Singkat Ciptaan">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Dokumen Invensi (Manual Book/Buku/Dll)</label>
                    <input type="file" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surat Pengalihan Hak Cipta</label>
                    <input type="file" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Biodata Inventor Kekayaan Intelektual</label>
                    <input type="file" class="form-control" id="" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Surat Pernyataan</label>
                    <input type="file" class="form-control" id="" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <br><br>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>