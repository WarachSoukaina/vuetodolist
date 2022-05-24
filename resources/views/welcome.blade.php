<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TO DO List BY WS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        
    </head>
    <body class="image">
       
        <div id="app" class="todo">
          
            <hello-world />
            
        </div>

    </body>
    <style>
        .image{
            background-image: url('/img/bg1.jpg');
            background-repeat: no-repeat;
            height: 100%; 
        }
        .todo{
          
           border-radius: 10px;
           margin: 10%;
        }
    </style>

    <script src="{{ mix('js/app.js') }}"></script>
</html>
