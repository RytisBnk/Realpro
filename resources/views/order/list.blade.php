@extends('layouts.app', ['title' => 'Jūsų esami užsakymai | RealPro. Kurkite naujus ar stebėkite savo užsąkymų būsenas realiu laiku! Sužinokite naujienas iškart kai tik jos atsiranda!'])
@section('assets')
    <style>
    .image {
      width: 200px;
      padding-bottom: 40px;
    }
    #betterPlan {
      margin: 20px 0;
    }
    </style>
@endsection

@section('content')
<div class="container" style='padding-top: 60px;'>
<a href="{{ route('plans') }}">
  <button type='button' class='btn btn-info btn-lg float-right' id='betterPlan'>Užsakyti kitą planą</button>
</a>
    <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="table-responsive">
                  <table class="table table-hover">
<thead class="thead-light">
  <tr>
    <th scope="col">Nr.</th>
    <th scope="col">Vardas</th>
    <th scope="col">Objekto tipas</th>
    <th scope="col">Objekto adresas</th>
    <th scope="col">Pasiūlymo tipas</th>
    <th scope="col">Planas (kaina)</th>
  </tr>
</thead>
<tbody>
  @if (isset($order))
  <tr>
    <th scope="row">1</th>
    <td>{{ ucwords($user->name) }}</td>
    <td>{{ ucfirst($order->nuosavybes_tipas) }}</td>
    <td>{{ $order->adresas }}</td>
    <td>{{ ucfirst($order->pardavimo_tipas) }}</td>
    <td>{{ $order->planas }} ({{ $price }}&euro;)</td>
  </tr>
  @endif
</tbody>
</table>
</div>
@if (count($images) > 0)
<h4>Nuotraukos</h4>
    @foreach ($images as $image)
        @if ($loop->first)
            <div class ="row">
        @endif

        @if (!$loop->first && $loop->iteration % 5 == 0)
            </div>
            <div class ="row">
        @endif

        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="{{ route('image.retrieve', ['filename' => $image->filename]) }}" target="_blank">
                <img alt="AltText" src="{{ route('image.retrieve', ['filename' => $image->filename]) }}" class="img-responsive image">
            </a>
        </div>
    @endforeach
@endif


@endsection
