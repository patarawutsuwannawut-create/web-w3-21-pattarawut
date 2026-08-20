<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>แก้ไขเมนู</title>
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
        max-width: 700px;
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

    /* ===== Form Card ===== */
    .form-card {
        max-width: 580px;
        margin: 0 auto 80px;
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 12px 35px rgba(43, 26, 18, 0.08);
        border: 1px solid rgba(227, 211, 184, 0.5);
        padding: 40px;
    }

    .form-group {
        margin-bottom: 22px;
    }

    .form-group:last-of-type {
        margin-bottom: 0;
    }

    .form-group label {
        display: block;
        font-family: "Kanit", sans-serif;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.3px;
        color: #d1282e;
        margin-bottom: 8px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group select {
        width: 100%;
        font-family: "Kanit", sans-serif;
        font-size: 15px;
        color: #2b1a12;
        background: #fcfbf9;
        border: 1.5px solid #e2d8ce;
        border-radius: 12px;
        padding: 12px 16px;
        outline: none;
        transition: all 0.2s ease;
    }

    .form-group input[type="text"]:focus,
    .form-group input[type="number"]:focus,
    .form-group select:focus {
        border-color: #d1282e;
        background: #ffffff;
        box-shadow: 0 0 0 4px rgba(209, 40, 46, 0.1);
    }

    .form-group input[readonly] {
        background: #f2ede7;
        color: #8c7f75;
        cursor: not-allowed;
        border-color: #e2d8ce;
    }

    .form-group select {
        appearance: none;
        background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='14' height='9' viewBox='0 0 14 9'><path d='M1 1l6 6 6-6' stroke='%23d1282e' stroke-width='2' fill='none' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round'/></svg>");
        background-repeat: no-repeat;
        background-position: right 16px center;
        padding-right: 42px;
    }

    .image-preview {
        margin-top: 12px;
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 10px;
        background: #fdfbf7;
        border: 1px dashed #e2d8ce;
        border-radius: 10px;
    }

    .image-preview img {
        width: 72px;
        height: 56px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .image-preview span {
        font-size: 13px;
        color: #8c7f75;
    }

    .form-actions {
        display: flex;
        gap: 14px;
        margin-top: 32px;
        padding-top: 24px;
        border-top: 1px dashed #e2d8ce;
    }

    .btn {
        font-family: "Kanit", sans-serif;
        font-weight: 600;
        font-size: 15px;
        letter-spacing: 0.3px;
        text-decoration: none;
        text-align: center;
        border: none;
        border-radius: 30px;
        padding: 12px 30px;
        cursor: pointer;
        transition: all 0.25s ease;
        flex: 1;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .btn:active {
        transform: translateY(1px);
    }

    .btn-save {
        color: #ffffff;
        background: linear-gradient(135deg, #109848 0%, #0c7537 100%);
        box-shadow: 0 4px 14px rgba(16, 152, 72, 0.25);
    }

    .btn-save:hover {
        box-shadow: 0 6px 18px rgba(16, 152, 72, 0.35);
        transform: translateY(-2px);
    }

    .btn-cancel {
        color: #d1282e;
        background: #fff0f0;
        border: 1px solid #f8c8c8;
    }

    .btn-cancel:hover {
        background: #ffe3e3;
        transform: translateY(-2px);
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
        .form-card {
            padding: 28px 20px;
        }
    }
</style>
</head>
<body>

<?php
    $id = $_GET['id'];

    include "action/connect.php";

    $sql = "SELECT * FROM menus WHERE menu_id = '$id' ";

    $result = mysqli_query($con, $sql);

    $menu = mysqli_fetch_assoc($result);
?>

<div class="action-bar">
    <a href="index.php">หน้าหลัก</a>
    <a href="add_menu.php">เพิ่มเมนู</a>
</div>

<div class="page-content">

<div class="page-header">
    <span class=>Order Board</span>
    <h1>แก้ไขเมนู</h1>
</div>

<div class="form-card">
<form action="action/update_menu.php" method="post">

    <div class="form-group">
        <label for="menu_id">รหัสเมนู</label>
        <input type="text" id="menu_id" name="menu_id" value="<?= $menu['menu_id'] ?>" readonly>
    </div>

    <div class="form-group">
        <label for="menu_name">ชื่อเมนู</label>
        <input type="text" id="menu_name" name="menu_name" value="<?= $menu['menu_name'] ?>">
    </div>

    <div class="form-group">
        <label for="menu_price">ราคา</label>
        <input type="text" id="menu_price" name="menu_price" value="<?= $menu['menu_price'] ?>">
    </div>

    <div class="form-group">
        <label for="menu_image">ภาพ</label>
        <input type="text" id="menu_image" name="menu_image" value="<?= $menu['menu_image'] ?>">
        <?php if (!empty($menu['menu_image'])) { ?>
        <div class="image-preview">
            <img src="<?= $menu['menu_image'] ?>" alt="">
            <span>ตัวอย่างภาพปัจจุบัน</span>
        </div>
        <?php } ?>
    </div>

    <?php
        include "action/connect.php";

        $sql = "SELECT * FROM menu_types";

        $result = mysqli_query($con, $sql);
    ?>

    <div class="form-group">
        <label for="type_id">ประเภทเมนู</label>
        <select id="type_id" name="type_id">
            <?php
                foreach($result as $type){
                    ?>
                        <option value="<?= $type["type_id"] ?>" <?= $type["type_id"] == $menu["type_id"] ? "selected" : '' ?>>
                            <?= $type["type_name"] ?>
                        </option>
                    <?php
                }
            ?>
        </select>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-save">บันทึก</button>
        <a href="index.php" class="btn btn-cancel">ยกเลิก</a>
    </div>

</form>
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