<?php



$token = "";
$bot = new \TelegramBot\Api\Client($token);
// ������� ��� start
$bot->command('start', function ($message) use ($bot) {
    $answer = '����� ����������!';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

// ������� ��� ������
$bot->command('help', function ($message) use ($bot) {
    $answer = '�������:
/help - ����� �������';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

$bot->run();