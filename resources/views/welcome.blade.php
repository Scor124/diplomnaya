<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auth</title>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.7.8/dist/vue.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <ol>
            @foreach($users as $tvp)
                <li>
                    <label>{{ $tvp->FIO }}</label>
                </li>
            @endforeach
        </ol>
    <div class="align-content-center">
        <ul>
            @foreach(\App\Http\Controllers\StaffController::allStaff() as $pre)
                <li>
                    <label>{{ $pre->FIO }}</label>
                </li>
            @endforeach
        </ul>
    </div>
    </body>
</html>
