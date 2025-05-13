@extends('layouts.app')

@section('title', 'Available Jobs')

@section('content')

    <div class="container mt-4 mb-5">
        <h3 class="text-primary mb-4">Search for jobs</h3>
        <form action="{{ route('jobs.search') }}" method="GET">
            <div class="row g-2">
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-lg" name="search" placeholder="Search for jobs..."
                        value="{{ request('search') }}" style="border-radius: 10px; border: 1px solid #27548A;">
                </div>

                <div class="col-md-3">
                    <select name="work_type" class="form-select form-select-lg">
                        <option value="">All Work Types</option>
                        <option value="Remote" {{ request('work_type') == 'Remote' ? 'selected' : '' }}>Remote</option>
                        <option value="On-site" {{ request('work_type') == 'On-site' ? 'selected' : '' }}>On site</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <input type="number" class="form-control form-control-lg" name="salary_min" placeholder="Min Salary"
                        value="{{ request('salary_min') }}">
                </div>

                <div class="col-md-2">
                    <input type="number" class="form-control form-control-lg" name="salary_max" placeholder="Max Salary"
                        value="{{ request('salary_max') }}">
                </div>

                <div class="col-md-1">
                    <button class="btn btn-primary btn-lg" type="submit">
                        <i class="fas fa-search text-white"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="container my-5">
        @if ($jobs->isEmpty())
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle me-2 text-primary"></i> No jobs found.
            </div>
        @else
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($jobs as $job)
                    <div class="col">
                        <div class="card h-100 shadow">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title text-primary mb-1">{{ $job->title }}</h2>
                                <h4>
                                    <small style="font-size: 0.9rem"><span class=" fw-bold text-primary">Company: </span>
                                        {{ $job->user->company_name ?? 'N/A' }}</small>
                                </h4>
                                <p style="font-size: 0.9rem" class="card-text text-muted flex-grow-1">
                                    <span class="fw-bold text-primary">Description: </span>
                                    {{ Str::limit($job->description, 100) }}
                                </p>

                                <div style="font-size: 0.9rem" class="mt-1">
                                    Salary range:
                                    (<span class="text-primary">${{ number_format($job->salary_min) }}</span>
                                    <span class="text-primary">to ${{ number_format($job->salary_max) }}</span>)
                                    <p class="mb-1"><i class="fas fa-map-marker-alt text-primary"></i> {{ $job->location }}</p>
                                    <span class="badge bg-danger text-white border mb-2">{{ $job->work_type }}</span>

                                    <div class="d-flex align-items-center justify-content-between gap-1">
                                        <a href="{{ route('applications.create', $job) }}"
                                            style="display: inline-block;
                                            width: 100%; padding: 10px 20px; background-color: #27548A; color: white; text-align: center; text-decoration: none; border-radius: 15px; font-weight: bold;">
                                            Apply Now
                                        </a>
                                        <a href="{{ route('jobs.show', $job) }}"
                                            class="btn btn-primary btn-sm rounded-circle">
                                            <i class="fas fa-arrow-right text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
