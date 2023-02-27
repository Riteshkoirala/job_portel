@extends('components.base')

@section('content')
    <div class="contai">
        <div class="job_container">
            <h1>COMPLETE THE RECRUITER PROFILE</h1><br>
            <form>
                <p>Company Name: </p><input type="text" name="company_name" placeholder="Buddha"><br><br>
                <p>Location: </p> <input type="text" name="location" placeholder="copany location"><br><br>
                <p>Contact_number: </p> <input type="text" name="contact_number" placeholder="Qualification" ><br><br>
                <p>Company Image</p><input type="file" name="image"><br><br>
                <p>Company Detail: </p> <textarea name="detail" placeholder="Add the job perks and Benefits here"></textarea><br><br>
                <button type="submit" name="submit">Complete Profile</button>


            </form>
        </div>
    </div>
@endsection
