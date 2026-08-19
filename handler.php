<?php
// handler.php
require_once 'config.php';
$token = TELEGRAM_BOT_TOKEN;
$chat_id = TELEGRAM_CHAT_ID;

$user_name  = trim($_POST["username"] ?? '');
$user_phone = trim($_POST["userphone"] ?? '');

$response = ['success' => false, 'message' => 'Ошибка'];

if ($user_name === '' || $user_phone === '') {
    $response['message'] = 'Пожалуйста, заполните все поля (Имя и Телефон).';
} else {
    $telegram_result = sendToTelegram($user_name, $user_phone, $token, $chat_id);

    if ($telegram_result['ok']) {
        $response['success'] = true;
        $response['message'] = 'Спасибо за заявку! Мы свяжемся с Вами в ближайшее время.';
    } else {
        $response['message'] = 'Ошибка отправки: ' . $telegram_result['description'];
    }
}

header('Content-Type: application/json');
echo json_encode($response);
exit;

function sendToTelegram(string $name, string $phone, string $token, string $chatId): array
{

    $text = "<b>Заявка:</b>\nИмя: <b>" . htmlspecialchars($name) . "</b>\nТелефон: <b>" . htmlspecialchars($phone) . "</b>";

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage";

    $proxyIp   = PROXY_IP;
    $proxyPort = PROXY_PORT;
    $proxyAuth = PROXY_AUTH;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
        'chat_id'    => $chatId,
        'text'       => $text,
        'parse_mode' => 'HTML'
    ]));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5_HOSTNAME);
    curl_setopt($ch, CURLOPT_PROXY, $proxyIp . ':' . $proxyPort);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyAuth);

    $response = curl_exec($ch);
    $curlError = curl_error($ch);
    curl_close($ch);

    if ($curlError) {
        return ['ok' => false, 'description' => "Сетевая ошибка cURL: " . $curlError];
    }

    $decoded = json_decode($response, true);
    if (isset($decoded['ok']) && $decoded['ok'] === true) {
        return ['ok' => true, 'description' => ''];
    } else {
        $desc = $decoded['description'] ?? 'Неизвестная ошибка';
        return ['ok' => false, 'description' => $desc];
    }
}
