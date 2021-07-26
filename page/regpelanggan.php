<!DOCTYPE html>
<html>

<head>
     <!-- Load file CSS Bootstrap -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Login dengan PHP</h2><br>
        <form method="post" action="reqpelanggankonfirm.php">
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Masukan Password">
            </div>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
            </div>
            <div class="form-group">
                <label>Nama Toko:</label>
                <input type="text" name="namatoko" class="form-control" placeholder="Masukan Nama Toko" />
            </div>
            <div class="form-group"> <label>Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukan Alamat"></textarea>
            </div>
            <div class="form-group"> <label>Telepon:</label>
                <input type="number" name="telepon" class="form-control" placeholder="Masukan No Telepon" />
            </div>

            <div class="form-group"> <label>Kota:</label>
                <input type="text" name="kota" class="form-control" placeholder="Masukan kota" />
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>