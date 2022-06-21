@extends('templates.layoutTemplate')

@section('title', 'Upload Documents')

@section('content')
    <h1>Upload Documents</h1>
    <p><strong>Why do we do this?</strong></p>
    <p>At MatchHome, we have created a system of pre-selection. Without knowing this information we cannot create quality
        matches! Just like you have preferences for the place you live, our landlords have preferences for the tenants they
        accept.</p>
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

    @if (session('error'))
        <div class="alert alert-success" style="color: red">
            {{ session('error') }}
        </div>
    @endif

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="contract-type">Select your contract type:</label>
        <select name="contract_type" id="contract-type">
            <option selected value=></option>
            <option value="CDI">CDI</option>
            <option value="CDD">CDD</option>
            <option value="none">No Contract</option>
        </select><br>
        <label for="income">Provide your monthly income</label>
        <input type="number" name="income" id="income">
        <p>Please Provide a Document that confirms your contract type and Income.</p>
        <input type="file" name="renter_document"><br>

        <input type="submit" name="submitBtn" value="Send the file">
    </form>

@endsection
