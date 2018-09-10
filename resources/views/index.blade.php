<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Pulling in Bootstrap core CSS for brevity. Would use concatonated version in production -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Upshoot Motorbikes</title>

    <body>
        <header>

            <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
              <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Upshoot Motorbikes</a>
            </nav>

        </header>
        <main class="container pt-5">
            <section class="colour-count pt-3">
                <h2>Motorbike Colour Count</h2>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Colour</th>
                            <th>Total</th>
                        </tr>

                    </thead>
                    <tbody>

                    @foreach ($colour_count as $key => $value)

                        <tr>
                            <td>{{ $key }}</td>
                            <td><?= ($value) ? count($value) : ''; ?></td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </section>

            <section class="motorbike-owners pt-3">
                <h2>Motorbikes And Their Owners</h2>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Owner</th>
                            <th>Brand</th>
                            <th>Colour</th>
                            <th>Model Year</th>
                        </tr>

                    </thead>
                    <tbody>

                    @foreach ($motorbikes as $motorbike)

                        <tr>
                            <td><?= ($motorbike->name) ? $motorbike->name : 'NULL'; ?></td>
                            <td>{{ $motorbike->brand }}</td>
                            <td>{{ $motorbike->colour }}</td>
                            <td>{{ $motorbike->year }}</td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </section>
        </main>
    </body>
</html>


