<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Mahasiswa</title>
    <style>
        body{
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h2 align="center">Form Edit Mahasiswa</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/index') ?>'">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('mahasiswa/updatedata') ?>
        <table>
            <tr>
                <td>NIM :</td>
                <td>
                    <input type="text" name="nim" maxLength=13 readonLy value="<?= $nim; ?>">
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap :</td>
                <td>
                    <input type="text" name="nama" size="50" value ="<?= $nama; ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value= "L" <?php if ($jenis_kelamin == 'L') echo "checked"; ?>> Laki-Laki
                    <input type="radio" name="jenis_kelamin" value= "P" <?php if ($jenis_kelamin == 'P') echo "checked"; ?>> Perempuan
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir :</td>
                <td>
                    <input type="date" name="tanggal" value ="<?= $tgl_lahir; ?>">
                </td>
            </tr>
            <tr>
                <td>Telpon :</td>
                <td>
                    <input type="text" name="telp" pattern="{0-9}+" value ="<?= $telp; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update Data">
                </td>
            </tr>
        </table>

            
                
        
        <?= form_close(); ?>

     <p>   
</body>
</html>
