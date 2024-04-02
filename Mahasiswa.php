<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <style>
        body {
            background-image: url('https://png.pngtree.com/background/20220714/original/pngtree-cute-pastel-background-aesthetic-picture-image_1603835.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            color: white;
        }
        form {
            background-color: lightpink;
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto;
            max-width: 400px;
        }
        input[type="text"], input[type="submit"], select {
            width: calc(100% - 22px); 
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: rosybrown;
        }
        table, th, td {
            border: 1px solid white;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Kuliah: 
        <select name="kuliah">
            <option value="">-- Pilih Kampus --</option>
            <option value="Universitas Muria Kudus">Universitas Muria Kudus</option>
            <option value="Universitas Muhammadiyah Kudus">Universitas Muhammadiyah Kudus</option>
            <option value="Universitas Islam Nahdlatul Ulama Jepara">Universitas Islam Nahdlatul Ulama Jepara</option>
        </select><br>
        Mata Kuliah: 
        <select name="matkul">
            <option value="">-- Pilih Mata Kuliah --</option>
            <option value="PHP">PHP</option>
            <option value="Laravel">Laravel</option>
            <option value="Javascript">Javascript</option>
            <option value="UI/UX">UI/UX</option>
        </select><br>
        Nilai: <input type="text" name="nilai"><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once 'objMahasiswa.php';

        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kuliah = $_POST['kuliah'];
        $matkul = $_POST['matkul']; 
        $nilai = $_POST['nilai'];

        $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);

        echo "<table>";
        echo "<tr><th>NIM</th><th>Nama</th><th>Kuliah</th><th>Mata Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>";
        echo "<tr>";
        echo "<td>".$mahasiswa->nim."</td>";
        echo "<td>".$mahasiswa->nama."</td>";
        echo "<td>".$mahasiswa->kuliah."</td>";
        echo "<td>".$matkul."</td>"; 
        echo "<td>".$mahasiswa->nilai."</td>";
        echo "<td>".$mahasiswa->grade."</td>";
        echo "<td>".$mahasiswa->predikat."</td>";
        echo "<td>".$mahasiswa->status."</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>