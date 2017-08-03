<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>William Naughton-Gravette</title>
        <link href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <div class="pure-g">
                <div class="pure-u-4-24">

                </div>
                <div class="pure-u-16-24">
                    <div class="l-box">
                        <h1>&larr; Go back</h1>
                    </div>
                </div>
                <div class="pure-u-4-24">

                </div>
            </div>
        </header>
        <div class="pure-g essay">
            <div class="pure-u-7-24">

            </div>
            <div class="pure-u-7-24">
                <h2>
                    {{$essay->title}}
                </h2>
                {!! $essay->essay !!}
                <h4>References</h4>
                <p class="ref">
                    Brown, O, Hammill, A, McLeman, R 2007, ‘Climate change as the ‘new’ security threat: implications for Africa’, <em>International Affairs</em>, vol. 83, no. 6, pp. 1141–1154.
                </p>
                <p class="ref">
                    Brzoska, M 2009, ‘The securitization of climate change and the power of conceptions of security’, <em>Sicherheit und Frieden (Security and Peace)</em>, vol. 3, no. 1, pp. 137–145.
                </p>
            </div>
            <div class="pure-u-10-24">

            </div>
        </div>
    </body>
</html>
