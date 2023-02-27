@extends('components.base')

@section('content')
    <div class="sec">
        <div class="backdesign">
            <h4>The Apllicant who have applied for the job posted by you.</h4>
        </div>
        <div class="secbody">
            <div class="job">
                <div class="item">
                    <div class="pho">
                        <div class="phot">
                        </div>
                        <div class="cont">
                            <h2>Ritesh Koirala</h2>
                            <h4>Full time internship</h4>
                            <div class="change">
                                <p>Has applied For: Front-end development</p>
                            </div>
                            <em>Job Posted on:</em><br>
                            <em>Applied date:</em>
                        </div>
                    </div>
                    <div class="btn">
                    <input class="sel" type="submit" name="select" value="SELECT">
                    <input class="del" type="submit" name="delete" VALUE="DELETE">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

