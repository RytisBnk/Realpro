<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\User;
use Auth;
use App\Http\Requests\FormValidationRequest;
use App\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class OrderController extends Controller
{
    private $sildymoTipai = [
          'centrinis',
          'centrinisKol',
          'dujinis',
          'elektra',
          'geoterminis',
          'kietasKuras',
          'skystasKuras'
    ];

    public function create()
    {
        return view('checkout');
    }

    public function showAll()
    {
        return view('order.list', array('orders' => Order::where('user_id', Auth::id())->get()));
    }

    public function show($id)
    {
        return view('order.show', array('order' => Order::find($id)));
    }

    public function edit($id)
    {
        return view('order.edit', array('order' => Order::find($id)));
    }

    private function getOrderInformation(FormValidationRequest $request, Order $order)
    {
        $order->nuosavybes_tipas = $request->input('nuosavybes_tipas');
        $order->pardavimo_tipas = $request->input('pardavimo_tipas');
        $order->adresas = $request->input('adresas');
        $order->plotas = $request->input('plotas');
        $order->sklypo_plotas = $request->input('sklypo_plotas');
        $order->kambariu_skaicius = $request->input('kambariu_skaicius');
        $order->aukstas = $request->input('aukstas');
        $order->aukstu_skaicius = $request->input('aukstu_skaicius');
        $order->statybos_metai = $request->input('statybos_metai');
        $order->pastato_tipas = $request->input('pastato_tipas');
        $order->paskirtis = $request->input('paskirtis');
        $order->irengimas = $request->input('irengimas');
        $order->ypatybes = $request->input('ypatybes');
        $order->kaina = $request->input('kaina');
        $order->komentaras = $request->input('komentaras');

        foreach ($this->sildymoTipai as $tipas)
        {
            if ($request->exists($tipas))
            {
                $order->sildymas = $order->sildymas . '|' . $tipas;
            }
        }

        if ($request->exists('renovuotas'))
        {
            $request->renovuotas = true;
        }

        return $order;
    }

    public function store(FormValidationRequest $request)
    {
        $order = new Order;
        $order->user_id = Auth::id();
        $order = $this->getOrderInformation($request, $order);
        $order->save();

        $user = User::find(Auth::id());
        $user->name = $request->input('vardas');
        $user->tel_nr = $request->input('tel');
        $user->gimimo_data = $request->input('gimimas');
        $user->save();

        foreach ($request->except('_token') as $key => $value)
        {
            echo $key . '  ' . $value;
            echo '<br/>';
        }
    }

    public function update(FormValidationRequest $request, $id)
    {
        $order = Order::find($id);

        if (Auth::id() != $order->user_id)
        {
            return redirect()->route('login');
        }

        $order = getOrderInformation($request, $order);
        $order->save();

        return redirect()->route('order.list');
    }

    public function destroy($id)
    {
        Order::find($id)->delete();
        return redirect()->route('order.list');
    }
}
