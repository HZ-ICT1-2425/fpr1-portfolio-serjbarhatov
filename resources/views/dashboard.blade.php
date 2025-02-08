@extends('layout.main')

@section('content')
<div class="container">
<header>
<h1>Dashboard</h1>
</header>

<section class="content">
<img src="/resources/hz-logo.png" class="hz-logo">
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
    <tr>
    <td>1</td>
    <td>CU75001V3</td>
    <td>Program & Career Orientation</td>
    <td>Assessment website</td>
    <td>2.5</td>
    <td></td>
    </tr>
    <tr>
    <td>1</td>
    <td>CU75002V2</td>
    <td>Computer Science Basics</td>
    <td>Written exam</td>
    <td>5</td>
    <td></td>
    </tr>
    <tr>
    <td>1</td>
    <td>CU75003V1</td>
    <td>Programming Basics</td>
    <td>Case study exam</td>
    <td>5</td>
    <td></td>
    </tr>
    <tr>
    <td>1-4</td>
    <td>CU75068V3</td>
    <td>Personal Professional Development Exploration</td>
    <td>Criterium focused interview</td>
    <td>12.5</td>
    <td></td>
    </tr>
    <tr>
    <td>2</td>
    <td>CU75004V1</td>
    <td>Object-Oriented Programming</td>
    <td>Group assignment,<br /> Case study exam</td>
    <td>10</td>
    <td></td>
    </tr>
    <tr>
    <td>3</td>
    <td>CU75080V1</td>
    <td>Framework project 1</td>
    <td>On-site case study exam,</br> Database exam,</br> Group presentation on project result,</br>
        Group portfolio with individual elements on requirements
    </td>
    <td>10</td>
    <td></td>
    </tr>
    <tr>
    <td>3&4</td>
    <td>CU75081V1</td>
    <td>Business IT Consultancy basics</td>
    <td>Video</td>
    <td>2.5</td>
    <td></td>
    </tr>
    <tr>
    <td>4</td>
    <td>CU75011V3</td>
    <td>Framework project 2</td>
    <td>Final delivery,<br /> Report of acceptance tests and optional assessments,<br /> IT Development
        portfolio</td>
    <td>10</td>
    <td></td>
    </tr>

</table>
</section>
<section class="content">
<div class="w3-my-light-grey w3-round">
    <div class="w3-container w3-round w3-my-blue" style="width:75%">45 EC - NBSA Boundary</div>
</div>
<p></p>
<div class="w3-my-light-grey w3-round">
    <div class="w3-container w3-round w3-my-blue" style="width:5%">0%</div>
</div>
</section>

</div>
@endsection
