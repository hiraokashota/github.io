<html>
    <head>
        <title>Hello/Index</title>
        <style>
        body{font-size:16pt; color:#999;}
        h1{font-size: 100pt; text-align:right; color:#eee;
            margin:-40px 0px -50px 0px;}
        </style>
    </head>
    <body>
            <h1>Index</h1>

        @if ($reports->isNotEmpty())
            <ul>
                @foreach ($reports as $item)
                    <li>
                        {{ $item->goal_value }}<br>
                        {{ $item->created_at }}<br>
                        {{ $item->updated_at }}<br>
                        {{ $item->alc_name1 }}
                    </li>
                @endforeach
            </ul>
        @endif
    </body>
</html>