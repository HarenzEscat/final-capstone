@extends('consultant.layouts.consultation')

@section('content')
<div id="appointment-form" class="appointment-form hidden">
    <form action="/consultation" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="course">Course/Grade Level/Section:</label>
        <select id="course" name="course" required>
            <option value="BSIT/1ST YEAR/101">BSIT/1ST YEAR/101</option>
            <option value="BSIT/2ND YEAR/202">BSIT/2ND YEAR/202</option>
            <option value="BSIT/3RD YEAR/301">BSIT/3RD YEAR/301</option>
            <option value="BSIT/4TH YEAR/401">BSIT/4TH YEAR/401</option>
        </select>

        <label for="purpose">Purpose of Consultation:</label>
        <select id="purpose" name="purpose" required>
            <option value="transfer">Transfer</option>
            <option value="return-to-class">Return to Class - Academic</option>
            <option value="graduating">Graduating Students</option>
            <option value="personal">Personal</option>
        </select>

        <label for="department">Select Department Head/Admin:</label>
        <select id="department" name="department" required>
            <option value="cs">CS Department</option>
            <option value="engineering">Engineering</option>
        </select>

        <label for="meeting-mode">Select Meeting Mode:</label>
        <select id="meeting-mode" name="meeting_mode" required>
            <option value="face-to-face">Face to Face</option>
            <option value="online">Online</option>
        </select>

        <div id="online-preference-group" style="display: none;">
            <label for="online-preference">If Online Choose via Meeting Preference:</label>
            <select id="online-preference" name="online_preference">
                <option value="google-meet">Google Meet</option>
                <option value="messenger">Messenger</option>
            </select>
        </div>

        <label for="schedule">Select Schedule:</label>
        <input type="datetime-local" id="schedule" name="schedule" required>

        <button type="submit">Confirm Appointment</button>
    </form>
</div>
@endsection
