<?php
function processForm() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าชื่อลูกค้าและแบรนด์สินค้าจากฟอร์ม
        $customerName = $_POST["customerName"];
        $selectedBrand = $_POST["brand"];

        // คำนวณความยาวของชื่อลูกค้า
        $nameLength = strlen($customerName);

        // สร้างตัวแปรเก็บข้อมูลคลังสินค้า (เป็นตัวอย่าง)
        $inventory = array(
            "brand1" => array("product1", "product2", "product3"),
            "brand2" => array("product4", "product5")
            // เพิ่มข้อมูลตามความต้องการ
        );

        // ตรวจสอบว่ามีคลังสินค้าสำหรับแบรนด์ที่เลือกหรือไม่
        if (array_key_exists($selectedBrand, $inventory)) {
            $numProducts = count($inventory[$selectedBrand]);
            $productsList = implode(", ", $inventory[$selectedBrand]);

            // แสดงผลลัพธ์
            echo "<h3>ผลลัพธ์</h3>";
            echo "ชื่อลูกค้า: $customerName<br>";
            echo "ความยาวของชื่อ: $nameLength ตัวอักษร<br>";
            echo "แบรนด์ที่เลือก: $selectedBrand<br>";
            echo "จำนวนสินค้าในคลัง: $numProducts ชิ้น<br>";
            echo "รายการสินค้า: $productsList";
        } else {
            echo "<h3>ผลลัพธ์</h3>";
            echo "ไม่พบข้อมูลสำหรับแบรนด์ที่เลือก";
        }
    }
}

// Call the function
processForm();
?>
