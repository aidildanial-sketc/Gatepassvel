<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman blog</title>
</head>
<body>
     <a href="{{ url('/') }}">Dashboard</a>
<a href="{{ url('/rekod') }}">Rekod Keluar Masuk</a>
<a href="{{ url('/cuti') }}">Permohonan cuti</a>
<a href="{{ url('/notifikasi') }}">Notifikasi</a>
<a href="{{ url('/profil') }}">Profil</a>


     <!-- content -->
    <!-- ade tempat upload gambar -->
   <div class="content">
      <div class="profile-box">
         <h1>Profil Pengguna</h1>

         <form action="" method="post">

            <div class="form-group">
               <label>Nama</label>
               <input type="text" name="nama" value="Name">
            </div>

            <div class="form-group">
               <label>No IC</label>
               <input type="text" name="no_ic" placeholder="No IC">
            </div>

            <div class="form-group">
               <label>No Telefon</label>
               <input type="text" name="telefon" placeholder="No telefon">
            </div>

            <div class="form-group">
               <label>No NDP / No Matrik</label>
               <input type="text" name="no_ndp" value="No NDP">
            </div>

            <div class="form-group">

               <tr>
                  <td>Kursus</td>
                  <td>

                     <input type="checkbox" name="kursus[]" value="DKM"> DKM
                     <input type="checkbox" name="kursus[]" value="DLKM"> DLKM
                     <input type="checkbox" name="kursus[]" value="TVET-I"> TVET-I
                  </td>
               </tr><br>
               <label>Kos</label>
               <select name="kursus">
                  <option value="">Pilih Kursus</option>
                  <option value="TSK">Teknologi Sistem Komputer</option>
                  <option value="Kimpalan">Kimpalan</option>
                  <option value="Elektronik">Elektronik</option>
                  <option value="Mechatronik">Mekatronik</option>
                  <option value="Pengeluaran">Peneluaran</option>
               </select>
            </div>

            <div class="form-group">
               <label>Sesi Kemasukan</label>
               <input type="text" name="sesi" placeholder="sesi kemasukkan">
            </div>

            <div class="form-group">
               <label>Alamat</label>
               <textarea name="alamat" rows="3"></textarea>
            </div>
            <div class="form-group">
               <label>Poskod</label>
               <input type="text" name="Poskod" placeholder="Poskod">
            </div>
            <div class="form-group">
               <label>Daerah</label>
               <input type="text" name="Daerah" placeholder="Daerah">
            </div>
            <div class="form-group">
               <label>Negeri</label>
               <input type="text" name="Negeri" placeholder="Negeri">
            </div>


            <button type="submit" class="btn">Kemaskini Profil</button>

         </form>
      </div>

</body>
</html>