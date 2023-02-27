@extends('components.base')

@section('content')

    <div class="image">
        <div class="text">
            <div class="logs">
                <h2>SIGN UP</h2>
                <form action="{{ route('signup.store') }}" method="post">
                    @csrf
                    <input type="email" name="email" placeholder="johndoe@gmail.com">
                @error('email')
                    <span><p> {{ $message }}</p></span>
                @enderror
                    <input type="password" name="password" placeholder="Password">
                @error('password')
                <span><p>{{ $message }}</p></span>
                @enderror
                    <input type="password" name="cpassword" placeholder="Conform Password">
                @error('cpassword')
                <span><p>{{ $message }}</p></span>
                @enderror
                    <select name="role">
                        <option value="">select the role</option>
                        <option value="seeker">Job Seeker</option>
                        <option value="recruiter">Recruiter</option>
                    </select>@error('role')
                <span><p>{{ $message }}</p></span>
                @enderror
                <input type="submit" name="submit" value="SIGNUP">
                    <a href="#">Have an account? Sign in.</a>
                    <p class="tex">OR SIGN UP WITH</p>
                    <h1><a class="goo" href="#">G</a></h1>
                </form>

            </div>
        </div>
    </div>

@endsection

