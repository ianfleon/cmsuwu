<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?php $this->view('partials/meta') ?>
</head>

<body>
    <?php $this->view('partials/navbar') ?>
    <div class="container">
        <table class="table">
            <tbody>
                <?php foreach (Content::all() as $post) : ?>
                    <tr>
                        <td><?= $post['judul'] ?></td>
                        <td><a href="/preview/www/judul-post" target="_blank">Lihat</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>