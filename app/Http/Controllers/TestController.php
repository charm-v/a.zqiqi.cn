<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TestController
{
    public function index(){
        $arr = [
            [
              'content' => 'bsj',
              'bigtxt'  => '绑定手机号，完成任务奖励50星币',
              'smtxt'  => '绑定成功，星币立刻到账',
              'rwjc'  => 50,
              'state'  => 1
            ],
            [
                'content' => 'fx',
                'bigtxt'  => '分享二维码，完成任务奖励20星币',
                'smtxt'  => '绑定成功，星币立刻到账',
                'rwjc'  => 20,
                'state'  => 1
            ],
            [
                'content' => 'yq',
                'bigtxt'  => '邀请好友，完成任务奖励10星币',
                'smtxt'  => '绑定成功，星币立刻到账',
                'rwjc'  => 10,
                'state'  => 0
            ]
        ];
        echo json_encode($arr);
    }

    public function yemian(){
        return view('welcome');
    }
}