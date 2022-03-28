<?php
namespace App\Models;

use CodeIgniter\Model;
class Modelmahasiswa extends Model
{
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('mahasiswa')->get();
    }

    function simpan($data){
        return $this->db->table('mahasiswa')->insert($data);
    }

    function hapusdata($nim)
    {
        return $this->db->table('mahasiswa')->delete(['nim' => $nim]);
    }

    function ambildata($nim){
        return $this->db->table('mahasiswa')->getWhere(['nim'=>$nim]);
    }
    
    function editdata($data, $nim){
        return $this->db->table('mahasiswa')->update($data, ['nim'=>$nim]);
    }
}