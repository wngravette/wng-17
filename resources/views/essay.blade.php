<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>William Naughton-Gravette</title>
        <link href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
        <meta property="og:title" content="{{$essay->title}}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="wpsng.xyz/essays/{{$essay->id}}/{{$essay->slug}}" />
        <meta property='article:author' content='https://www.facebook.com/wpsng' />
        <meta property='og:site_name' content='William Naughton-Gravette' />
    </head>
    <body>
        <header>
            <div class="pure-g">
                <div class="pure-u-4-24">

                </div>
                <div class="pure-u-16-24">
                    <div class="l-box">
                        <h1>William Naughton-Gravette</h1>
                    </div>
                </div>
                <div class="pure-u-4-24">

                </div>
                <div class="pure-u-4-24">

                </div>
                <div class="pure-u-16-24">
                    <div class="l-box">
                        <h1><a onclick="window.history.go(-1); return false;">&larr; Go back</a></h1>
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
            </div>
            <div class="pure-u-10-24">
            </div>
        </div>
    </body>
</html>
