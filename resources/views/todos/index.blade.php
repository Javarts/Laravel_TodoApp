<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TODOS ::.. APP</title>

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- Bootstrap --}}
        <link rel="stylesheet" href="/css/bootstrap.min.css" >
        {{-- Font awesome --}}
        <link rel="stylesheet" href="/css/font-awesome.min.css" >
        {{-- custom styles --}}
        <link rel="stylesheet" href="/css/style.css" >

        {{-- Scripts --}}
        <script src="/js/bootstrap.min.js"></script>

    </head>
    <body>

        <div class="container panel-container col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>WELCOME TODOS APP <span class="fa fa-edit"></span></h1>
                </div>

                <div class="panel-body">
                    @foreach ($todos as $todo)
                        <ul>
                            <li>
                                {{ $todo->name }}
                            </li>
                        </ul>

                        <button class="btn btn-primary">
                            view all
                        </button>
                    @endforeach
                </div>

                <div class="panel-footer">
                    <p>this is a footer</p>
                </div>
            </div>
        </div>
    </body>
</html>
