<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang <?= $this->session->get('user-name') ?></h1>
    <?php if ($this->session->get('user-name') == null) { ?> 
    
    <a href="/dashboard/awin"><button>daftar</button></a> 
<?php } else { ?> 

<a href="/dashboard/upload"><button>Upload Barang</button></a> 
<a href="/dashboard/auth/logout"><button>Logout</button></a> 

<?php } ?>
<br>
<?php foreach ($barangs as $barang) { ?>
<br>
Nama Barang :<?= $barang['nama'] ?>
<br>
Kategori : <?= $barang['kategori'] ?>
<br>
Keterangan : <?= $barang['keterangan'] ?>
<br>
<img src="data:image/png;base64,<?= $barang['foto'] ?>" alt="" height="300">
<br>
<a href="/dashboard/upload/edit/<?= $barang['id'] ?>"><button>Edit</button></a>
<a href="/dashboard/upload/delete/<?= $barang['id'] ?>"><button>Hapus</button></a>
<?php } ?>





</body>
</html>