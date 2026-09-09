<?php
// 이메일을 받을 주소를 설정합니다.
$to = "bestlang@langlympics.org";

// 폼에서 전송된 데이터를 변수에 저장합니다.
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// 이메일 제목을 설정합니다.
$subject = "Langlympics 문의 from " . $name;

// 이메일 내용을 구성합니다.
$email_content = "이름: " . $name . "\n";
$email_content .= "이메일: " . $email . "\n";
$email_content .= "메시지:\n" . $message . "\n";

// 이메일 헤더를 설정합니다. 발신자 주소를 포함하여 회신할 수 있도록 합니다.
$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// mail() 함수를 사용하여 이메일을 보냅니다.
if (mail($to, $subject, $email_content, $headers)) {
    // 이메일 전송 성공 시
    echo "<h1>문의 메시지가 성공적으로 전송되었습니다. 감사합니다!</h1>";
} else {
    // 이메일 전송 실패 시
    echo "<h1>죄송합니다. 메시지 전송에 실패했습니다.</h1>";
}
?>
