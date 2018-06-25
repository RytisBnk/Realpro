<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use App\Http\Requests\FormValidationRequest;
use App\Image;

class OrderController extends Controller
{
    public function create()
    {
        return view('checkout');
    }

    public function showAll()
    {
        return view('order.list');
    }

    public function show($id)
    {
        return view('order.show', array('order' => Order::find($id)));
    }

    public function edit($id)
    {
        return view('order.edit', array('order' => Order::find($id)));
    }

    public function store(FormValidationRequest $request)
    {
        $order = new Order;
        $order->user_id = Auth::id();
        $order->tipas = $request->input('tipas');
        $order->adresas = $request->input('adresas');
        $order->plotas = $request->input('plotas');
        $order->sklypo_plotas = $request->input('sklypo_plotas');
        $order->kambariu_skaicius = $request->input('kambariu_skaicius');
        $order->automobiliu_skaicius = $request->input('automobiliu_skaicius');
        $order->aukstas = $request->input('aukstas');
        $order->aukstu_skaicius = $request->input('aukstu_skaicius');
        $order->statybos_metai = $request->input('statybos_metai');
        $order->pastato_tipas = $request->input('pastato_tipas');
        $order->paskirtis = $request->input('paskirtis');
        $order->irengimas = $request->input('irengimas');
        $order->sildymas = $request->input('sildymas');
        $order->ypatybes = $request->input('ypatybes');
        $order->papildomos_patalpos = $request->input('papildomos_patalpos');
        $order->papildoma_iranga = $request->input('papildoma_iranga');
        $order->apsauga = $request->input('apsauga');
        $order->renovuotas = $request->input('renovuotas');
        $order->patalpu_skaicius = $request->input('patalpu_skaicius');
        $order->vanduo = $request->input('vanduo');
        $order->kaina = $request->input('kaina');
        $order->komentaras = $request->input('komentaras');
        $order->save();

        $images = $request->images;
        foreach($images as $image)
        {
            $filename = $image->store('files');
            $file = new Image;
            $file->order_id = $order->id;
            $file->filename = $filename;
            $file->save();
        }

        return redirect()->route('home');
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->tipas = $request->input('tipas');
        $order->adresas = $request->input('adresas');
        $order->plotas = $request->input('plotas');
        $order->sklypo_plotas = $request->input('sklypo_plotas');
        $order->kambariu_skaicius = $request->input('kambariu_skaicius');
        $order->automobiliu_skaicius = $request->input('automobiliu_skaicius');
        $order->aukstas = $request->input('aukstas');
        $order->aukstu_skaicius = $request->input('aukstu_skaicius');
        $order->statybos_metai = $request->input('statybos_metai');
        $order->pastato_tipas = $request->input('pastato_tipas');
        $order->paskirtis = $request->input('paskirtis');
        $order->irengimas = $request->input('irengimas');
        $order->sildymas = $request->input('sildymas');
        $order->ypatybes = $request->input('ypatybes');
        $order->papildomos_patalpos = $request->input('papildomos_patalpos');
        $order->papildoma_iranga = $request->input('papildoma_iranga');
        $order->apsauga = $request->input('apsauga');
        $order->renovuotas = $request->input('renovuotas');
        $order->patalpu_skaicius = $request->input('patalpu_skaicius');
        $order->vanduo = $request->input('vanduo');
        $order->kaina = $request->input('kaina');
        $order->komentaras = $request->input('komentaras');
        $order->save();

        return redirect()->route('order.list');
    }

    public function destroy($id)
    {
        Order::find($id)->delete();
        $images = Image::where('order_id', $id)->get();
        foreach($images as $image)
        {
            Storage::delete($image->filename);
            $image->delete();
        }

        return redirect('order.list');
    }
}
