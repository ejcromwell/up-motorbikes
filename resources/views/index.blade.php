<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upshoot Motorbikes</title>

    </head>
    <body>
        <header>
            Upshoot Motorbikes
        </header>
        <section>
           <h2>Count</h2>
           <table>
                <tr>
                     <th>Colour</th>
                     <th>Total</th>
                </tr>
                @foreach ($motorbikes as $key => $value)
                    <tr>
                        <td>{{ $key }}</td>
                        <td><?php echo count($value) ?></td>
                    </tr>
                @endforeach
            </table>
        </section>

        <section>
           <h2>Owners</h2>
           <table>
                <tr>
                   <th>Owner</th>
                   <th>Brand</th>
                   <th>Colour</th>
                   <th>Model Year</th>
                </tr>
                <tr>
                    <td>
                        output
                    </td>
                    <td>
                        output
                    </td>
                    <td>
                        output
                    </td>
                    <td>
                        output
                    </td>
                </tr>
           </table>
        </section>
    </body>
</html>
