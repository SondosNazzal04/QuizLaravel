@extends('layouts.app')

@section('title', 'All Lecturers')

@section('content')
<h1>All Lecturers</h1>

<table>
    <thead>
        <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Profile photo</th>
            <th>Employee_number</th>
            <th>Department</th>
            <th>Academic_rank</th>
            <th>Office_room</th>
            <th>Courses count</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($lecturers as $lecturer)
            <tr>
                <td>{{$lecturer->user->name}}</td>
                <td>{{$lecturer->user->employee_number}}</td>
                <td>{{$lecturer->user->name}}</td>
                <td>{{$lecturer->user->name}}</td>
            </tr>
        @empty
            <h2>There is no lecturers now</h2>
        @endforelse
    </tbody>
</table>

@endsection
