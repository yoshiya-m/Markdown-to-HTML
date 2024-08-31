<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POSTリクエストから値を取得
    $htmlContent = $_POST['htmlContent'] ?? '';
    // 値を表示
    // echo htmlspecialchars($Parsedown->text($inputValue));
    
    $filename = "output.html";
    header('Content-Type: text/html');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    echo $htmlContent;
}