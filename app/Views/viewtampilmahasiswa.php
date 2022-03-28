<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;

        }
        body{
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h1 align="center">Tugas CURD</h1>
    <h2 align="center">Data Mahasiswa Teknik Informatika</h2>

    <p>
        <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/formtambah') ?>'">
            Add Data
        </button>
    </p>        
    <table border = "1">
        <thread>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>    
                <th>Tanggal Lahir</th>
                <th>Telpon</th>
                <th>Aksi</th>
            <tr>
        </thread>

        <tbody>
            <?php
                $nomor= 0;
                foreach($tampildata as $row) :
                    $nomor++;
            ?>
            <tr>
                <th><?= $nomor; ?></th>
                <td><?= $row->nim ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->jenis_kelamin ?></td>
                <td><?= $row->tgl_lahir ?></td>
                <td><?= $row->telp ?></td>
                <td>
                    <button type = "button" onclick="hapus('<?= $row->nim ?>')">
                        Hapus
                    </button>
                    <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/formedit/'.$row->nim) ?>'">
                        Edit
                    </button>
                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>          
    <script>
        function hapus(nim){
            pesan = confirm ('Do you want to delete this file?');

            if (pesan) {
                window.location.href = ("<?= site_url('mahasiswa/hapus/') ?>") + nim;
            } else return false;
        }
    </script>                          
</body>

</html>