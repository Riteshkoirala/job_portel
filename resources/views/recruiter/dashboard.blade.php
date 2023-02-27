@extends('components.base')

@section('content')
    <div class="sec">
        <div class="backdesign">
            <h4>The job thah you have posted.</h4>
        </div>
        @foreach( $posts as $post)
        <div class="secbody">
            <div class="job">
                <div class="item">
                    <div class="pho">
                        <div class="photo">

                        </div>
                        <div class="cont">
                            <h2>{{ $post->title }}</h2>
                            <h4>{{ $post->jobType->name }}</h4>
                            <div class="change">
                                <h6>{{$post->location}}</h6>
                                @foreach($post->postSkill as $skill )
                                <h5>{{ $skill->name }}</h5>
                                @endforeach
                            </div>
                            <h5>Apply before:{{ $post->deadline }}</h5>

                        </div>
                    </div>
                    <a href="{{ route('job.show', $post->id ) }}">View</a>
                </div>

            </div>
        </div>
        @endforeach
    </div>
@endsection

