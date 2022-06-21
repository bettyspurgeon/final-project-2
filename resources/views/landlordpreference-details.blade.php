@extends('templates/layoutTemplate')

@section('title', 'Insert new landlordpreference')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<h1 class="contract">Create new landlordpreference</h1>
<form action="" method="POST" id="myForm" enctype="multipart/form-data">
    @csrf
    <div class="properties_create_container" style="display: flex; display: flex;
    flex-direction: clomn; justify-content: space-around; align-items: center; margin:80px">
        <div>
            <strong>Type:</strong> <select id="" name="contract">
                <option value="contract"> --Please choose an option--</option>
                <option value="CDI">CDI</option>
                <option value="CDD">CDD</option>
                <option value="None">None</option>
            </select>
            <br>
            <strong>Income:</strong><input type="text" name="income" placeholder="Income"><br>

        </div>
        <strong>Ready ?</strong> <input type="submit" value="Insert">
        <div class="properties_links">
            <a href="/landlordpreference">Go Back</a>
            <hr>
        </div>
        <a href="/landlordpreference">See More landlordpreference</a>
       
        <hr>
        <a href="/landlordpreference/create">Add Properties</a>
        <hr>
    </div>
    </div>
</form>

@endsection