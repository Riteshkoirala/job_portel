@extends('components.base')

@section('content')
    <div class="contai">
    <div class="job_container">
        <h1>ADD NEW JOB POST</h1><br>
        <form action="{{ route('addjob.store') }}" method="post">
            @csrf
            <p>Title: </p><input type="text" name="title" placeholder="job Title">            <p>@error('title') {{ $message }}@enderror</p>
            <br><br>
            <p>Location: </p> <input type="text" name="location" placeholder="company location">            <p>@error('location') {{ $message }}@enderror</p>
            <br><br>
            <p>Deadline: </p> <input type="datetime-local" name="deadline">            <p>@error('deadline') {{ $message }}@enderror</p>
            <br><br>
            <p>Skills Required: </p><div>
                <select name="skill1">
                    @foreach($skills as $skill)
                    <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach
                </select>

                <select name="skill2">
                    @foreach($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach                </select>

                <select name="skill3">
                    @foreach($skills as $skill)
                        <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                    @endforeach                </select>

            </div><br>
            <p>Job Types: </p>
            <select class="type" name="type">
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach                </select><br><br>
            <p>Qualification: </p> <input type="text" name="qualification" placeholder="Qualification" >            <p>@error('qualification') {{ $message }}@enderror</p>
            <br><br>
            <p>Experience: </p> <input type="text" name="experience" placeholder="Experience">            <p>@error('experience') {{ $message }}@enderror</p>
            <br><br>
            <p>Vacancy: </p> <input type="number" name="vacancy" placeholder="Vancancy">            <p>@error('vacancy') {{ $message }}@enderror</p>
            <br><br>
           <p>Description: </p> <textarea name="description" placeholder="Add the job description here">  </textarea>          <p>@error('description') {{ $message }}@enderror</p>
<br><br>
            <p>Responsibility: </p> <textarea name="responsibility" placeholder="Add the job Responsibility here..."></textarea>            <p>@error('responsibility') {{ $message }}@enderror</p>
            <br><br>
            <p>Benefit: </p> <textarea name="benefit" placeholder="Add the job perks and Benefits here"></textarea>            <p>@error('benefit') {{ $message }}@enderror</p>
            <br><br>
            <button type="submit" name="submit">ADD JOB</button>


        </form>
    </div>
        </div>
@endsection
