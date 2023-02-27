@extends('components.base')

@section('content')
    <div class="bodys">
        <div class="img">
            <div class="imgs">
            </div>
            <div class="profil">
                <h2>{{ $posts->title }}</h2>
                <em>posted on: {{ $posts->created_at }}</em>
                <h4>{{ $company->email }}</h4>
                <h4>{{$company->contact_number}}</h4>
                <h4>{{$posts->location}}</h4>
                <em>Apply Before: {{ $posts->deadline }}</em>
                <h4>{{$type->name}}</h4>
            </div>

        </div>
        <div class="detail">
            <div class="skill">
                <h2>Skills:</h2>
                @foreach($skill as $skills)
                <p>{{ $skills->name }}</p>
                @endforeach
            </div>

        </div>
        <div class="detail">
            <h2>Job Description:</h2>
            <p>{{ $posts->description }}</p>

        </div>
        <div class="detail">
            <p>Qalification Required: {{$posts->qualification}}</p>
            <p>Experience Required: {{$posts->experience}}</p>
            <p>No. of Vacancy: [{{ $posts->vacancy }}]</p>

        </div>

        <div class="detail">
            <h2>Responsibility:</h2>
            <p>{{$posts->responsibility}}</p>

        </div>
        <div class="detail">
            <h2>Benefits and Perks:</h2>
            <p>{{$posts->benefit}}</p>

        </div>

        <a class="update" href="{{ route('addjob.edit',$posts->id) }}">Update Post</a>

@endsection

