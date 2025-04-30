@extends('layouts.app')

@section('content')
<div class="container">
    <h2>profile page</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<form action="{{ route('form.blade.php') }}" method="POST" enctype="multipart/form-data">
        @csrf

    <div class="form-ex">
        <label for="name">Enter your full name</label>
        <input type="text" id="full_name" name="full_name" value="{{ old('name') }}" required>
    </div>

    <div class="form-ex">
        <label for="email">Enter your email</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div class="form-ex">
        <label for="phone_num">Enter your phone number</label>
        <input type="text" id="phone_num" name="phone_num" value="{{ old('phone_num') }}" required>
    </div>

    <div class="form_ex">
        <label for="profile_pic"></label>
        <input type="file" id="profile_pic" name="profile_pic">
    </div>
    
    <div class="form-ex">
            <label for="bio">about user</label>
            <textarea id="bio" name="bio" rows="4" required>{{ old('bio') }}</textarea>
        
    </div>

    <button type="submit" class="btn btn-primary">submit profile information</button>

</form>
@endsection




    




