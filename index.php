<?php
$bots = ['googlebot', 'facebookexternalhit', 'taboola', 'bingbot', 'outbrain', 'yandex'];
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
$isBot = false;

foreach ($bots as $bot) {
    if (strpos($userAgent, $bot) !== false) {
        $isBot = true;
        break;
    }
}

if ($isBot) {
    header("Location: /safe/index.html");
    exit;
} else {
    header("Location: /real/index.html");
    exit;
}
?>
