<?php if ($results->rowCount() > 0): ?>
    <div class="row">
        <?php while ($row = $results->fetch(PDO::FETCH_ASSOC)): ?>
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($row['name']) ?></h5>
                        <p class="card-text">หมวดหมู่: <?= htmlspecialchars($row['category']) ?></p>
                        <p class="card-text">ราคา: <?= htmlspecialchars($row['price']) ?> บาท</p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <p class="text-danger">ไม่พบสินค้าที่ค้นหา</p>
<?php endif; ?>
