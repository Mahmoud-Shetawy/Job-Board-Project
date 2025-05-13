@extends('admin.layout')

@section('content')
<div class="container">
    <h2>Job Details</h2>
    <div class="card shadow" style="border-radius: 25px; background-color: white; padding: 20px;
                border: 8px solid #27548A; width: 500px; height: auto;">
        <h5 class="fw-bold" style="color: #27548A;">{{ $job->title }}</h5>
        <p><strong style="color: #27548A;">Company Name:</strong> {{ $job->user->company_name ?? 'N/A' }}</p>
        <p><strong style="color: #27548A;">Salary Min:</strong> {{ $job->salary_min }}</p>
        <p><strong style="color: #27548A;">Salary Max:</strong> {{ $job->salary_max }}</p>
        <p><strong style="color: #27548A;">Location:</strong> {{ $job->location }}</p>
        <p><strong style="color: #27548A;">Application Deadline:</strong> {{ $job->application_deadline }}</p> <!-- ✅ تم إضافته -->
        <p><strong style="color: #27548A;">Status:</strong> {{ $job->status }}</p>
        <p><strong style="color: #27548A;">Skills Required:</strong> {{ $job->skills_required }}</p>
        <p><strong style="color: #27548A;">work type:</strong> {{ $job->work_type }}</p>
        <p><strong style="color: #27548A;">description:</strong> {{ $job->description }}</p>
    </div>
</div>
@endsection
