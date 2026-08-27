<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>จัดการเมนู</title>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: "Kanit", sans-serif;
        color: #2b2d42;
        background-color: #f8f6f0;
        background-image: radial-gradient(#e2d9cc 1.2px, transparent 1.2px);
        background-size: 20px 20px;
        min-height: 100vh;
    }

    .page-content {
        padding: 0 20px;
    }

    /* ===== Action Bar ===== */
    .action-bar {
        width: 100%;
        display: flex;
        justify-content: center;
        gap: 20px;
        background: linear-gradient(135deg, #d1282e 0%, #9e1a1f 100%);
        padding: 16px 30px;
        box-shadow: 0 4px 20px rgba(209, 40, 46, 0.25);
        position: sticky;
        top: 0;
        z-index: 100;
    }

    .action-bar a {
        font-family: "Kanit", sans-serif;
        font-weight: 500;
        font-size: 15px;
        color: #ffffff;
        text-decoration: none;
        padding: 8px 20px;
        border-radius: 30px;
        background: rgba(255, 255, 255, 0.15);
        transition: all 0.25s ease;
        backdrop-filter: blur(4px);
    }

    .action-bar a:hover {
        background: #ffffff;
        color: #d1282e;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .action-bar a:active {
        transform: translateY(0);
    }

    /* ===== Page Header ===== */
    .page-header {
        max-width: 1150px;
        margin: 40px auto 34px;
        text-align: center;
    }

    .page-header .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-family: "Kanit", sans-serif;
        font-weight: 600;
        font-size: 13px;
        letter-spacing: 2px;
        color: #d1282e;
        text-transform: uppercase;
        padding: 6px 18px;
        border: 1.5px solid #d1282e;
        border-radius: 50px;
        background: #ffffff;
        box-shadow: 0 2px 8px rgba(209, 40, 46, 0.08);
    }

    .page-header .eyebrow::before,
    .page-header .eyebrow::after {
        content: "🌶";
        font-size: 12px;
    }

    .page-header h1 {
        font-family: "Bebas Neue", "Kanit", sans-serif;
        font-size: clamp(42px, 6vw, 64px);
        line-height: 1;
        margin: 16px 0 0;
        color: #1a1a1a;
        letter-spacing: 1.5px;
        text-shadow: 2px 2px 0px rgba(209, 40, 46, 0.15);
    }

    /* ===== Table Card ===== */
    .table-card {
        max-width: 1150px;
        margin: 0 auto 80px;
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 12px 35px rgba(43, 26, 18, 0.08);
        border: 1px solid rgba(227, 211, 184, 0.5);
        padding: 24px;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        font-size: 14.5px;
    }

    thead th {
        font-family: "Kanit", sans-serif;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.5px;
        color: #ffffff;
        background: #d1282e;
        text-align: left;
        padding: 14px 18px;
    }

    thead th:first-child {
        border-radius: 12px 0 0 12px;
    }

    thead th:last-child {
        border-radius: 0 12px 12px 0;
    }

    tbody tr {
        transition: background 0.2s ease;
    }

    tbody tr td {
        border-bottom: 1px dashed #e2d8ce;
    }

    tbody tr:last-child td {
        border-bottom: none;
    }

    tbody tr:hover {
        background: #fff8f8;
    }

    td {
        padding: 14px 18px;
        vertical-align: middle;
    }

    td img {
        width: 84px;
        height: 62px;
        object-fit: cover;
        border-radius: 10px;
        display: block;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .price-cell {
        font-family: "Bebas Neue", sans-serif;
        font-size: 22px;
        color: #109848;
        letter-spacing: 0.5px;
    }

    .price-cell::before {
        content: "฿";
        font-size: 14px;
        margin-right: 2px;
        opacity: 0.8;
    }

    .type-tag {
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 0.5px;
        color: #d1282e;
        background: #fff0f0;
        border: 1px solid #f8c8c8;
        padding: 5px 12px;
        border-radius: 20px;
        white-space: nowrap;
    }

    .row-actions {
        display: flex;
        gap: 8px;
        white-space: nowrap;
    }

    .row-actions a {
        font-size: 12.5px;
        font-weight: 600;
        text-decoration: none;
        padding: 7px 16px;
        border-radius: 20px;
        transition: all 0.2s ease;
    }

    .row-actions a:active {
        transform: translateY(1px);
    }

    .edit-btn {
        color: #ffffff;
        background: #109848;
        box-shadow: 0 2px 8px rgba(16, 152, 72, 0.2);
    }

    .edit-btn:hover {
        background: #0c7537;
        box-shadow: 0 4px 12px rgba(16, 152, 72, 0.3);
    }

    .delete-btn {
        color: #ffffff;
        background: #d1282e;
        box-shadow: 0 2px 8px rgba(209, 40, 46, 0.2);
    }

    .delete-btn:hover {
        background: #b01c22;
        box-shadow: 0 4px 12px rgba(209, 40, 46, 0.3);
    }

    /* ===== Footer ===== */
    .site-footer {
        width: 100%;
        border-top: 4px solid #d1282e;
        background: #1a1918;
        color: #d5cecb;
        padding: 60px 20px 30px;
    }

    .footer-inner {
        max-width: 1150px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1.4fr 1fr 1fr 1fr;
        gap: 40px;
    }

    .footer-inner h3 {
        font-family: "Kanit", sans-serif;
        font-size: 18px;
        font-weight: 600;
        color: #ffffff;
        margin: 0 0 12px;
    }

    .footer-inner h4 {
        font-family: "Kanit", sans-serif;
        font-size: 15px;
        font-weight: 600;
        color: #ffffff;
        margin: 0 0 16px;
    }

    .footer-about p {
        font-size: 13.5px;
        line-height: 1.8;
        color: #a89f9c;
        margin: 0;
    }

    .footer-contact {
        margin-top: 18px;
    }

    .footer-contact h4 {
        margin-bottom: 8px;
    }

    .footer-contact p {
        font-size: 13.5px;
        line-height: 1.8;
        color: #a89f9c;
        margin: 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .footer-links ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .footer-links a {
        font-size: 13.5px;
        color: #a89f9c;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .footer-links a:hover {
        color: #ffffff;
    }

    .footer-bottom {
        max-width: 1150px;
        margin: 40px auto 0;
        padding-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        text-align: center;
    }

    .footer-bottom p {
        font-size: 12px;
        color: #7a726f;
        margin: 0;
    }

    @media (max-width: 800px) {
        .footer-inner {
            grid-template-columns: 1fr 1fr;
        }
    }

    @media (max-width: 500px) {
        .footer-inner {
            grid-template-columns: 1fr;
        }
    }
</style>
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include "action/connect.php";

$sql = "SELECT * FROM menus";
$result = mysqli_query($con, $sql);
?>

<div class="action-bar">
    <a href="index.php">หน้าหลัก</a>
    <a href="add_menu.php">เพิ่มเมนู</a>
</div>

<div class="page-content">

<div class="page-header">
    <span class="eyebrow">Order Board</span>
    <h1>จัดการเมนู</h1>
</div>

<div class="table-card">
<table>
<thead>
<tr>
    <th>รหัสเมนู</th>
    <th>ชื่อเมนู</th>
    <th>ราคา</th>
    <th>ภาพ</th>
    <th>ประเภท</th>
    <th>จัดการ</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $menu){
?>
<tr>
<td>#<?= $menu["menu_id"] ?></td>
<td><?= $menu["menu_name"] ?></td>
<td class="price-cell"><?= $menu["menu_price"] ?></td>
<td>
<img
src="<?= $menu["menu_image"] ?>"
alt=""
>
</td>
<td><span class="type-tag">ประเภท <?= $menu["type_id"] ?></span></td>
<td>
    <div class="row-actions">
        <a class="edit-btn" href="edit_menu.php?id=<?= $menu["menu_id"] ?>">แก้ไข</a>
        <a class="delete-btn" href="action/delete_menu.php?id=<?= $menu["menu_id"] ?>">ลบ</a>
    </div>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>

</div>

<footer class="site-footer">
    <div class="footer-inner">
        <div class="footer-about">
            <h3>ภัทรวุฒิ สุวรรนาวุธ</h3>
            <p>
                สั่งง่าย จัดคิวไว ครบทุกเมนู<br>
                เปิดบริการทุกวัน
            </p>
            <div class="footer-contact">
                <h4>ติดต่อเรา</h4>
                <p>📞 099-999-2222</p>
                <p>เวลา 11:00 - 21:00 น.</p>
            </div>
        </div>

        <div class="footer-links">
            <h4>วิธีสั่งอาหาร</h4>
            <ul>
                <li><a href="#">วิธีสมัครสมาชิก</a></li>
                <li><a href="#">วิธีเลือกเมนู</a></li>
                <li><a href="#">วิธีชำระเงิน</a></li>
                <li><a href="#">การจัดคิวและรับออเดอร์</a></li>
                <li><a href="#">คำถามที่พบบ่อย</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <h4>เกี่ยวกับร้าน</h4>
            <ul>
                <li><a href="#">เกี่ยวกับเรา</a></li>
                <li><a href="#">ร่วมงานกับเรา</a></li>
                <li><a href="#">ที่ตั้งร้าน</a></li>
            </ul>
        </div>

        <div class="footer-links">
            <h4>ข้อตกลงและเงื่อนไข</h4>
            <ul>
                <li><a href="#">เงื่อนไขการใช้งาน</a></li>
                <li><a href="#">นโยบายความเป็นส่วนตัว</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2569 ภัทรวุฒิ สุวรรนาวุธ. สงวนลิขสิทธิ์.</p>
    </div>
</footer>

</body>
</html>