<?php
$data_mahasiswa = [
    ['nim' => '124124', 'nama' => 'Bagus Aji Hapsoro', 'nilai' => 75],
    ['nim' => '692485', 'nama' => 'Rizky Orton', 'nilai' => 85],
    ['nim' => '781244', 'nama' => 'Bejo Valorant', 'nilai' => 35],
    ['nim' => '712442', 'nama' => 'Davarian Gym', 'nilai' => 55],
    ['nim' => '715464', 'nama' => 'Darel Sleeper', 'nilai' => 15],
    ['nim' => '353253', 'nama' => 'Ilia Topuria', 'nilai' => 90],
    ['nim' => '315315', 'nama' => 'Khabib Nurmagomedov', 'nilai' => 75],
    ['nim' => '125252', 'nama' => 'Islam Makachev', 'nilai' => 100],
    ['nim' => '697264', 'nama' => 'Jamahal Hill', 'nilai' => 45],
    ['nim' => '185981', 'nama' => 'Conor McGregor', 'nilai' => 65],
   
];


function getGrade($nilai) {
    if ($nilai >= 80) {
        return 'A';
    } elseif ($nilai >= 70) {
        return 'B';
    } elseif ($nilai >= 60) {
        return 'C';
    } elseif ($nilai >= 50) {
        return 'D';
    } else {
        return 'E';
    }
}


function getPredikat($grade) {
    switch ($grade) {
        case 'A':
            return 'Memuaskan';
        case 'B':
            return 'Bagus';
        case 'C':
            return 'Cukup';
        case 'D':
            return 'Kurang';
        case 'E':
            return 'Buruk';
        default:
            return 'Tidak ada predikat';
    }
}


$nilai_tertinggi = max(array_column($data_mahasiswa, 'nilai'));
$nilai_terendah = min(array_column($data_mahasiswa, 'nilai'));
$jumlah_mahasiswa = count($data_mahasiswa);
$total_nilai = array_sum(array_column($data_mahasiswa, 'nilai'));
$rata_rata = $total_nilai / $jumlah_mahasiswa;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        thead {
            background-color: orchid;
            color: black;
        }
        tfoot {
            background-color: whitesmoke;
        }
        tfoot th {
            background-color: orchid;
            text-align: right;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($data_mahasiswa as $key => $mahasiswa): ?>
                <tr>
                    <td><?php echo $key + 1; ?></td>
                    <td><?php echo $mahasiswa['nim']; ?></td>
                    <td><?php echo $mahasiswa['nama']; ?></td>
                    <td><?php echo $mahasiswa['nilai']; ?></td>
                    <td><?php echo getPredikat(getGrade($mahasiswa['nilai'])); ?></td>
                    <td><?php echo getGrade($mahasiswa['nilai']); ?></td>
                    <td><?php echo ($mahasiswa['nilai'] >= 65) ? 'Lulus' : 'Tidak Lulus'; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Nilai Tertinggi</th>
                <td colspan="4"><?php echo $nilai_tertinggi; ?></td>
            </tr>
            <tr>
                <th colspan="3">Nilai Terendah</th>
                <td colspan="4"><?php echo $nilai_terendah; ?></td>
            </tr>
            <tr>
                <th colspan="3">Nilai Rata-Rata</th>
                <td colspan="4"><?php echo number_format($rata_rata, 2); ?></td>
            </tr>
            <tr>
                <th colspan="3">Jumlah Mahasiswa</th>
                <td colspan="4"><?php echo $jumlah_mahasiswa; ?></td>
            </tr>
            <tr>
                <th colspan="3">Jumlah Keseluruhan Nilai</th>
                <td colspan="4"><?php echo $total_nilai; ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>

