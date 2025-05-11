<?php
require_once "../config/Database.php";
require_once "../classes/Product.php";

$db = new Database();
$conn = $db->connect();

$product = new Product($conn);

$search = $_GET['search'] ?? '';
$results = $product->search($search);
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ค้นหาสินค้า</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5">
        <h1 class="mb-4">ระบบค้นหาสินค้า</h1>
        <form method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="ค้นหาด้วยชื่อหรือหมวดหมู่" value="<?= htmlspecialchars($search) ?>">
                <button class="btn btn-primary">ค้นหา</button>
            </div>
        </form>

        <?php include "../view/products.php"; ?>
    </div>
</body>
</html>
