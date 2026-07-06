<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เมนูอาหารทั้งหมด</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen p-6 md:p-12">
    
    <?php
        // เปิดแสดง Error เพื่อความสะดวกในการตรวจเช็ค
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        include "action/connect.php";

        $sql = "SELECT * FROM menus";
        
        
        $result = mysqli_query($con, $sql);
    ?>

    <div class="max-w-6xl mx-auto">
        <div class="mb-8 text-center md:text-left">
            <h1 class="text-3xl font-bold text-gray-800">รายการเมนูอาหาร</h1>
            <p class="text-gray-500 mt-2">จัดการและดูรายการอาหารทั้งหมดในระบบ</p>
        </div>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-100">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-white text-sm uppercase tracking-wider">
                            <th class="py-4 px-6 font-medium">รหัสเมนู</th>
                            <th class="py-4 px-6 font-medium">ภาพอาหาร</th>
                            <th class="py-4 px-6 font-medium">ชื่อเมนู</th>
                            <th class="py-4 px-6 font-medium">ประเภท</th> 
                            <th class="py-4 px-6 font-medium text-right">ราคา</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-gray-700">
                        <?php
                            if (mysqli_num_rows($result) > 0) {
                                foreach($result as $menu){
                        ?>
                                <tr class="hover:bg-gray-50 transition-colors duration-150">
                                    <td class="py-4 px-6 font-semibold text-gray-500">
                                        รหัส<?= $menu["menu_id"] ?>
                                    </td>
                                    <td class="py-4 px-6">
                                        <div class="w-24 h-24 rounded-lg overflow-hidden border border-gray-200 bg-gray-100 shadow-sm">
                                            <img 
                                                src="<?= $menu["menu_image"] ?>" 
                                                alt="<?= $menu["menu_name"] ?>"
                                                class="w-full h-full object-cover"
                                                onerror="this.src='https://placehold.co/100x100?text=No+Image'"
                                            >
                                        </div>
                                    </td>
                                    <td class="py-4 px-6 font-medium text-gray-900">
                                        <?= $menu["menu_name"] ?>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100">
                                            ประเภท: <?= $menu["type_id"] ?>
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right font-bold text-emerald-600 text-lg">
                                        ฿<?= number_format($menu["menu_price"], 2) ?>
                                    </td>
                                </tr>
                        <?php
                                }
                            } else {
                        ?>
                            <tr>
                                <td colspan="5" class="py-12 text-center text-gray-400">
                                    ยังไม่มีข้อมูลเมนูอาหารในระบบ
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>