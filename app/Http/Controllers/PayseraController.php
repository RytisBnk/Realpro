<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Order;

class PayseraController extends Controller
{
    public function redirect()
    {
        $config = config('services.paysera');
        $params = [
            'project_id' => $config['project_id'],
            'order_id' => session('orderId'),
            'accepturl' => $config['accepturl'],
            'cancelurl' => $config['cancelurl'],
            'callbackurl' => $config['callbackurl'],
            'version' => $config['version'],
            'test' => $config['test'],
            'p_email' => User::find(Auth::id())->email,
        ];

        $httpQuery = http_build_query($params);
        $httpQuery = base64_encode($httpQuery);
        $data = str_replace('/', '_', str_replace('+', '-', $httpQuery));
        $sign = md5($data . $config['password']);

        return redirect('https://www.paysera.com/pay/' . '?data=' . $data . '&sign=' . $sign);
    }

    public function callback(Request $request)
    {
        $sign = config('services.paysera.password');
        $data = $request->data;
        $ssl = $request->ssl;
        if (md5($data . $sign) == $ssl)
        {
            $params = array();
            parse_str(base64_decode(strtr($request->data, array('-' => '+', '_' => '/'))), $params);
            $order = Order::find($params['orderId'] - 100000);
            $order->apmoketa = true;
            $order->save();

            return response('OK', 200);
        }
    }
}
