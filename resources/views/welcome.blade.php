<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        form .row {
            display: block;
            padding: 7px 8px;
            margin-bottom: 7px;
        }
        form .row:hover {
            background: #f1f7fa;
        }
        form label {
            display: inline-block;
            font-size: 1.2em;
            font-weight: bold;
            width: 120px;
            padding: 6px 0;
            color: #464646;
            vertical-align: top;
        }
        form .req { color: #ca5354; }
        form .note {
            font-size: 1.2em;
            line-height: 1.33em;
            font-weight: normal;
            padding: 2px 7px;
            margin-bottom: 10px;
        }
        form input:focus { outline: none; }
        ::-webkit-input-placeholder { color: #aaafbd; font-style: italic; }
        :-moz-placeholder { color: #aaafbd; font-style: italic; }
        ::-moz-placeholder { color: #aaafbd; font-style: italic; }
        :-ms-input-placeholder { color: #aaafbd; font-style: italic; }
        form .txt {
            display: inline-block;
            padding: 8px 9px;
            padding-right: 30px;
            width: 240px;
            font-family: 'Oxygen', sans-serif;
            font-size: 1.35em;
            font-weight: normal;
            color: #898989;
            background-color: #f0f0f0;
            background-position: 110% center;
            background-repeat: no-repeat;
            border: 1px solid #ccc;
            text-shadow: 0 1px 0 rgba(255,255,255,0.75);
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
            -moz-box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
            box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
            -webkit-transition: all 0.3s linear;
            -moz-transition: all 0.3s linear;
            transition: all 0.3s linear;
        }
        .btn {
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        } 
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div id="app">
            <example-component></example-component>
        </div>
    </div>
</body>
</html>
