@extends('UI-views.homepage')

@section('zoneB')
@parent
@if (session('success'))
<div class="alert alert-success" style="color: green">
    {{ session('success') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-success" style="color: red">
    {{ session('error') }}
</div>
@endif

@foreach ($properties as $property)

<div class="big-container">

<div class="properties-container">
        <div class="properties-picture"> 
            <img class="properties-img" src="/uploads/{{ $property->pictures }}" style= "width:150px "alt=""></img><br>

        </div>
        <div class="properties-description">
            <div class="wrapper-1">

                <strong>Type : </strong>
                <p class="p-description"> {{ $property->type }}</p><br>
                <strong>Price : </strong>
                <p class="p-description"> {{ $property->price }}</p><br>
                <strong>Location : </strong>
                <p class="p-description"> {{$property->location}}</p><br>
                <strong>Date_avaliable: </strong>
                <p class="p-description"> {{ $property->date_avaliable}}</p><br>
    </div>
</div>


@endforeach
@endsection
