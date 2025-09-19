@extends('layouts.mainguru')

@section('container')
<h1>Grade Assignment</h1>

<form method="POST" action="{{ route('submit_grade') }}">
    @csrf
    <input type="hidden" name="assignment_id" value="{{ $assignment->id }}">
    <label>Assignment Name: {{ $assignment->name }}</label><br>
    <label>Description: {{ $assignment->description }}</label><br>
    <label>Student Name: {{ $submission->student->name }}</label><br>
    <label for="grade">Grade:</label>
    <input type="text" id="grade" name="grade"><br>
    <label for="comments">Comments:</label><br>
    <textarea id="comments" name="comments"></textarea><br>
    <button type="submit">Submit Grade</button>
</form>
@endsection