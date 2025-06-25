<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Application Submitted</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (if your project uses it) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f8fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
        }

        .success-box {
            background: #fff;
            padding: 40px 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .success-box img {
            width: 100px;
            margin-bottom: 20px;
        }

        .success-box h2 {
            color: #30af4b;
            margin-bottom: 15px;
        }

        .success-box p {
            color: #555;
        }

        .success-box .btn-home {
            margin-top: 25px;
            background-color: #30af4b;
            color: white;
            border: none;
        }

        .success-box .btn-home:hover {
            background-color: #28913d;
        }
    </style>
</head>

<body>

    <div class="success-box">
        <img src="<?= base_url('assets/images/check-green.gif') ?>" alt="Success Tick" />
        <h2>Application Submitted!</h2>
        <p>Thank you for applying. We’ll get back to you soon.</p>
        <a href="<?= base_url() ?>" class="btn btn-home">Go to Home</a>
    </div>

</body>

</html>