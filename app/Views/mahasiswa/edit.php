<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<form action="/update/<?= $id ?>" method="POST">
    <div class="row">
        <div class="col-6">

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

</form>
</div>
<div class="col-6">
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" class="form-control" id="deskripsi">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i>Submit</button>
</div>

</div>

<?= $this->endSection(); ?>