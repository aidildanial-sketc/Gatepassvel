<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman contact</title>
</head>
<body>
     <a href="{{ url('/') }}">Dashboard</a>
<a href="{{ url('/rekod') }}">Rekod Keluar Masuk</a>
<a href="{{ url('/cuti') }}">Permohonan cuti</a>
<a href="{{ url('/notifikasi') }}">Notifikasi</a>
<a href="{{ url('/profil') }}">Profil</a>

    <h1>Permohonan cuti</h1>
    
    <!-- content -->
 <div>
    <p>Selamat datang ke system GatePass</p>
<p>Sila isi borang di bawah untuk memohon cuti.</p>
<form>
 <!-- maklumat pelajar secara automatik dalam form ni -->
  <!-- nama,ic,kursus,no DK,sesi kemasukkan -->
   <!-- ade button utk upload gambar bukti butiran -->
  <label>Tarikh Cuti:</label><br>
  <input type="date"><br><br>

  <label>Sebab:</label><br>
  <textarea rows="4" cols="30"></textarea><br><br>

  <button type="submit">Hantar Permohonan</button>
</form>

 </div>

    
</body>
</html>