<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;

class ButtonConversation extends Conversation
{

    public function run()
    {
        $question = Question::create("Are you looking for some help ? ")
            ->addButtons([
                Button::create("yes")->value('yes'),
                Button::create("no")->value('no'),
            ]);

        $this->ask($question, function ($answer) {
            $this->say('You Selected '.$answer->getValue());
        });
    }
}
