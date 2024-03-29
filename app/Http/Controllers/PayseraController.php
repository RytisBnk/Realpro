<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Order;

Use App\Jobs\SendOrderInvoice;

class PayseraController extends Controller
{
    public function redirect()
    {
        $config = config('services.paysera');
        $params = [
            'projectid' => $config['projectid'],
            'orderid' => session('orderId'),
            'accepturl' => $config['accepturl'],
            'cancelurl' => $config['cancelurl'],
            'callbackurl' => $config['callbackurl'],
            'version' => $config['version'],
            'test' => $config['test'],
            'p_email' => User::find(Auth::id())->email,
            'amount' => session('price'),
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
        $ss1 = $request->ss1;
        if (md5($data . $sign) == $ss1)
        {
            $params = array();
            parse_str(base64_decode(strtr($request->data, array('-' => '+', '_' => '/'))), $params);
            SendOrderInvoice::dispatch($params['orderid'], $params['amount'] / 100);

            return response('OK', 200);
        }
    }
}
