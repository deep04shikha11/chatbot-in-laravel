<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotmanController extends Controller {
    public function chatbot() {
        $botman = app('botman');

        $botman->hears('{message}', function ($botman, $message) {

            if ($message == 'hi') {
                $this->askName($botman);
            } else {
                $botman->reply("write 'hi' for testing...");
            }
        });

        $botman->listen();
    }

    public function askName($botman) {
        $botman->ask('Hello! First, tell me your First and Last name ?', function (Answer $answer) use ($botman) {

            $name = $answer->getText();

            $botman->reply('Nice to meet you ' . $name);
        });
    }
}