
// Câu 8: Viết pt giải bậc 2 ax2 + bx +c 
<?php
function giai_pt_bac_2($a, $b, $c) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            return "Phương trình có 1 nghiệm: x = " . (-$c / $b);
        }
    }
    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        return "Phương trình vô nghiệm";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có 2 nghiệm phân biệt: x1 = $x1, x2 = $x2";
    }
}
echo giai_pt_bac_2(1, -3, 2); // x^2 - 3x + 2 = 0
?>


// Câu 9: Viết function in ra hình chữ nhật 5X7 sử dụng dấu *
<?php
function ve_hinh_chu_nhat($chieu_rong, $chieu_cao) {
    echo str_repeat("*", $chieu_rong) . "<br>";
    for ($i = 0; $i < $chieu_cao - 2; $i++) {
        echo "*" . str_repeat("&nbsp;", $chieu_rong + 1) . "*" . "<br>";
    }
    echo str_repeat("*", $chieu_rong) . "<br>";
}
ve_hinh_chu_nhat (5,7);
?>
// Câu 10: Viết function tính trung bình cộng của mảng
<?php
function tinh_trung_binh($arr) {
    if (count($arr) == 0) {
        return null; 
    }
    $tong = array_sum($arr); 
    $so_phan_tu = count($arr); 
    return $tong / $so_phan_tu;
}
$mang = [2, 4, 6, 8, 10];
echo "Trung bình cộng = " . tinh_trung_binh($mang);
?>
