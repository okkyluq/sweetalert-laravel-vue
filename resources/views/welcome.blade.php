<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app" class="container">
            <my-nav></my-nav>
            <router-view></router-view>       
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>

    <style>
        /* Space out content a bit */
        body {
          padding-top: 20px;
          padding-bottom: 20px;
        }

        /* Everything but the jumbotron gets side spacing for mobile first views */
        .header,
        .marketing,
        .footer {
          padding-right: 15px;
          padding-left: 15px;
        }

        /* Custom page header */
        .header {
          padding-bottom: 20px;
          border-bottom: 1px solid #e5e5e5;
        }
        /* Make the masthead heading the same height as the navigation */
        .header h3 {
          margin-top: 0;
          margin-bottom: 0;
          line-height: 40px;
        }

        /* Custom page footer */
        .footer {
          padding-top: 19px;
          color: #777;
          border-top: 1px solid #e5e5e5;
        }

        /* Customize container */
        @media (min-width: 768px) {
          .container {
            max-width: 730px;
          }
        }
        .container-narrow > hr {
          margin: 30px 0;
        }

        /* Main marketing message and sign up button */
        .jumbotron {
          text-align: center;
          border-bottom: 1px solid #e5e5e5;
        }
        .jumbotron .btn {
          padding: 14px 24px;
          font-size: 21px;
        }

        /* Supporting marketing content */
        .marketing {
          margin: 40px 0;
        }
        .marketing p + h4 {
          margin-top: 28px;
        }

        /* Responsive: Portrait tablets and up */
        @media screen and (min-width: 768px) {
          /* Remove the padding we set earlier */
          .header,
          .marketing,
          .footer {
            padding-right: 0;
            padding-left: 0;
          }
          /* Space out the masthead */
          .header {
            margin-bottom: 30px;
          }
          /* Remove the bottom border on the jumbotron for visual effect */
          .jumbotron {
            border-bottom: 0;
          }
        }

    </style>
</html>
