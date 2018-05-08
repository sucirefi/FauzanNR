<style media="screen">
  .form-control{
    border-radius: 5px;
  }
</style>
<?php echo form_open("novel/simpan");?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Tambah Novel</h4>
    </div>
    <div class="panel-body">
      <div class="panel-group">
        <label for="">Judul Novel :</label>
        <input type="text" class="form-control" id="" placeholder="" name="judul">
        <p class="help-block"></P>
        </div>
        <div class="form-group">
            <label for="">Kategori Novel :</label>
            <select class="form-control" name="kategori">
              <option value="Romantis">Romantis</option>
              <option value="Komedi">Komedi</option>
              <option value="Horror">Horror</option>
              <option value="Horror">Religion</option>
              <option value="Horror">Lainnya</option>
            </select>
            <p class="help-block"></p>
        </div>
        <div class="form-group">
            <label for="">Penerbit :</label>
            <input type="text" class="form-control" id="" placeholder="" name="penerbit">
            <p class="help-block"></p>
        </div>
        <div class="form-group">
            <label for="">Penulis :</label>
            <input type="text" class="form-control" id="" placeholder="" name="penulis">
            <p class="help-block"></p>
        </div>
        <div class="form-group">
            <label for="">Tahun Terbit :</label>
            <select class="form-control" name="terbit">
              <?php
              for ($i=2004; $i <2020 ; $i++) {
                  echo '<option value="'.$i.'">'.$i.'</option>';
               }

               ?>
            </select>
            <p class="help-block"></p>
        </div>
        <div class="form-group">
            <label for="">Sinopsis :</label>
            <textarea name="sinopsis"  class="form-control"></textarea>
            <p class="help-block"></p>
        </div>
        <div class="form-group">
            <label for="">Data Entri :</label>
            <input type="text" class="form-control" id="" value="<?php echo date('Y-m-d H-s-i'); ?>" name="entri" readonly>
            <p class="help-block"></p>
        </div>
      </div>
      <div class="panel-footer">
        <button type="submit" name="buttonback" value="button" class="btn btn-success">
          Tambah dan Kembali
        </button>
        <a href=" <?php echo base_url('novel') ?> " class="btn btn-warning">Kembali</a>

      </div>
    </div>
  <?php echo form_close();?>
