<!DOCTYPE html>
<html>
<head>
 <title>DATA PEMINJAMAN</title>
</head>
<body>
 <style type="text/css">
 body{
 font-family: sans-serif;
 }
 table{
 margin: 20px auto;
 border-collapse: collapse;
 }
 table th,
 table td{
 border: 1px solid #3c3c3c;
 padding: 3px 8px;

 }
 a{
 background: blue;
 color: #fff;
 padding: 8px 10px;
 text-decoration: none;
 border-radius: 2px;
 }

    .tengah{
        text-align: center;
    }
 </style>
 <table>
 <tr>
 <th>No</th>
 <th>NAMA LENGKAP</th>
 <th>JUDUL</th>
 <th>TANGGAL PEMINJAMAN</th>
 <th>TANGGAL PENGEMBALIAN</th>
 <th>STATUS PEMINJAMAN</th>
 </tr>
 <?php 
 
 include "../koneksi.php";
 $no = 1;
 $data = mysqli_query($koneksi,"SELECT * FROM peminjaman
 LEFT JOIN user ON peminjaman.UserID = user.UserID
 LEFT JOIN buku ON peminjaman.BukuID = buku.BukuID");
 while($d = mysqli_fetch_array($data)){
 ?>
 <tr>
 <td style='text-align: center;'><?php echo $no++; ?></td>
 <td><?php echo $d['NamaLengkap']; ?></td>
 <td><?php echo $d['Judul']; ?></td>
 <td><?php echo $d['TanggalPeminjaman']; ?></td>
 <td><?php echo $d['TanggalPengembalian']; ?></td>
 <td><?php echo $d['StatusPeminjaman']; ?> </td>
 </tr>
 <?php 
 }
 ?>
    </table>
    <script>
 window.print();
 </script>
</body>
</html>