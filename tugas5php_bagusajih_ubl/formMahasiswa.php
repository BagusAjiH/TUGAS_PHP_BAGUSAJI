<!DOCTYPE html>
<html>
<head>
  <title>Form Nilai Ujian</title>
  <style>
    /* Reset CSS */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body */
body {
  font-family: Arial, sans-serif;
  background-color: #f7f7f7;
  color: #333;
}

/* Form */
form {
  width: 80%;
  margin: 50px auto;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  background-color: #fff;
}

/* Heading */
h2 {
  text-align: center;
  margin-bottom: 20px;
}

/* Label */
label {
  display: block;
  margin-bottom: 10px;
  font-weight: 500;
}

/* Input */
input[type="text"],
input[type="number"],
select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-sizing: border-box;
  margin-bottom: 15px;
}


select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
  appearance: none; 
  background-color: #fff;
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 6'%3E%3Cpath fill='%23333' d='M0 0 L5 3 L10 0 z'/%3E%3C/svg%3E"); /* Example custom arrow icon */
  background-repeat: no-repeat;
  background-position: calc(100% - 10px) center;
  cursor: pointer;
  font-family: Roboto, sans-serif; 
  color: #333;
  transition: background-color 0.2s ease-in-out;
}


input[type="submit"] {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 3px;
  background-color: #333;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

input[type="submit"]:hover {
  background-color: #222;
}

/* Focus */
input:focus,
select:focus {
  outline: none;
  border-color: #999;
}

/* Error Message */
.error {
  color: red;
  margin-bottom: 10px;
}
  </style>

</head>
<body>
  <h2>Form Nilai Ujian</h2>
  <form method="post" action="displayMahasiswa.php">
    <label>NIM:</label>
    <input type="text" name="nim" required>

    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Universitas:</label>
    <select name="universitas">
      <option value="Pilih Universitas">--Pilih Universitas--</option>
      <option value="Universitas Budi Luhur">Universitas Budi Luhur</option>
      <option value="Universitas Budi Mulia">Universitas Bunda Mulia</option>
      <option value="Universitas Esa Unggul">Universitas Esa Unggul</option>
    </select>

    <label>Mata Kuliah:</label>
    <select name="mata_kuliah">
      <option value="Pilih Matakuliah">--Pilih Matakuliah--</option>
      <option value="DataWarehouse">Datawarehouse</option>
      <option value="HTML">HTML</option>
      <option value="AI">AI</option>
      <option value="Pemrograman permainan">Pemrograman Permainan</option>
    </select>

    <label>Nilai:</label>
    <input type="text" name="nilai" required>

    <input type="submit" value="Submit">
  </form>
</body>
</html>
