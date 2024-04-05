<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function __construct()
    {

    }
    public function index(): string
    {
        //model initialize
        $DataDosen = new DosenModel();
        $pager = \Config\Services::pager();

        $data = array(
            'DataDosen' => $DataDosen->paginate(5, 'dosen'),
            'pager' => $DataDosen->pager,
            'title' => 'Dosen',
            'active' => 'dosen'
        );
        return view('pages/dosen_list', $data);
    }

    public function btTambah()
    {
        $data = [
            'judul' => 'Dosen',
            'title' => 'Tambah Data'
        ];
        return view('pages/dosen_tambah', $data);
    }

    public function create()
    {
        $data = [];

        $kode = $this->request->getPost('kode_dosen');
        $nama = $this->request->getPost('nama_dosen');
        $status = $this->request->getPost('status_dosen');
       
        $validation = \Config\Services::validation();
        $validation->setRules([
            'kode_dosen' => 'required',
            'nama_dosen' => 'required',
            'status_dosen' => 'required',
        ]);

        //jika validasi gagal
        if (!$validation->withRequest($this->request)->run()) {
            $data['validation'] = $validation;
            // Jika validasi gagal, kembalikan pengguna ke halaman tambah dengan pesan kesalahan
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        //jika validasi berhasil
        $dosenModel = new DosenModel();
        $dosenModel->insert([
            'kode_dosen' => $kode,
            'nama_dosen' => $nama,
            'status_dosen' => $status
        ]);

        $token = "7034180779:AAE-jH6Li6wWRu2_1f0hXj971766k6nIBK4";
        $datas = [
            'text' => "Tambah data Dosen
Kode Dosen = $kode
Nama Dosen = $nama
Status Dosen = $status",
            'chat_id' => '-4141617308'
        ];
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($datas));

        return redirect()->to('dosen')->with('message', 'Data telah ditambahkan');

    }
}