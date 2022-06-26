@extends('templates.layoutTemplate')
<link rel="stylesheet" href="{{ asset('css/file-upload.css') }}">

@section('title', 'Upload Documents')

@section('content')
<section class="uploadform">
    <div class="main-content">
        <div class="container">
            <div class="screen_content">
            <h1 class="header">Upload Documents</h1>
            <div class="text">
                <p><strong>Why do we do this?</strong></p>
                <p class="p-info">At MatchHome, we have created a system of pre-selection. Without knowing this information we cannot create quality matches! Just like you have preferences for the place you live, our landlords have preferences for the tenants they accept.</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success" style="color: green">
                    {{ session('success') }}
                </div>
            @endif

<<<<<<< HEAD
            @if (session('error'))
                <div class="alert alert-success" style="color: red">
                    {{ session('error') }}
                </div>
            @endif

            <form class="form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="contract-type">Select your contract type:</label>
                <select name="contract_type" id="contract-type">
                    <option selected value=></option>
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="none">No Contract</option>
                </select><br>
                <label for="income">Provide your monthly income</label>
                <input class="forminput" type="number" name="income" id="income">
                <p>Please Provide a Document that confirms your contract type and Income.</p>
                <input type="file" name="renter_document"><br>
=======
    <form class="form" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="contract-type">Select your contract type:</label>
        <select name="contract_type" id="contract-type">
            <option selected value=></option>
            <option value="CDI">CDI</option>
            <option value="CDD">CDD</option>
            <option value="none">No Contract</option>
        </select><br>
        <label for="income">Provide your monthly income</label>
        <input class="forminput" type="number" name="income" id="income">
        <p>Please Provide a Document that confirms your contract type and Income.</p>
        <input type="file" name="renter_document"><br>

        <input class="forminput" type="submit" name="submitBtn" value="Send the file">
    </form>
>>>>>>> main

                <input class="forminput" id="btn" type="submit" name="submitBtn" value="Send the file">
            </form>
        </div>
            <div class="screen_background">
                    <span class="screen_bg_shape screen_bg_shape4"></span>
                    <span class="screen_bg_shape screen_bg_shape3"></span>
                    <span class="screen_bg_shape screen_bg_shape2"></span>
                    <span class="screen_bg_shape screen_bg_shape1"></span>
            </div>
        </div>
    </div>
</section>
@endsection
