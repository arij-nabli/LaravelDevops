@extends('Layouts.admin')

@section('title', 'Planning Calendar')

@section('content')
<div class="container">

    <div id="calendar"></div>
</div>

<!-- Include FullCalendar CSS and JS -->
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css' rel='stylesheet' />
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js'></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        // Create an array of events from the planning data
        var events = @json($plannings->map(function($planning) {
            return [
                'title' => 'Planning ', // Use a static title
                'start' => $planning->dateCollecte, // Use the planning's dateCollecte
                'end' => $planning->dateCollecte // Use the planning's dateCollecte
            ];
        })->toArray()); // Ensure we convert it to an array

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: events,
        });

        calendar.render();
    });
</script>

<style>
    /* Optional: style for the calendar container */
    #calendar {
        max-width: 900px;
        margin: 40px auto; /* Center the calendar */
    }
</style>
@endsection
