<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Job Application</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .bg-danger {
        background-color: #010c29 !important;
    }
    th {
        color: white;
    }
    td {
        color: black;
        font-weight: 500;
    }
    .action-btn {
        background: #010c29;
        color: #fff;
        font-size: 14px;
    }
    .action-btn:hover {
        color: #fff;
    }
    .footer {
        font-size: 12px;
        color: white;
        padding-left: 20px;
    }
    .header, .footer {
        width: 100%;
        text-align: left;
        background-color: #010c29;
        padding: 10px 0;
    }
</style>
<body>
    <div class="container my-4">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <img src="{{ asset('frontend-assets/img/logo.png') }}" alt="logo"
                 style="height: 50px; width: 100px;" />
            </div>
            <div class="card-body">
                <div style="display: flex; justify-content: center; width: 100%; margin-bottom: 20px;">
                    <h4>New Job Application Received</h4>
                </div>
                <p>Dear Admin,</p>
                <p><strong>Applicant Details:</strong></p>
                <ul>
                    <li><strong>Name:</strong> {{ $name }}</li>
                    <li><strong>Email:</strong> {{ $email }}</li>
                    <li><strong>Contact:</strong> {{ $contact }}</li>
                    <li><strong>Message:</strong> {{ $user_message }}</li>
                </ul>
                
                <p>Click below to download the applicant's resume:</p>
                <a href="{{ $resumeUrl }}" class="btn action-btn">Download Resume</a>
            </div>
            <div class="footer">
                <p class="copyText text-center mt-1 mb-1">&copy; {{ date('Y') }} Nexus Hire. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>