@extends('components.base')

@section('content')
    <div class="bodys">
        <div class="img">
            <div class="imgs">

            </div>
            <div class="profil">
                <h2>{{ $profile->company_name }}</h2>
                <em>joined date: {{ $profile->created_at }}</em>
                <h4>{{$user->email}}</h4>
                <h4>{{ $profile->contact_number }}</h4>
                <h4>{{$profile->location}}</h4>
            </div>

        </div>
        <div class="detail">
            <h2>Company description:</h2>
            <p>{{ $profile->detail }}</p>

    </div>
        <a class="update" href="{{ route('rprofile.edit', $profile->id) }}">Update Profile</a>

@endsection

