<!DOCTYPE html>
<html>
    <head>
        <title>Kevin Tartiere | Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">
        <link href="{{ asset("assets/css/libs.min.css") }}" rel="stylesheet">
        <script defer>

            let bgAnimate = setInterval(() => {
                if (document.querySelector(`html`).style.background === `rgb(34, 45, 49) none repeat scroll 0% 0%`) {
                    document.querySelector(`html`).style.background = `#364BB6`
                } else {
                    document.querySelector(`html`).style.background = `#222d31`
                }
            }, 1000)

            window.onload = () => {
                clearInterval(bgAnimate)
                if (typeof(primaryColor) !== "undefined") {
                    document.querySelector(`html`).style.background = primaryColor
                } else {
                    document.querySelector(`html`).style.background = `#364BB6`
                }
            }

        </script>
    </head>
    <body>

        @yield("header")
        @yield("content")

        {{--<script src="{{ asset("js/libs/webpjs-0.0.2.min.js") }}"></script>--}}
        <script src="{{ asset("assets/js/libs/highlight.min.js") }}"></script>
        <script>hljs.initHighlightingOnLoad()</script>
        <script>
            document.querySelectorAll(`.js-slider`).forEach((slider) => {
                console.log(slider.innerHTML)
            })
        </script>
        @yield("scripts")
    </body>
</html>
