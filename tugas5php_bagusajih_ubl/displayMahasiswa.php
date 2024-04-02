<?php
require_once 'Mahasiswa.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $universitas = $_POST['universitas'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    
    $mahasiswa = new Mahasiswa($nim, $nama, $universitas, $mata_kuliah, $nilai);

    $grade = $mahasiswa->getGrade();
    $predikat = $mahasiswa->getPredikat();

    
    echo "<style>
    body {
        background-color: #f2f2f2; /* Warna abu-abu */
        font-family: Arial, sans-serif; /* Ganti jenis font */
    }

    .container {
        width: 50%; /* Lebar container */
        margin: 0 auto; /* Tengahkan container */
    }

    h2 {
        text-align: center; /* Tengahkan teks */
    }

    table {
        width: 100%; /* Lebar tabel */
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ddd; /* Garis tepi tabel dan sel */
        padding: 8px;
    }

    th {
        background-color: #f2f2f2; /* Warna latar belakang header */
    }

    tr:nth-child(even) {
        background-color: #ffffff; /* Warna latar belakang baris genap */
    }

    .button-container {
        text-align: center; /* Tengahkan tombol */
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #4CAF50;
        color: white;
        text-align: center;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .button:hover {
        background-color: #45a049;
    }
          </style>";

    echo "<h2 align='center'>Daftar Nilai Ujian Mahasiswa</h2>";
    echo "<table>";
    echo "<thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Universitas</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Status</th>
            </tr>
        </thead>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>1</td>";
    echo "<td>" . $mahasiswa->nim . "</td>";
    echo "<td>" . $mahasiswa->nama . "</td>";
    echo "<td>" . $mahasiswa->universitas . "</td>";
    echo "<td>" . $mahasiswa->mata_kuliah . "</td>";
    echo "<td>" . $mahasiswa->nilai . "</td>";
    echo "<td>" . $grade . "</td>";
    echo "<td>" . $predikat . "</td>";
    echo "<td>" . $mahasiswa->getHasil() . "</td>";
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";

    
    echo "<div class='button-container'>
            <a href='formMahasiswa.php' class='button'>Kembali</a>
          </div>";
}
?>