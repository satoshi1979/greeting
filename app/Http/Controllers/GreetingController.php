<?php

namespace App\Http\Controllers;

use Egulias\EmailValidator\Parser\Comment;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting($msg)
    {
        switch ($msg) {
            case 'morning':
                $page_title = '朝のあいさつ';
                $greeting = 'おはようございます';
                break;
            case 'afternoon':
                $page_title = '昼のあいさつ';
                $greeting = 'こんにちわ';
                break;
            case 'evening':
                $page_title = '夕方のあいさつ';
                $greeting = 'こんばんは';
                break;
            case 'night':
                $page_title = '夜のあいさつ';
                $greeting = 'おやすみ';
                break;
            case 'random':
                $page_title = 'ランダムなメッセージ';
                $set_of_greetings = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
                $greeting = $set_of_greetings[rand(0, 3)];
                break;
            default:
                $page_title = 'put morning,afternoon,evening,night or random';
                $greeting = 'ここにあいさつが入ります。';
        }


        return view(
            'comments/greeting',
            ['page_title' => $page_title, 'greeting' => $greeting]
        );
    }
}
