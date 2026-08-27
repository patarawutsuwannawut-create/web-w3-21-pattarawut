<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        /* ===== Board Header ===== */
        .board-header {
            max-width: 1150px;
            margin: 40px auto 40px;
            text-align: center;
            padding: 0 20px;
        }

        .board-header .eyebrow {
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

        .board-header .eyebrow::before,
        .board-header .eyebrow::after {
            content: "🌶";
            font-size: 12px;
        }

        .board-header h1 {
            font-family: "Bebas Neue", "Kanit", sans-serif;
            font-size: clamp(48px, 8vw, 84px);
            line-height: 0.95;
            margin: 16px 0 10px;
            color: #1a1a1a;
            letter-spacing: 2px;
            text-shadow: 3px 3px 0px rgba(209, 40, 46, 0.15);
        }

        .board-header p {
            font-size: 16px;
            color: #6a5e59;
            margin: 0;
            font-weight: 400;
        }

        /* ===== Grid of Cards ===== */
        .grid {
            max-width: 1150px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }

        .ticket {
            position: relative;
            background: #ffffff;
            border-radius: 18px;
            box-shadow: 0 10px 28px rgba(43, 26, 18, 0.07);
            border: 1px solid rgba(227, 211, 184, 0.4);
            transition: all 0.3s ease;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .ticket:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 36px rgba(209, 40, 46, 0.15);
        }

        .ticket-photo {
            position: relative;
            width: 100%;
            aspect-ratio: 4 / 3;
            background: #f3ece1;
            overflow: hidden;
        }

        .ticket-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .ticket:hover .ticket-photo img {
            transform: scale(1.08);
        }

        .ticket-no {
            position: absolute;
            top: 12px;
            left: 12px;
            background: rgba(209, 40, 46, 0.9);
            color: #ffffff;
            font-family: "Bebas Neue", sans-serif;
            font-size: 15px;
            padding: 4px 10px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(4px);
            z-index: 2;
        }

        .ticket-dashes {
            border-top: 1.5px dashed #e2d8ce;
            margin: 0 16px;
        }

        .ticket-body {
            padding: 16px 18px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
        }

        .ticket-body h2 {
            font-size: 18px;
            font-weight: 600;
            margin: 0 0 14px;
            color: #1a1a1a;
            line-height: 1.3;
            min-height: 48px;
        }

        .ticket-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
        }

        .price {
            font-family: "Bebas Neue", sans-serif;
            font-size: 28px;
            color: #109848;
            letter-spacing: 0.5px;
        }

        .price::before {
            content: "฿";
            font-size: 18px;
            margin-right: 2px;
            opacity: 0.8;
        }

        .tag {
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
        <a href="add_menu.php">เพิ่มเมนู</a>
        <a href="manage_menu.php">แก้ไขเมนู</a>
    </div>

    <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        include "action/connect.php";

        $sql = "SELECT * FROM menus";
        $result = mysqli_query($con, $sql);
    ?>

    <div class="board-header">
        <span class=>Order Board</span>
        <h1>MENU</h1>
        <p>เลือกเมนูโปรดของคุณ แล้วกินให้อร่อยที่สุดกันเลย</p>
    </div>

    <div class="grid">
    <?php
        foreach ($result as $menu) {
    ?>
        <article class="ticket">
            <div class="ticket-photo">
                <span class="ticket-no">#<?= $menu["menu_id"] ?></span>
                <img src="<?= $menu["menu_image"] ?>" alt="<?= $menu["menu_name"] ?>">
            </div>
            <div class="ticket-dashes"></div>
            <div class="ticket-body">
                <h2><?= $menu["menu_name"] ?></h2>
                <div class="ticket-footer">
                    <span class="price"><?= $menu["menu_price"] ?></span>
                    <span class="tag">ประเภท <?= $menu["type_id"] ?></span>
                </div>
            </div>

        </article>
    <?php
        }
    ?>
    </div>

    <footer class="site-footer">
        <div class="footer-grid">
            <div>
                <p class="brand-name">ภัทรวุฒิ สุวรรนาวุธ</p>
                <p style="margin-bottom:16px;">สั่งง่าย ได้ไว จุใจทุกเมนู<br>เปิดบริการทุกวัน</p>
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