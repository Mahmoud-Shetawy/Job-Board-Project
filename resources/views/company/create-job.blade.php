<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Job</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @include('company.styles')
    <style>

        /* Form Section */
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #27548A;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px #27548A;
        }

        .form-container h2 {
            color: #ffffff;
            text-align: center;
        }

        .form-container input,
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #ffffff;
            color: #27548A;
            border: 1px solid #27548A;
            box-sizing: border-box;
        }

        .form-container input[type="date"] {
            padding: 8px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color:rgba(94, 126, 168, 0.56);
            border: none;
            cursor: pointer;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .form-container button:hover {
            background-color: #ffffff;
            color: #27548A;

        }



        .deadline-section input {
            width: 90%;
        }


        .form-container input, .form-container textarea, .form-container select {
            height: 40px;
        }

        .form-container textarea {
            height: 100px;
        }



    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <b>JOB PLATFORM</b>
        <div>
            <a href="{{ route('company.home') }}">Home</a>
            <a href="{{ route('company.applications') }}">Applications</a>
            <a href="{{ route('company.accepted') }}">Accepted</a>

        </div>
        <a href="{{ route('profile.edit') }}" class="company-name">
    <i class="bi bi-building"></i>
    {{ auth()->user()->company_name }}
</a>
    </div>

    <!-- Form to Create New Job -->
    <div class="form-container">
        <h2>Create a New Job</h2>
        <form action="{{ route('company.store-job') }}" method="POST">
            @csrf
            <input type="text" id="title" name="title" placeholder="Job Title" required>

            <textarea id="description" name="description" placeholder="Job Description" required></textarea>

            <input type="text" id="skills_required" name="skills_required" placeholder="Skills Required" required>

            <textarea id="benefits" name="benefits" placeholder="Job Benefits" required></textarea>

            <input type="number" id="salary_min" name="salary_min" placeholder="Salary Min" required>

            <input type="number" id="salary_max" name="salary_max" placeholder="Salary Max" required>

            <input type="text" id="location" name="location" placeholder="Location" required>

            <select id="work_type" name="work_type" required>
                <option value="remote">Remote</option>
                <option value="on-site">On-site</option>
            </select>

            <div class="deadline-section">
    <label for="application_deadline">Deadline:</label>
    <input type="date" id="application_deadline" name="application_deadline" required>
</div>



            <button type="submit">Create Job</button>
        </form>
    </div>

</body>
</html>
