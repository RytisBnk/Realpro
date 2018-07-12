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

    private $paskirtysSklypui = [
          'namu_valda',
          'sklypas_soduose',
          'sandeliavimo',
          'kita',
          'daugiabuciu_statyba',
          'misko_ukio',
          'komercine',
          'zemes_ukio',
          'pramones',
          'rekreacine'
    ];

    private $paskirtysPatalpoms = [
          'administracine',
          'paslaugu',
          'maitinimo',
          'prekybos',
          'sandeliavimo_kom',
          'kita_kom',
          'viesbuciu',
          'gamybos'
    ];

    public function storeSelectedPlan(Request $request)
    {
        session(['selectedPlan' => $request->input('plan')]);
        return;
    }

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

    private function getCheckboxesInfo(FormValidationRequest $request, Order $order)
    {
        foreach ($this->sildymoTipai as $value)
        {
            if ($request->exists($value))
            {
                $order->sildymas .= $value . '|';
            }
        }

        $paskirtys = array_merge($this->paskirtysSklypui, $this->paskirtysPatalpoms);
        foreach ($paskirtys as $value)
        {
            if ($request->exists($value))
            {
                $order->paskirtis .= $value . '|';
            }
        }

        if ($request->exists('renovuotas'))
        {
            $order->renovuotas = true;
        }

        return $order;
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
        $order->namo_tipas = $request->input('namo_tipas');
        $order->automobiliu_skaicius = $request->input('talpa');

        $order = $this->getCheckboxesInfo($request, $order);

        return $order;
    }

    public function store(FormValidationRequest $request)
    {
        $order = new Order;
        $order->user_id = Auth::id();
        $order = $this->getOrderInformation($request, $order);
        $order->planas = session('selectedPlan');
        $order->save();

        $user = User::find(Auth::id());
        $user->name = $request->input('vardas');
        $user->tel_nr = $request->input('tel');
        $user->gimimo_data = $request->input('gimimas');
        $user->save();

        return redirect()->route('home'); // TO be changed to actual checkout page
    }

    public function update(FormValidationRequest $request, $id)
    {
        $order = Order::find($id);

        if (Auth::id() != $order->user_id)
        {
            return redirect()->route('order.list');
        }

        $order = getOrderInformation($request, $order);
        $order->save();

        return redirect()->route('order.list');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        if (Auth::id() != $order->user_id)
        {
            return redirect()->route('order.list');
        }
        return redirect()->route('order.list');
    }
}