<?php
// 商品の定義
$product_name = "ノートパソコン";
$price = 80000;
$quantity = 2;
$tax_rate = 0.1;
// 計算処理
$subtotal = $price * $quantity;
$tax_amount = $subtotal * $tax_rate;
$total =$subtotal + $tax_amount;
// 結果の表示
echo "商品名: " . $product_name . "<br>";
echo "単価: " . $price . "円<br>";
echo "数量 " . $quantity . "個<br>";
echo "小計" . $subtotal . "円<br>";
echo "消費税(" . ($tax_rate * 100) . "%): " . $tax_amount . "円<br>";
echo "<strong>合計金額: " . $total . "円</strong><br>";
$original_amount = 5000;
$discount_rate = 0.20;
$discount_amount = $original_price * $discount_rate;
$final_price = $original_price - $discount_amount;
$number = 7;
if($number % 2 == 0) {
    echo "{$number}は偶数です";
} else {
    echo "{$number}は奇数です";
}
$age = 25;
$is_member = true;
$is_student = false;

//条件1: 18歳以上かつ会員
if($age >= 18 && $is_member) {
   echo "割引が適用されます<br>";
}

// 条件2: 65歳以上または学生
if ($age >== 65 || $is_student) {
    echo "シニア・学生割引が適用されます<br>";
}
$score = 100;
echo "初期スコア: {$score}点<br>";
$score += 50; 　　　// ボーナスステージクリア
echo "ボーナス後: {$score}点<br>";
$score -= 30; 　　　//ダメージ
echo "ダメージ後: {$score}点<br>";
$score *= 2;       //2倍アイテム
echo "最終スコア: {$score}点<br>";
?>