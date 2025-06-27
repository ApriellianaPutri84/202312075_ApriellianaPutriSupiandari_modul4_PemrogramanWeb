<?php
// Inisialisasi variabel
$nama = $email = $pesan = "";
$errors = [];
$sukses = false;

// Proses jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil dan validasi data
    if (empty($_POST["nama"])) {
        $errors[] = "Nama Lengkap tidak boleh kosong.";
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
    }

    if (empty($_POST["email"])) {
        $errors[] = "Alamat Email tidak boleh kosong.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    if (empty($_POST["pesan"])) {
        $errors[] = "Pesan/Komentar tidak boleh kosong.";
    } else {
        $pesan = htmlspecialchars($_POST["pesan"]);
    }

    // Jika tidak ada error
    if (empty($errors)) {
        $sukses = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Tamu Digital STITEK Bontang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #e0f7fa, #f1f8e9);
            color: #333;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #0288d1;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .container {
            width: 90%;
            max-width: 600px;
            margin: 30px auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        textarea {
            resize: vertical;
        }
        button {
            margin-top: 20px;
            background-color: #43a047;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #388e3c;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        .success {
            background-color: #e8f5e9;
            border-left: 5px solid #43a047;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<header>
    <h1>Buku Tamu Digital STITEK Bontang</h1>
</header>

<div class="container">
    <form method="POST" action="">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" value="<?= $nama ?>">

        <label for="email">Alamat Email:</label>
        <input type="email" id="email" name="email" value="<?= $email ?>">

        <label for="pesan">Pesan/Komentar:</label>
        <textarea id="pesan" name="pesan" rows="5"><?= $pesan ?></textarea>

        <button type="submit">Kirim Pesan</button>
    </form>

    <!-- Tampilkan error jika ada -->
    <?php if (!empty($errors)) : ?>
        <div class="error">
            <ul>
                <?php foreach ($errors as $err) : ?>
                    <li><?= $err ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Tampilkan data jika berhasil -->
    <?php if ($sukses) : ?>
        <div class="success">
            <h3>Terima kasih atas pesan Anda!</h3>
            <p><strong>Nama:</strong> <?= $nama ?></p>
            <p><strong>Email:</strong> <?= $email ?></p>
            <p><strong>Pesan:</strong><br><?= nl2br($pesan) ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
