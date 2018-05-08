<section class="content-header">
<h1>
  <b>Novel<b>
</h1>
<ol class="breadcrumb">
  <li class="active">Data Novel</li>
</ol>
</section>
<div class="panel panel-default">
  <div class="panel-heading">
    <a href="<?php echo base_url('novel/tambah') ?>" class="btn btn-success"><i class="fa fa-edit"></i>Tambah Data</a>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <thead>
          <th>No</th>
          <th>Judul Novel</th>
          <th>Kategori</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Aksi</th>
        </thead>
        <tbody>
  <?php
  if ($query->num_rows()>0) {
    $no=0;
    foreach ($query->result() as $novel) {
      $no++;
      echo '<tr>
            <td>'.$no.'</td>
            <td>'.$novel->judul.'</td>
            <td>'.$novel->kategori.'</td>
            <td>'.$novel->penulis.'</td>
            <td>'.$novel->penerbit.'</td>
            <td>
            <a href="'.base_url('novel/edit/'.$novel->id).'" class="btn btn-warning"><i class="fa fa-edit"></i>Edit</a>
            <a href="'.base_url('novel/hapus/'.$novel->id).'" class="btn btn-danger"><i class="fa fa-trash"></i>Hapus</a></td></tr>';
    }
  }else{
  echo '  <td colspan="9" style="text-align:center;">Data Masih Kosong</td>';
  }

   ?>

        </tbody>
      </table>

    </div>
  </div>

</div>
