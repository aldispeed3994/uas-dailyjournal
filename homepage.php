<?php
include "koneksi.php";

$limit = 6; // Jumlah item per halaman
$hlm = isset($_GET['hlm']) ? (int)$_GET['hlm'] : 1;
$limit_start = ($hlm - 1) * $limit;

// Ambil data dari database
$sql = "SELECT * FROM gallery ORDER BY tanggal DESC LIMIT $limit_start, $limit";
$hasil = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-top: 0px;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin: 20px auto;
            max-width: 1200px;
        }
        .gallery-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            width: 600px;
            text-align: center;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .gallery-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .gallery-item p {
            margin: 10px 0 0;
            font-size: 14px;
            color: #555;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin: 200px 0;
        }
        .pagination li {
            list-style: none;
            margin: 0 5px;
        }
        .pagination a {
            text-decoration: none;
            color: #007bff;
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .pagination a.active {
            background-color: #007bff;
            color: white;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <h1>Gallery</h1>
    <div class="gallery">
        <?php
        if ($hasil->num_rows > 0) {
            while ($row = $hasil->fetch_assoc()) {
                // Tampilkan gambar jika ada
                if (!empty($row["gambar"]) && file_exists('img/' . $row["gambar"])) {
        ?>
                    <div class="gallery-item">
                        <img src="img/<?= htmlspecialchars($row["gambar"]); ?>" alt="<?= htmlspecialchars($row[""]); ?>">
                        <p><strong><?= htmlspecialchars($row[""]); ?></strong></p>
                        <p><?= htmlspecialchars($row["deskripsi"]); ?></p>
                    </div>
        <?php
                }
            }
        } else {
            echo "<p style='text-align:center;'>No gallery items available.</p>";
        }
        ?>
    </div>

    <!-- Pagination -->
    <?php
    $sql1 = "SELECT COUNT(*) AS total FROM gallery";
    $hasil1 = $conn->query($sql1);
    $total_records = $hasil1->fetch_assoc()['total'];
    $jumlah_page = ceil($total_records / $limit);

    if ($jumlah_page > 1) {
        echo '<nav class="pagination">';
        for ($i = 1; $i <= $jumlah_page; $i++) {
            $active = ($i == $hlm) ? 'active' : '';
            echo '<li><a href="gallery.php?hlm=' . $i . '" class="' . $active . '">' . $i . '</a></li>';
        }
        echo '</nav>';
    }
    ?>
</body>
</html>
