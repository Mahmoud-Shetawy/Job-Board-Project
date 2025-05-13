@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-center">
    <div class="row justify-content-center">
        @foreach ($jobs as $job)
        <div class="col-md-4 mb-4 d-flex justify-content-center">
            <div class="job-card">
                <h3>{{ $job->title }}</h3>
                <p><strong>Company Name:</strong> {{ $job->user->company_name }}</p>
                <p><strong>Salary Min:</strong> {{ $job->salary_min }}</p>
                <p><strong>Salary Max:</strong> {{ $job->salary_max }}</p>
                <p><strong>Location:</strong> {{ $job->location }}</p>
                <p><strong>Deadline:</strong> {{ $job->deadline }}</p>

                <div class="d-flex justify-content-center gap-2 mt-3">
                    <form action="{{ route('admin.deleteJob', $job->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this job?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="background-color: rgb(204, 59, 59); border: none; width: 120px; height: 45px;">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .job-card {
        display: flex;
        flex-direction: column;
        align-items: start;

        background-color:rgb(255, 255, 255);
        border: 20px solid #27548A;
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        width: 1200px;
        margin: 15px;
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
    }

    .job-card h3 {
        color: #27548A;
        font-size: 24px;
    }

    .job-card p {
        color: #7A7A7A;
        font-size: 16px;
    }

    .btn {
        position: relative;
        bottom: 0px;
    left: 85px;
      width: 120px;
        height: 45px;
        font-size: 16px;
    }
</style>
@endsection
