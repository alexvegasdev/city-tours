@extends('partials.head')

@section('content')
    <div class="cn-form">
        <form action="{{ route('user.update', $user) }}" method="POST" class="form">
            @csrf
            <h1>
                Account
            </h1>

            @method('PATCH')

            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" class="@error('firstname') is-invalid @enderror input"
                value="{{ old('firstname', $user->firstname) }}">
            @error('firstname')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="email">Lastname</label>
            <input type="text" name="lastname" id="lastname" class="@error('lastname') is-invalid @enderror input"
                value="{{ old('lastname', $user->lastname) }}">
            @error('lastname')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="phone">Phone</label>
            <input type="tel" name="phone" id="phone" class="@error('phone') is-invalid @enderror input"
                value="{{ old('phone', $user->phone) }}">
            @error('phone')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="@error('email') is-invalid @enderror input"
                value="{{ old('email', $user->email) }}">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <input type="submit" value="Update" class="btn">
        </form>

        <form action="{{ route('user.destroy', $user) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete account" class="btn">
        </form>
        
    </div>
@endsection
