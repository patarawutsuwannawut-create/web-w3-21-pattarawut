<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มเมนู</title>
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
            max-width: 620px;
            margin: 40px auto 34px;
            text-align: center;
            padding: 0 20px;
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
            max-width: 500px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 12px 35px rgba(43, 26, 18, 0.08);
            border: 1px solid rgba(227, 211, 184, 0.5);
            padding: 36px 40px;
        }

        .form-card form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .field label {
            display: block;
            font-weight: 600;
            font-size: 14px;
            color: #4a3e3d;
            margin-bottom: 8px;
        }

        .field input[type="text"],
        .field select {
            width: 100%;
            font-family: "Kanit", sans-serif;
            font-size: 15px;
            padding: 12px 16px;
            border: 1.5px solid #e2d8ce;
            border-radius: 12px;
            background: #fcfbf9;
            color: #2b1a12;
            outline: none;
            transition: all 0.2s ease;
        }

        .field input[type="text"]:focus,
        .field select:focus {
            border-color: #d1282e;
            background: #ffffff;
            box-shadow: 0 0 0 4px rgba(209, 40, 46, 0.1);
        }

        .form-card button {
            font-family: "Kanit", sans-serif;
            font-weight: 600;
            font-size: 16px;
            letter-spacing: 0.5px;
            color: #ffffff;
            background: linear-gradient(135deg, #d1282e 0%, #b01c22 100%);
            border: none;
            border-radius: 30px;
            padding: 14px 0;
            margin-top: 10px;
            cursor: pointer;
            box-shadow: 0 6px 18px rgba(209, 40, 46, 0.3);
            transition: all 0.25s ease;
        }

        .form-card button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(209, 40, 46, 0.4);
        }

        .form-card button:active {
            transform: translateY(1px);
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            font-weight: 500;
            color: #7a6b68;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .back-link:hover {
            color: #d1282e;
            text-decoration: underline;
        }

        /* ===== Footer ===== */
        .site-footer {
            margin-top: 80px;
            background: #1a1918;
            color: #d5cecb;
            padding: 60px 20px 30px;
            border-top: 4px solid #d1282e;
        }

        .site-footer .footer-grid {
            max-width: 1150px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
        }

        .site-footer h3 {
            font-family: "Kanit", sans-serif;
            font-weight: 600;
            font-size: 16px;
            color: #ffffff;
            margin: 0 0 16px;
        }

        .site-footer p,
        .site-footer a {
            font-size: 13.5px;
            color: #a89f9c;
            line-height: 1.9;
            margin: 0;
            text-decoration: none;
            display: block;
            transition: color 0.2s ease;
        }

        .site-footer a:hover {
            color: #ffffff;
        }

        .site-footer .brand-name {
            font-family: "Bebas Neue", sans-serif;
            font-size: 26px;
            letter-spacing: 1px;
            color: #ffffff;
            margin: 0 0 10px;
        }

        .site-footer .contact-line {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #a89f9c;
            font-size: 13.5px;
        }

        .site-footer .contact-line::before {
            content: "📞";
            font-size: 12px;
        }

        .site-footer .footer-bottom {
            max-width: 1150px;
            margin: 40px auto 0;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }

        .site-footer .footer-bottom p {
            font-size: 12px;
            color: #7a726f;
        }
    </style>
</head>
<body>
    <div class="action-bar">
        <a href="index.php">หน้าหลัก</a>
        <a href="manage_menu.php">จัดการเมนู</a>
    </div>

    <div class="page-header">
        <span class="eyebrow">Order Board</span>
        <h1>เพิ่มเมนู</h1>
    </div>

    <div class="form-card">
        <form action="action/insert_menu.php" method="post">
            <div class="field">
                <label for="">รหัสเมนู</label>
                <input type="text" name="menu_id">
            </div>

            <div class="field">
                <label for="">ชื่อเมนู</label>
                <input type="text" name="menu_name">
            </div>

            <div class="field">
                <label for="">ราคา</label>
                <input type="text" name="menu_price">
            </div>

            <div class="field">
                <label for="">ภาพ</label>
                <input type="text" name="menu_image">
            </div>

            <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);

            include "action/connect.php";

            $sql = "SELECT * FROM menu_types";
            $result = mysqli_query($con, $sql);
            ?>
            <div class="field">
                <label for="">ประเถทเมนู</label>
                <select name="type_id">
                    <?php
                        foreach($result as $type){
                            ?>
                                <option value="<?= $type["type_id"] ?>"> <?= $type["type_name"] ?> </option>
                            <?php
                        }
                    ?>
                </select>
            </div>

            <button>บันทึก</button>
        </form>
        <a href="index.php" class="back-link">กลับหน้าหลัก</a>
    </div>

    <footer class="site-footer">
        <div class="footer-grid">
            <div>
                <p class="brand-name">ภัทรวุฒิ สุวรรนาวุธ</p>
                <p style="margin-bottom:16px;">สั่งง่าย จัดคิวไว ครบทุกเมนู<br>เปิดบริการทุกวัน</p>
                <h3 style="margin-bottom:6px;">ติดต่อเรา</h3>
                <p class="contact-line">099-999-2222</p>
                <p>เวลา 11:00 - 21:00 น.</p>
            </div>

            <div>
                <h3>วิธีสั่งอาหาร</h3>
                <a href="#">วิธีสมัครสมาชิก</a>
                <a href="#">วิธีเลือกเมนู</a>
                <a href="#">วิธีชำระเงิน</a>
                <a href="#">การจัดคิวและรับออเดอร์</a>
                <a href="#">คำถามที่พบบ่อย</a>
            </div>

            <div>
                <h3>เกี่ยวกับร้าน</h3>
                <a href="#">เกี่ยวกับเรา</a>
                <a href="#">ร่วมงานกับเรา</a>
                <a href="#">ที่ตั้งร้าน</a>
            </div>

            <div>
                <h3>ข้อตกลงและเงื่อนไข</h3>
                <a href="#">เงื่อนไขการใช้งาน</a>
                <a href="#">นโยบายความเป็นส่วนตัว</a>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2569 ภัทรวุฒิ สุวรรนาวุธ. สงวนลิขสิทธิ์.</p>
        </div>
    </footer>
</body>
</html>