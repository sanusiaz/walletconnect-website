<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Zwalletconnect - @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vault.css') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- responsive-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <style type="text/css">
          .form-contents {
            width: 400px;
          }

          .connect_wrapper {
            margin: 0px 100px;
          }

          .grid_container div {
                margin: auto;
                align-items: center;
                justify-content: center;
                justify-items: center;
                justify-self: center;
          }

          @media screen and (max-width: 1200px) {

          }

          @media screen and (max-width: 700px) {
            .connect_wrapper {
                margin: 0px;
            }
          }

          @media screen and (max-width: 500px) {
            .connect_wrapper {
                margin: 0px 5px;
            }
            header {
                padding: 20px 0px;
            }
            .form-contents {
                width: 300px;
            }
            form#login_form {
                width: 100% !important;
            }
            form#login_form .form-contents {
                width: 100% !important;
            }
          }

          form.news_letter_form  .email{
                background: transparent;
                border: 1px solid white;
                padding: 10px 15px !important;
                /* display: block; */
                position: relative;
                border-radius: 2px;
                color: white;
                margin: 10px 0px;
          }
      </style>
</head>
<!-- body -->

<body class="main-layout">
    @include('include.loader')
    @include('include.sidebar')
    @include('include.header')
    



    @yield('contents')
    @include('include.footer')

    <script type="text/javascript">
        $('.social_icon ').hide();

        var currentYear= new Date().getFullYear(); 
        $('.year').html(`${currentYear}`);

    </script>
</body>
</html>