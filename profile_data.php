<?php
include "koneksi.php";  
include "upload_foto.php";

// Cek jika pengguna sudah login, jika belum, arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
    header("location:login.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fce4ec;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #f48fb1;
        }
        h1 {
            text-align: left;
            color: #880e4f;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #880e4f;
        }
        input[type="password"], input[type="file"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            width: 100%;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            align-self: flex-start;
        }
        button:hover {
            background-color: #0056b3;
        }
        .profile-image {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .profile-image img {
            border-radius: 10%;
            width: 150px;
            height: 150px;
        }
        nav {
            background-color: #f8bbd0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            text-decoration: none;
            color: #880e4f;
            font-weight: bold;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #777;
            font-size: 14px;
        }
        .footer img {
            width: 24px;
            height: 24px;
            margin: 0 5px;
        }
        .footer p {
            margin: 0;
        }
        .footer-social {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <nav>
        <div>My Daily Journal</div>
        <div>
            <a href="dashboard.php">Dashboard</a>
            <a href="article.php">Article</a>
            <a href="gallery.php">Gallery</a>
            <a href="profile.php">Homepage</a>
            <a href="logout.php">Logout</a>
        </div>
    </nav>
    <div class="container">
        <h1>Profil</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="password">Ganti Password</label>
            <input id="password" type="password" name="password" placeholder="Tuliskan password baru jika ingin mengganti" />

            <label for="foto">Ganti Foto Profil</label>
            <input id="foto" type="file" name="foto" />

            <div class="profile-img">
                <?php if (!empty($user_data['foto']) && file_exists("img/" . $user_data['foto'])): ?>
                    <label>Foto Profil Saat Ini:</label>
                    <img src="img/<?php echo htmlspecialchars($user_data['foto']); ?>" alt="Foto Profil" />
                <?php else: ?>
                    <p>Belum ada foto profil.</p>
                <?php endif; ?>
            </div>

            <button type="submit">Simpan</button>
        </form>
       <div class="footer">
    <div class="footer-social">
        <a href="https://www.instagram.com/udinusofficial" target="_blank">
            <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" width="24" height="24" />
        </a>
        <a href="https://twitter.com/udinusofficial" target="blank">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter" width="24" height="24" />
        </a>
        <a href="https://wa.me/+6282279865092" target="blank">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" width="24" height="24" />
        </a>
    </div>
    <p>Aldi &copy; 2024</p>
</div> 