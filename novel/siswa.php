<?php
  class Siswa extends CI_Controller{
    function__construct(){
      parent::__construct();
      $this->load->model("siswa_model");
    }

    funtion indext(){
      $data["query"] = $this->siswa_model->getAllDate();
      $data->load->view("template",$data);
    }

    function tambah()
    {
      $data['content'] = 'siswa_tambah';
      $this->load->view('template',$data);
    }

    function tambah_proses(){
      $nis = $this->input->post("nis");
      $nisn = $this->input->post("nisn");
      $nama = $this->input->post("nama");
      $jk = $this->input->post("jenis_kelamin");
      $alamat = $this->input->post("alamat");
      $tmp_lahir = $this->input->post("tmp_lahir");
      $tgl_lahir = $this->input->post("tgl_lahir");


    $data = array (
      "siswa_nis"=> $nis,
      "siswa_nisn" => $nisn,
      "siswa_nama" => $nama,
      "siswa_jk" => $jk,
      "siswa_alamat" => $alamat,
      "siswa_tmp_lahir" => $tmp_lahir,
      "siswa_tgl_lahir" => $tgl_lahir,
      "siswa_entri" => date("y-d-m H:i:s")

      $insert = $this->db->insert ("siswa",$data);
        if ($insert->affected_row()>0){
          echo "
              <script>
                alert('data berhasil disimpan');
                window.location ='".base_url('siswa')."';
                </script>
                ";
          }
          else{
            echo "
                <script>
                  alert('Data gagal disimpan !');
                  window.location ='".base_url('siswa/tambah')."';
                </script>
              ";
          }

      )
    }
  }



?>
