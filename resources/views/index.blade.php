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
                @foreach ($colour_count as $key => $value)
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

                @foreach ($motorbikes as $motorbike)
                    <tr>
                        <td><?= ($motorbike->name) ? $motorbike->name : 'NULL'; ?></td>
                        <td>{{ $motorbike->brand }}</td>
                        <td>{{ $motorbike->colour }}</td>
                        <td>{{ $motorbike->year }}</td>
                    </tr>
                @endforeach
           </table>
        </section>
    </body>
</html>
