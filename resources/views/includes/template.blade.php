<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Kevin Tartiere | Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">

        <script defer>

            let bgAnimate = setInterval(() => {
                if (document.querySelector(`html`).dataset.bg === `#222d31`) {
                    document.querySelector(`html`).style.background = `#364BB6`
                    document.querySelector(`html`).dataset.bg = `#364BB6`
                } else {
                    document.querySelector(`html`).style.background = `#222d31`
                    document.querySelector(`html`).dataset.bg = `#222d31`
                }
            }, 1000)

            window.onload = () => {
                clearInterval(bgAnimate)
                if (typeof (primaryColor) !== "undefined") {
                    document.querySelector(`html`).style.background = primaryColor
                } else {
                    document.querySelector(`html`).style.background = `#364BB6`
                }
            }

        </script>
    </head>
    <body>
        <link href="{{ asset("assets/css/libs.min.css") }}" rel="stylesheet">

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
