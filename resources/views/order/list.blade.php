@extends('layouts.app', ['title' => 'Jūsų užsakymai'])
@section('assets')
    <link rel="stylesheet" href="../css/orders.css">
@endsection

@section('content')
<div class="container" style='padding-top: 60px;'>
  <button type='button' class='btn btn-info btn-lg float-right' id='betterPlan'>Užsakyti kitą planą</button>
    <div class="row justify-content-center">
        <div class="col-md-12">

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
  @if (!empty($orders))
  @foreach ($orders as $order)
  <tr>
    <th scope="row">1</th>
    <td>{{ $user->name }}</td>
    <td>{{ $order->nuosavybes_tipas }}</td>
    <td>{{ $order->adresas }}</td>
    <td>{{ $order->pardavimo_tipas }}</td>
    <td>{{ $order->planas }} (99&euro;)</td>
  </tr>
  @endforeach
  @endif
</tbody>
</table>
<h4>Nuotraukos</h4>
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="../storage/app/files/2_1.jpg">
              <img alt="AltText" src="https://placehold.it/300" class="img-responsive image">
          </a>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="LinkToImage">
              <img  alt="AltText" src="https://placehold.it/300" class="img-responsive image">
          </a>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="LinkToImage">
              <img src="https://placehold.it/300" alt="AltText" class="img-responsive image">
          </a>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
          <a href="LinkToImage">
              <img alt="AltText" src="https://placehold.it/300" class="img-responsive image">
          </a>
          </div>

                </div>
            </div>
    </div>
  </div>
@endsection
