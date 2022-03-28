<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Modelmahasiswa;

class Mahasiswa extends Controller{

    public function index()
    {
        $mhs = new Modelmahasiswa();
        $data = [
            'tampildata' =>$mhs->tampildata()->getResult()
        ];

        echo View('viewtampilmahasiswa', $data);
    }

    public function formtambah()
    {
        helper('form');
        echo View('viewformtambah');
    }

    public function simpandata()
    {
        $data = [
            'nim' => $this->request->getpost('nim'),
            'nama' => $this->request->getpost('nama'),
            'jenis_kelamin' => $this->request->getpost('jenis_kelamin'),
            'tgl_lahir' => $this->request->getpost('tanggal'),
            'telp' => $this->request->getpost('telp'),
        ];

        $mhs = new Modelmahasiswa();
        
        $simpan = $mhs->simpan($data);

        if($simpan) {
            return redirect()->to('/mahasiswa/index');
        }
    }

    function hapus(){
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        $mhs = new Modelmahasiswa();

        $mhs->hapusdata($nim);

        return redirect()->to('/mahasiswa/index');
    }
    function formedit(){
        helper('form');
        $uri = service('uri');
        $nim = $uri->getSegment('3');

        $mhs = new Modelmahasiswa();

        $ambildata = $mhs->ambildata($nim);

        if(count($ambildata->getResult()) > 0) {
            $row = $ambildata->getRow();
            $data = [
                'nim' => $nim,
                'nama' => $row->nama,
                'jenis_kelamin' => $row->jenis_kelamin,
                'tgl_lahir' => $row->tgl_lahir,
                'telp' => $row->telp,
            
            ];
            echo View('viewformedit', $data);
        }
    }

    function updatedata(){
        $nim = $this->request->getpost('nim');
        $data = [
            'nama' => $this->request->getpost('nama'),
            'jenis_kelamin' => $this->request->getpost('jenis_kelamin'),
            'tgl_lahir' => $this->request->getpost('tanggal'),
            'telp' => $this->request->getpost('telp'),
        ];

        $mhs = new Modelmahasiswa();
        
        $update = $mhs->editdata($data,$nim);

        if($update) {
            return redirect()->to('/mahasiswa/index');
        }
    }
}