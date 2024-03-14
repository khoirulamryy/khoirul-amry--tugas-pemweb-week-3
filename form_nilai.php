<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Form Nilai</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Form Nilai</h1>
        <form action="data_nilai.php" method="post" class="form-horizontal w-75 mt-5 mx-auto p-4 border shadow-sm">
            <div class="container px-3">
                <div class="form-group row mb-3">
                    <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Siapa nama kamu?" required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matkul" name="matkul" required="required" class="form-select">
                            <option value="">----- Pilih Mata Kuliah -----</option>
                            <option>Dasar Dasar Pemrograman</option>
                            <option>Pemrograman Web</option>
                            <option>Statistika dan Probabilitas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-8">
                        <input id="nilai_uts" name="nilai_uts" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-8">
                        <input id="nilai_uas" name="nilai_uas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Praktikum</label>
                    <div class="col-8">
                        <input id="nilai_tugas" name="nilai_tugas" type="number" min="0" max="100" class="form-control" placeholder="Masukan angka..." required>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <div class="offset-4 col-8">
                        <input a href= "data_nilai.php" type="submit" value="Submit" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>
    </div>
    