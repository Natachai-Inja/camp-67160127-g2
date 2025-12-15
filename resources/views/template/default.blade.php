<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        camp-67160127-g2
    </title>

    <style>
        body {
            background-color: #1e90ff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select, textarea {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input.error,
        textarea.error,
        select.error {
            border-color: red;
        }

        small {
            color: red;
            font-size: 12px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        button {
            padding: 8px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #resetBtn { background: #ff4d4d; color: white; }
        #saveBtn { background: #4caf50; color: white; }
    </style>
    
</head>

<body>

    <div class="container">
        <h1>
        @yield('content')
    </h1>
    </div>
   
    @stack('scripts')

</body>

</html>