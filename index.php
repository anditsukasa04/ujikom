<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>KLINIK AKMAL HIDAYAH</title>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h2>APLIKASI PENGELOLAAN KLINIK ANDI TRI HARYONO</h2><br>
        <table class="table table-hover" style="width: 20%">
            <tr>
                <td style="background:green;color:white;font-weight:bold;text-align:center;">MENU</td>
            </tr>
            <tr>
                <td onclick="toggleForm()" style="background:white;color:green;font-weight:bold;cursor: pointer;">FORM</td>
            </tr>
            <tr class="form-item hidden">
                <td>Data Pasien</td>
            </tr>
            <tr class="form-item hidden">
                <td>Data Dokter</td>
            </tr>
            <tr class="form-item hidden">
                <td>Data Poli</td>
            </tr>
            <tr class="form-item hidden">
                <td>Data Berobat</td>
            </tr>
            <tr>
                <td onclick="toggleLaporan()" style="background:white;color:green;font-weight:bold;cursor: pointer;">LAPORAN</td>
            </tr>
            <tr class="laporan-item hidden">
                <td>List Dokter</td>
            </tr>
            <tr class="laporan-item hidden">
                <td>List Pasien</td>
            </tr>
            <tr class="laporan-item hidden">
                <td><a href="list_berobat.php">List Data Berobat</a></td>
            </tr>
        </table>
    </div>

    <script>
        function toggleForm() {
            const formItems = document.querySelectorAll('.form-item');
            formItems.forEach(item => {
                item.classList.toggle('hidden');
            });
        }

        function toggleLaporan() {
            const laporanItems = document.querySelectorAll('.laporan-item');
            laporanItems.forEach(item => {
                item.classList.toggle('hidden');
            });
        }
    </script>
</body>

</html>