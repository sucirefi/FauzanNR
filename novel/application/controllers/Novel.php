<?php
  class Novel extends CI_Controller{
      function index(){
        $data['query']=$this->db->get('db_novel');
        $data['content']='admin/content/novel';
        $this->load->view("admin/template",$data);
      }
      function tambah(){
        $data['content']='admin/content/novel_tambah';
        $this->load->view("admin/template",$data);
      }

      public function add(){
        $judul=$this->input->post('judul');
        $kategori=$this->input->post('kategori');
        $penulis=$this->input->post('penulis');
        $terbit=$this->input->post('terbit');
        $entri=$this->input->post('entri');
        $penerbit=$this->input->post('penerbit');
        $deskripsi=$this->input->post('sinopsis');
        $data=array(
          'judul'=>$judul,
          'kategori'=>$kategori,
          'penulis'=>$penulis,
          'penerbit'=>$penerbit,
          'tahun'=>$terbit,
          'entry'=>$entri,

          'sinopsis'=>$deskripsi
        );
        $insert=$this->db->insert('db_novel',$data);
        if ($insert) {
          echo "<script>alert('Data Berhasil disimpan');</script>";
        }else {
          echo "<script>alert('Data Gagal disimpan');</script>";
        }
      }
      function simpan(){
        if ($this->input->post('buttonback')) {
          $this->add();
          redirect('novel');
        }else if($this->input->post('button')){
          $this->add();
        }else {
          redirect('novel');
        }

      }
      public function hapus($id){
        $this->db->delete('db_novel',['id'=>$id]);
        redirect('novel');
      }
      public function edit($id){
        $data['novel']=$this->db->get_where('db_novel',['id'=>$id])->row();
        $data['content']='admin/content/novel_edit';
        $this->load->view("admin/template",$data);
      }

      public function update(){
        $id=$this->input->post('id');
        $judul=$this->input->post('judul');
        $kategori=$this->input->post('kategori');
        $penulis=$this->input->post('penulis');
        $terbit=$this->input->post('terbit');
        $entri=$this->input->post('entri');
        $penerbit=$this->input->post('penerbit');
        $deskripsi=$this->input->post('sinopsis');
        $data=array(
          'judul'=>$judul,
          'kategori'=>$kategori,
          'penulis'=>$penulis,
          'penerbit'=>$penerbit,
          'tahun'=>$terbit,
          'entry'=>$entri,

          'sinopsis'=>$deskripsi
        );
        $this->db->where('id',$id);
        $insert=$this->db->update('db_novel',$data);
        if ($insert) {
          echo "<script>alert('Data Berhasil disimpan');</script>";
        }else {
          echo "<script>alert('Data Gagal disimpan');</script>";
        }
      }
      function proses_update(){
        if ($this->input->post('buttonback')) {
          $this->update();
          redirect('novel');
        }else {
          redirect('novel');
        }

      }
  }
  ?>
