<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>成績判定システム</h1>
<?php
//学生データの定義
foreach ($students as $student) {
    echo $student["name"];
    echo $student["score"];
    }   
if ($score >= 90) {
    $grade = "A";
    $status = "優秀";
 
} elseif ($score >= 80){
    $grade = "B";
    $status = "良好";
} else {
    $grade = "F";
    $status = "不合格";
}
$pass_count =0;
$fail_count =0;

foreach ($student as $student) {
    if ($student["score"] >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }
}
$total_score = 0;
foreach ($students as $student) {
    $total_score += $student["score"];
}
$average = $total_score / count($students);
</body>
</html>