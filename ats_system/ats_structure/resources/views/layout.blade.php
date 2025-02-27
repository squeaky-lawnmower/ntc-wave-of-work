<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Norwegian Training Center')</title>
    <link href="{{ asset('/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    
    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"-->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet"> 
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/favicon.ico')}}">

    <script defer src="{{ asset('/js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <!--script defer src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script defer>
      $(function () {
          $("#datepicker").datepicker({ 
              autoclose: true, 
              todayHighlight: true,
              todayBtn : "linked",
              title : "Geeksforgeeks datepicker"
          }).datepicker('update', new Date());
      });
  </script-->

  </head>
  <body>
    @include('include.alert')
    @include('include.header')
    <div class="mt-10">&nbsp;</div>
    @yield('content')
    @include('include.footer')
  </body>
</html>