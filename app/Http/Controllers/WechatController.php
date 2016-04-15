<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Log;
use Wechat;
use EasyWeChat\Foundation\Application;
class WechatController extends Controller
{

    /**
     * 处理微信的请求消息
     *
     * @return string
     */
    public function serve()
    {
      Log::info('request arrived.');

      $wechat = app('wechat');
      $wechat->server->setMessageHandler(function($message){
          return "欢迎关注 BDBELOVED";
      });
      Log::info('return response.');
      return $wechat->server->serve();
    }
}
