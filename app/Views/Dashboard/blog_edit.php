<!-- app/Views/blog/edit.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Postingan</title>
</head>
<body>
    <h1>Edit Postingan</h1>
    <form action="<?= site_url('blog/update/' . $post['id']) ?>" method="post">
        <label for="title">Judul:</label>
        <input type="text" name="title" id="title" value="<?= $post['title'] ?>" required>
        <br>
        <label for="content">Konten:</label>
        <textarea name="content" id="content" required><?= $post['content'] ?></textarea>
        <br>
        <label for="author">Penulis:</label>
        <input type="text" name="author" id="author" value="<?= $post['author'] ?>" required>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
