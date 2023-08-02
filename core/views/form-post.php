<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Post</title>
    <?php $this->view('partials/meta') ?>
</head>

<body>
    <div class="container">
        <nav class="navbar">
            <ul>
                <li><a href="/">Home</a></li>
                <li class="ml-auto">
                    <a href="/post/add" class="btn-blue">Simpan</a>
                    <a href="/post/add" class="btn-blue">Publikasi</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">
        <form action="">
            <input type="text" name="judul" class="form-input">
            <textarea name="isi" id="" cols="30" rows="10" class="form-input"></textarea>
        </form>
    </div>
</body>

</html>