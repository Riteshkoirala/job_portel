@extends('components.base')

@section('content')
    <div class="sec">
        <div class="backdesign">
            <h4>You can find the jobs according to your interest.</h4>
    </div>
        <div class="secbody">
    <div class="filter">
        <form>
            <select>
                <option>Location</option>
            </select><br>
            <select>
                <option>Company</option>
            </select><br>
            <select>
                <option>Job Type</option>
            </select><br>
            <select>
                <option>Skills</option>
            </select><br>
            <input type="submit" name="submit" value="Filter">
        </form>
    </div>
{{--            @foreach($posts as $post)--}}

            <div class="job">
            <div class="item">

                <div class="pho">
                    <div class="photo">

                    </div>
                    <div class="cont">
                        <h2>Front-end</h2>
                        <h4>Full time internship</h4>
                        <div class="change">
                        <h6>location</h6>
                        <h5>skills</h5>
                        </div>
                        <h5>Apply before:</h5>

                    </div>
                </div>
                <button type="submit">Apply</button>
            </div>

        </div>
        </div>
</div>
{{--    @endforeach--}}

@endsection

