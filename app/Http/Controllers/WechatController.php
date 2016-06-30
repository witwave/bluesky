<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Log;
use Config;
use Wechat;
use EasyWeChat\Foundation\Application;
use EasyWeChat\Payment\Order;
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


    public function prepay(){

      if (!isset($_SERVER['SERVER_ADDR'])){
        $_SERVER['SERVER_ADDR']=$_SERVER['REMOTE_ADDR'];
      }
      $attributes = [
          'body'             => 'iPad mini 16G 白色',
          'detail'           => 'iPad mini 16G 白色',
          'out_trade_no'     => '1217752501201407033233368018',
          'total_fee'        => 1,
          'trade_type'       =>'JSAPI',
          'spbill_create_ip' =>'121.43.123.45',
          'openid'           =>'',
          'notify_url'       => 'http://bdbeloved.com/wechat/pay/notify', // 支付结果通知网址，如果不设置则会使用配置里的默认地址
      ];
      $order = new Order($attributes);

        $options=Config::get('wechat');
        $app = new Application($options);

        $payment = $app->payment;
        $result = $payment->prepare($order);
        echo '生成预付订单信息';
        Log::info($result);
        if ($result->return_code == 'SUCCESS' && $result->result_code == 'SUCCESS'){
          $prepayId = $result->prepay_id;
        }
        return  $result;
    }

    public function notify(){
        Log::info('wechat pay request arrived.');
        $response = $app->payment->handleNotify(function($notify, $successful){
        // 使用通知里的 "微信支付订单号" 或者 "商户订单号" 去自己的数据库找到订单
        $order = 查询订单($notify->transaction_id);

        if (!$order) { // 如果订单不存在
            return 'Order not exist.'; // 告诉微信，我已经处理完了，订单没找到，别再通知我了
        }

        // 如果订单存在
        // 检查订单是否已经更新过支付状态
        if ($order->paid_at) { // 假设订单字段“支付时间”不为空代表已经支付
            return true; // 已经支付成功了就不再更新了
        }

        // 用户是否支付成功
        if ($successful) {
            // 不是已经支付状态则修改为已经支付状态
            $order->paid_at = time(); // 更新支付时间为当前时间
            $order->status = 'paid';
        } else { // 用户支付失败
            $order->status = 'paid_fail';
        }

        $order->save(); // 保存订单

        return true; // 返回处理完成
    });

    return $response;


    }
}
