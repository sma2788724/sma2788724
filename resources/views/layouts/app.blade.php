<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/css/intlTelInput.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto:400,700|Open Sans:400,700|Abel:400,700|Raleway:400,700|Oxygen:400,700|" rel="stylesheet">
    
    <title>@yield('title')</title>
    <style>
        #main .card-header p {
          font-family: Abel;
        }

        .open-sans {
          font-family: 'Open Sans' !important;
        }
        .fs-35px{
          font-size: 35px !important;
        }
        p {
          font-size: 28px !important;
          line-height: 1.3em !important;
        }
        #cover {
            background-size: 100% auto !important;
            -webkit-background-size: 100% auto !important;
            background-repeat: no-repeat !important;
        }
        #cover::before{
            content: "";
            background: url("{{ url('bg-cover.jpeg') }}");
            opacity: .8;
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            position: fixed;
        }
        .iti.iti--allow-dropdown{
          width: 100% !important;
        }
        .bg-custom-primary {
          background-color: rgb(0, 117, 178)
        }
        #main {
          border: 0;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://storage.googleapis.com/preview-production-assets/funnel/intl-tel-input/intlTelInput.min.js"></script>
    @toastr_css
  </head>
  <body id="cover">
      @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @toastr_js
    @toastr_render
    @yield('script')
  </body>
</html>