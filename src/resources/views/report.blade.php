<html>
    <head>
        <title>レポート</title>
        <style>
        body{font-size:16pt; color:#999;}
        h1{font-size: 40pt; text-align: center;
            }
        </style>
    </head>
    <body>
            <h1>レポート</h1>

        @if ($reports->isNotEmpty())
            <ul>
                @foreach ($reports as $report)
                    <li>
                        {{ $report->goal_value }}<br>
                        {{ $report->created_at }}<br>
                        {{ $report->updated_at }}<br>
                        {{ $report->alc_name1 }}
                    </li>
                @endforeach
            </ul>
        @endif
    </body>
</html>