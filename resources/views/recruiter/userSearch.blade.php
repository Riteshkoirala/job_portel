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
                        <option>College</option>
                    </select><br>
                    <select>
                        <option>Skills</option>
                    </select><br>
                    <input type="submit" name="submit" value="Filter">
                </form>
            </div>
            <div class="job">
                <div class="item">
                    <div class="pho">
                        <div class="phot">

                        </div>
                        <div class="cont">
                            <h2>Ritesh Koirala</h2>
                            <div class="change">
                                <h5>skills</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

