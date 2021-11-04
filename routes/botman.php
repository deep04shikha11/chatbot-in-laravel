<?php

// use App\Conversations\ButtonConversation;
use App\Conversations\ButtonConversation;
use App\Http\Controllers\BotmanController;

$botman = resolve('botman');

$botman->hears('conversation', function ($bot) {
    $bot->startConversation(new ButtonConversation());
});
