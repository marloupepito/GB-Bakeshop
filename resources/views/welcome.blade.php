<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <title>GB Bakeshop</title>
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
        <!-- Fonts -->
      
        <!-- Styles -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            div.menu-profile-cover{
                background-image: url('/images/background.png') !important;
                 display: block;
                  margin-left: auto;
                  margin-right: auto;

                }
                span.logo{
                    background-image: url('/images/logo.png') !important;
                }
              a.nav-link.completed{
                border-color: #ff4d4d !important;
                background-color: #ff4d4d !important;
              }
              a.nav-link.active{
                border-color: #ff4d4d !important;
                background-color: #ff4d4d !important;
              }
              a.nav-link.completed:after{
                border-color: #ff4d4d !important;
                background-color: #ff4d4d !important;
              }a.nav-link.active:after{
                border-color: #ff4d4d !important;
                background-color: #ff4d4d !important;
              }a.nav-link.active:before{
                border-color: #ff4d4d !important;
                background-color: #ff4d4d !important;
              }
              .bg-danger{
                 background-color: #ff4d4d !important;
              }
              .btn-danger{
                background-color: #ff4d4d !important;
              }
              .productionFixed {
                    position:fixed !important;
                  }
              @media only screen and (max-width: 600px) {
                  .productionFixed {
                    position:'' !important;
                  }
                }
                div.vs__actions{
                    padding-left: 0px !important;
                }
                button.vs__clear{
                    display: none !important
                }
               
        </style>
    </head>
    <body>
        <div id="app">
            <root-app></root-app>
        </div>
    </body>
    <script>
        
        //      function preventBack() { window.history.forward(); }
        // setTimeout("preventBack()", 0);
        // window.onunload = function () { null };
        
    </script>
    
</html>
