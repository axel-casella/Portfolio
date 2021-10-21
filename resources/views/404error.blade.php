<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>404 | Error</title>
        
        <!-- Styles -->
        <style>
                body {
                background-color: #212529;
                color: #fff;
                font-family: "Muli", sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                }

                .full-height {
                height: 100vh;
                }

                .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                }

                .position-r {
                position: relative;
                }

                .code {
                border-right: 3px solid;
                font-size: 55px;
                padding: 0 10px 0 10px;
                text-align: center;
                }

                .message {
                font-size: 40px;
                text-align: center;
                }
        </style>
    </head>
    <body>
        <div class="flex-center position-r full-height">
            <div class="code">404 </div>
            <div class="message" style="padding: 10px;">NOT FOUND </div>
        </div>
    </body>
</html>