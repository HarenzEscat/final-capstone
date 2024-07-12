<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation Appointment</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
<body>
    <div class="container">
        <div class="header">
            <h1>Student Evaluation and Consultation</h1>
            <nav>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Student List</a></li>
                    <li><a href="#" id="appointment-button">Appointment</a></li>
                    <li><a href="/approve-disapprove">Approve - Disapprove</a></li>
                    <li><a href="/calendar">Calendar</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </nav>
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>
</html>
