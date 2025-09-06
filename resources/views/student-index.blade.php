<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data sekolah</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset("assets/fontawesome/css/all.min.css") }}">
</head>

<body>
    <div class="container">
        <div class="my-5">
            <figure>
                <blockquote class="blockquote">
                    <p>Data Siswa</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                    SMK Muhammadiyah 1 Weleri <cite title="Source Title">2025-2026</cite>
                </figcaption>
            </figure>

            <div class="">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">Tambah <i class="fa-solid fa-user-plus"></i></button>
                <div class="modal fade" id="createModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="font-semibold">Tambah Siswa</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="my-3">
                                        <label for="nisn" class="form-label">Nisn</label>
                                        <input type="number" name="nisn" id="nisn" class="form-control rounded-3" placeholder="Masukan nisn">
                                    </div>
                                    <div class="my-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="text" name="name" id="name" class="form-control rounded-3" placeholder="Masukan nama">
                                    </div>
                                    <div class="my-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" id="email" class="form-control rounded-3" placeholder="Masukan email">
                                    </div>
                                    <div class="my-3">
                                        <label for="major" class="form-label">Jurusan</label>
                                        <select name="major" id="major" class="form-select">
                                            <option value="" disabled selected>Pilih jurusan</option>
                                            <option value="AKL">AKL</option>
                                            <option value="MPLB">MPLB</option>
                                            <option value="PPLG">PPLG</option>
                                            <option value="Kuliner">Kuliner</option>
                                        </select>
                                    </div>
                                    <div class="my-3">
                                        <label for="photo" class="form-label">Foto</label>
                                        <input type="file" name="photo" id="photo" class="form-control rounded-3">
                                    </div>
                                    <button type="submit" class="btn btn-success w-100 rounded-3">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-hover table-striped my-3">
                <thead class="table-primary">
                    <tr>
                        <th width="35px">No</th>
                        <th>Foto</th>
                        <th>Biodata</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                    </tr>
                    <tr>
                        <td>tes</td>
                    </tr>
                    <tr>
                        <td>tes</td>
                    </tr>
                    <tr>
                        <td>tes</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{ asset("assets/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
</body>

</html>