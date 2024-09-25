<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $question = htmlspecialchars($_POST['question']);

    // Lưu câu hỏi vào file hoặc cơ sở dữ liệu
    $file = fopen("questions.txt", "a");
    fwrite($file, "Tên: $name\nCâu hỏi: $question\n\n");
    fclose($file);

    // Thông báo sau khi gửi thành công
    echo "Cảm ơn bạn đã gửi câu hỏi! <a href='main.html'>Quay lại trang chủ</a>";
}
?>
