@extends('components.base')

@section('content')

    <div class="image">
        <div class="text">
        <div class="log">
            <h2>SIGN IN</h2>
            <form action="{{ route('login.store') }}" method="post">
                @csrf
                <input type="email" name="email" placeholder="johndoe@gmail.com">
                @error('email')
                <span><p> {{ $message }}</p></span>
                @enderror                <input type="password" name="password" placeholder="Password">
                @error('password')
                <span><p> {{ $message }}</p></span>
                @enderror                <a href="#">Forget Password? Click here.</a>
                <input type="submit" name="submit" value="LOGIN">
                <a href="#">Dont have an account? Create one.</a>
                <p class="tex">OR SIGN IN WITH</p>
                <h1><a class="goo" href="#">G</a></h1>


            </form>

        </div>
        </div>
    </div>
@endsection

