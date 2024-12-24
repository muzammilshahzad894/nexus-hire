<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Confirmation</title>
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
                    <h4>Application Received!</h4>
                </div>
                <p>Dear {{ $name }},</p>
                <p>Thank you for applying for the position of <strong>{{ $jobTitle }}</strong> at our company. We have received your application and will review it shortly.</p>
                <p>If your profile matches our requirements, we will contact you for further steps.</p>
                <p>Meanwhile, feel free to explore our website for more details about our company and job opportunities.</p>

                <a href="{{ url('/') }}" class="btn action-btn">Visit Website</a>
            </div>
            <div class="footer">
                <p class="copyText text-center mt-1 mb-1">&copy; {{ date('Y') }} Nexus Hire. All rights reserved.</p>
            </div>
        </div>
    </div>
</body>
</html>

