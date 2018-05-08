<style media="screen">
  .form-control{
    border-radius: 5px;
  }
</style>
<?php echo form_open("novel/proses_update");?>
  <input type="hidden" name="id" value="<?php echo $novel->id; ?>">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">Edit</h4>
    </div>
    <div class="panel-body">
      <div class="panel-group">
        <input type="hidden" name="id" value="<?php echo $novel->id; ?>">
        <label for="">Judul Novel :</label>
        <input type="text" class="form-control" id="" placeholder="" name="judul" value="<?php echo $novel->judul; ?>">
        <p class="help-block"></P>
        </div>
        <div class="form-group">
            <label for="">Kategori Novel :</label>
            <select class="form-control" name="kategori" value="<?php echo $novel->kategori; ?>">
              <option value="Romantis">Romantis</option>
              <option value="Komedi">Komedi</option>
              <option value="Horror">Horror</option>
              <option value="Religion">Religion</option>
              <option value="Lainnya">Lainnya</option>
            </select>
            <p class="help-block"></p>
        </div>
        <div class="form-group">
            <label for="">Penerbit :</label>
            <input type="text" class="form-control" id="" placeholder="" name="penerbit" value="<?php echo $novel->penerbit; ?>">
            <p class="help-block"></p>
        </div>

        <div class="form-group">
            <label for="">Penulis :</label>
            <input type="text" class="form-control" id="" placeholder="" name="penulis" value="<?php echo $novel->penulis; ?>">
            <p class="help-block"></p>
        </div>

        <div class="form-group">
            <label for="">Tahun Terbit :</label>
            <select class="form-control" name="terbit" value="<?php echo $novel->tahun; ?>">
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
            <textarea name="sinopsis"  class="form-control" ><?php echo $novel->sinopsis;?></textarea>
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
          Simpan dan Kembali
        </button>
        <a href=" <?php echo base_url('novel') ?> " name="cancel" class="btn btn-warning">Kembali</a>

      </div>
    </div>
  <?php echo form_close();?>
