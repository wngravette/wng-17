<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>William Naughton-Gravette</title>
        <link href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
        <script src="https://use.fontawesome.com/2aab5fdb89.js"></script>
    </head>
    <body>
        <header>
            <div class="pure-g">
                <div class="pure-u-4-24">

                </div>
                <div class="pure-u-16-24">
                    <div class="l-box">
                        <h1>William Naughton-Gravette &#8212; <span>reading Politics &amp; International Relations</span></h1>
                    </div>
                </div>
                <div class="pure-u-4-24">

                </div>
            </div>
        </header>
        <div class="pure-g">
            <div class="pure-u-4-24">

            </div>
            <div class="pure-u-9-24">
                @foreach ($posts as $post)
                <div class="pure-u-1">
                    <div class="l-box">
                        <p>
                            <span>{{$post->time}} &#8212;</span> {{$post->word_count}} words
                        </p>
                        <p>
                        {!! $post->post !!}
                        </p>
                    </div>
                </div>
                @if ($post->link)
                <div class="pure-u-10-24 link">
                        <div class="l-box">
                            <p>
                                <a href="{{$post->link}}" target="_blank">
                                    "{{$post->link_name}}"
                                </a>
                            </p>
                            <p class="site">
                                {{$post->link_site}} <i class="fa fa-external-link" aria-hidden="true"></i>
                            </p>
                        </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="pure-u-2-24">

            </div>
            <div class="pure-u-5-24 sidebar">
                <div class="pure-u-1">
                    <div class="l-box">
                        <p>
                            <span>Longer Writings</span>
                        </p>
                    </div>
                </div>
                <div class="pure-u-1 sidebar-item">
                    <div class="l-box">
                        <p>
                            <i>Understanding the Copenhagen School of Security Studies as a Lens to Approach the Problem of Global Climate Change <span>&#8212; 2017 &middot; 3261 words</span></i>
                        </p>
                    </div>
                </div>
                <div class="pure-u-1 sidebar-item">
                    <div class="l-box">
                        <p>
                            <i>A Discussion of the Relationship Between Resource Dependence and the Existence and Endurance of Authoritarianism in Africa <span>&#8212; 2017 &middot; 3324 words</span></i>
                        </p>
                    </div>
                </div>
                <div class="pure-u-1 sidebar-item">
                    <div class="l-box">
                        <p>
                            <i>Approaching Realist Arguments for the Iraq War (with a brief history of Realism) <span>&#8212; 2016 &middot; 2804 words</span></i>
                        </p>
                    </div>
                </div>
                <div class="pure-u-1 sidebar-item">
                    <div class="l-box">
                        <p>
                            <i>The Media Cycle & Corporate Pressures of the 21st Century, and its Implications for Investigative Journalism <span>&#8212; 2016 &middot; 2301 words</span></i>
                        </p>
                    </div>
                </div>
                <div class="pure-u-1 sidebar-item">
                    <div class="l-box">
                        <p>
                            <i>Evaluating Australia's Increasingly Unstable Electorate <span>&#8212; 2016 &middot; 2197 words</span></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="pure-u-5-24">

            </div>
        </div>
    </body>
</html>
