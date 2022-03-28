<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
    <style>
        body{
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h2 align="center">Form Tambah Mahasiswa</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/index') ?>'">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('mahasiswa/simpandata') ?>
        <table>
            <tr>
                <td>Nama Lengkap :</td>
                <td>
                    <input type="text" name="nama" size="50">
                </td>
            </tr>
            <tr>
                <td>NIM :</td>
                <td>
                    <input type="text" name="nim" maxLength=13 autofocus>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value= "L">Laki-Laki
                    <input type="radio" name="jenis_kelamin" value= "P">Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td>
                    <input type="date" name="tanggal">
                </td>
            </tr>
            <tr>
                <td>Telpon :</td>
                <td>
                    <input type="text" name="telp" pattern="{0-9}+">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Save Data">
                </td>
            </tr>
        </table>

            
                
        
        <?= form_close(); ?>

     <p>   
</body>
</html>
