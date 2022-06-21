@extends('templates.layoutTemplate')

@section('title', 'Landlord Preference')

@section('content')
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

@foreach ($landlordpreference as $landlordPf)

<div class="properties_container" style="display: flex; display: flex;
    flex-direction: row; justify-content: space-evenly; align-items: center;">

  
    <div class="landlord_preference">
        <strong>Contract : </strong> {{ $landlordPf->contract}}<br>
        <strong>Income : </strong> {{ $landlordPf->income }}<br>
       
    <hr>
  
    </div> 

   
</div>


@endforeach
@endsection