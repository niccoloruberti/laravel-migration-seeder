<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="my-5">Treni della giornata</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Partenza</th>
                    <th scope="col">Arrivo</th>
                    <th scope="col">In Orario</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                <tr>
                    <th scope="row">{{ $train->codice_treno}}</th>
                    <td>{{ $train->stazione_di_partenza. ' - ' .$train->orario_di_partenza}}</td>
                    <td>{{ $train->stazione_di_arrivo. ' - ' .$train->orario_di_arrivo}}</td>
                    <td><i class="{{$train->in_orario ? 'fas fa-check' : 'fas fa-x'}}"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>