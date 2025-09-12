<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            align-items: center;
            justify-content: center;
            color: #333;
            line-height: 1.6;
        }

        .container {
            text-align: center;
            padding: 2rem;
        }

        .error-code {
            font-size: 8rem;
            font-weight: 700;
            color: #0b1e3f;
            margin-bottom: 1rem;
        }

        .title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: #0b1e3f;
        }

        .message {
            font-size: 1.125rem;
            margin-bottom: 2.5rem;
            color: #0b1e3f;
            max-width: 480px;
            margin-left: auto;
            margin-right: auto;
        }

        .button-container {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .home-btn {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            font-size: 1rem;
            border: 2px solid transparent;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #dc3187;
            color: white;
        }

        .btn-primary:hover {
            background-color: #b8296e;
        }

        .btn-secondary {
            background-color: transparent;
            color: #b8c5d6;
            border-color: #dc3187;
        }

        .btn-secondary:hover {
            background-color: #0b1e3f;
            color: #dc3187;
            border-color: #dc3187;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1.5rem;
            }
            
            .error-code {
                font-size: 6rem;
            }
            
            .title {
                font-size: 2rem;
            }
            
            .message {
                font-size: 1rem;
            }
            
            .button-container {
                flex-direction: column;
                align-items: center;
            }
            
            .home-btn {
                width: 200px;
            }
        }

        @media (max-width: 480px) {
            .error-code {
                font-size: 4.5rem;
            }
            
            .title {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <h1 class="title">Page Not Found</h1>
        <div class="button-container">
            <a href="https://mavixtech.com/" class="home-btn btn-primary mt-5">Go to Homepage</a>
        </div>
    </div>
</body>
</html>