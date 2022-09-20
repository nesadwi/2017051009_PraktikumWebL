<form action="/update/<?= $id ?>" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">NPM</label>
        <input type="text" class="form-control" name="npm" id="npm" value="<?= $npm ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $nama ?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $alamat ?>">
    </div>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>