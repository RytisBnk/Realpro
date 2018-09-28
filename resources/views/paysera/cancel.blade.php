@extends('layouts.parallax') 
@section('title') 
Atšaukėte užsakymą. Realpro.lt
@endsection
 
@section('content')
<section id="cancel">
    <div class='container' style='padding: 150px 0;'>
        <h1 style='color: red; text-align: center; font-size: 40px;'>Atšaukėte mokėjimą. Pradėkit iš naujo spausdami <a href="{{ route('plans') }}">čia</a></h1>
    </div>
</section>
@endsection