<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Page Not Found</title>
    @vite(['resources/css/app.css'])
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
        }

        .error-container {
            max-width: 500px;
        }

        .error-image {
            width: 100px;
            margin: 0 auto 20px;
        }

        .error-code {
            font-size: 3rem;
            font-weight: bold;
            margin: 0;
        }

        .error-message {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .error-description {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1 class="error-code">404</h1>
        <p class="error-message">The page you were looking for doesn't exist.</p>
        <p class="error-description">You may have mistyped the address or the page may have moved.</p>
        <a href="{{route('home')}}">
            <button class="btn btn-primary">Go Back</button>
        </a>
    </div>
</body>
</html>
