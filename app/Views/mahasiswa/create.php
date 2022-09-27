<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-6">
        <form action="/store" method="post">
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm">
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
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