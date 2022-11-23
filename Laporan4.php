<html>
<head>
  <title>Curriculum Vitae</title>
</head>
<body bgcolor="#f6e6b0" width="800px">
  <div align="center">
    <center>
      <h1>
        Curiculum Vitae</h1>
    </center>
    <?php
     $name = "Nurfadilah";
     $ttl = "Jolle, 4 Mei 2002";
     $alamat = "Soppeng";
     $email = "ilhafhadilah90@gmail.com";
     $kuliah = "Jurusan Sistem Informasi, UIN Alauddin Makassar";
     $sma = "SMA Negeri Alauddin Makassar";
     $mts = "SMPN 4 Lalabataa";
     $sd = "SDN 15 JOLLE;
<<<<<<< HEAD
     11
=======
     33
>>>>>>> branch-1
     ?>
    <hr />
    <h2>
      Personal Details</h2>
    <table width="800px">
      <tr>
        <td width="25%">Full Name</td>
        <td width="1%">:</td>
        <td><b> <?php echo $name; ?> </b></td>
        <td rowspan="5"><img src="irma.jpg" alt="Foto " title="Foto " height="130px" width="100px">
        </td>
      </tr>
      <tr>
        <td>Place, Date of Birth </td>
        <td>:</td>
        <td> <?php echo $ttl; ?> </td>
      </tr>
      <tr>
        <td>Address</td>
        <td>:</td>
        <td> <?php echo $alamat; ?> </td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td>:</td>
        <td> <?php echo $email; ?> </td>
      </tr>
      </tbody>
    </table>
    <h2>
      Educational Background</h2>
    <table width="800px">
      <tbody>
        <tr>
          <td width="25%">2020-Sekarang</td>
          <td width="1%">:</td>
          <td> <?php echo $kuliah; ?> </td>
        </tr>
        <tr>
          <td>2017-2020</td>
          <td>:</td>
          <td> <?php echo $sma; ?> </td>
        </tr>
        <tr>
          <td>2014-2017</td>
          <td>:</td>
          <td><?php echo $mts; ?></td>
        <tr>
          <td>2008-2014</td>
          <td>:</td>
          <td><?php echo $sd; ?></td>
        </tr>
        </tr>
    </table>
    <br>
    <a href="achievements.html" title="achievements">
      <h2>
        Achievements >> </h2>
    </a> <!-- Pergi ke file achievements.html  -->
  </div>
</body>

</html>