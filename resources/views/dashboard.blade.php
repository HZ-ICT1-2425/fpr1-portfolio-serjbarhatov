@extends('layout.main')

@section('content')
    <div class="container">
        <header>
            <h1>Dashboard</h1>
        </header>

        <section class="content">
            <img src="/images/hz-logo.png" class="hz-logo">
            <h2 class="section-title">My study progress</h2>
            <table id="exams-table">
                <tr>
                    <th>Quarter</th>
                    <th>Course code</th>
                    <th>Course name</th>
                    <th>Assessment type</th>
                    <th>Credits</th>
                    <th>Grades</th>
                </tr>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->quarter }}</td>
                        <td>{{ $course->cu_code }}</td>
                        <td>{{ $course->name }}</td>
                        <td>
                            @foreach ($course->tests as $test)
                                <p>{{ $test->name}}</p>
                            @endforeach
                        </td>
                        <td>{{ $course->credits }}</td>
                        <td>{{ $course->calculateGrade() }}</td>
                    </tr>
                @endforeach

            </table>
        </section>
        <section class="content">
            <div class="w3-my-light-grey w3-round">
                <div class="w3-container w3-round w3-my-blue" style="width:75%">45 ECs - NBSA Boundary</div>
            </div>
            <p></p>
            <div class="w3-my-light-grey w3-round">
                <div class="w3-container w3-round w3-my-blue" style="width:{{ $obtainedCreditsPercentage }}%">{{ $obtainedCredits }} ECs</div>
            </div>
        </section>

    </div>
@endsection
