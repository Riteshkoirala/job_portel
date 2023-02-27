@extends('components.base')

@section('content')
    <div class="contai">
        <div class="job_container">
            <h1>COMPLETE YOUR PROFILE</h1><br>
            <form>
                <p>Firstname: </p><input type="text" name="firstname" placeholder="john"><br><br>
                <p>Lastname: </p><input type="text" name="lastname" placeholder="doe"><br><br>
                <p>Location: </p> <input type="text" name="location" placeholder="current location"><br><br>
                <p>Contact Number: </p> <input type="text" name="contact_number" placeholder="9812675211"><br><br>
                <p>Highest Qualification: </p> <input type="text" name="qualification" placeholder="Qualification" ><br><br>
                <p>College Name: </p> <input type="text" name="college" placeholder="college"><br><br>
                <p>Current Image: </p> <input type="file" name="image" ><br><br>
                <p>CV: </p> <input type="file" name="cv" ><br><br>
                <p>About Yourself: </p> <textarea name="description" placeholder="Add about you here"></textarea><br><br>
                <p>Experience: </p> <textarea name="experience" placeholder="Add the job Experience here..."></textarea><br><br>
                <button type="submit" name="submit">Profile Complete</button>


            </form>
        </div>
    </div>
@endsection
