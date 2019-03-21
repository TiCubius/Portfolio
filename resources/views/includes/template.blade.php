<!DOCTYPE html>
<html>
    <head>
        <title>Kevin Tartiere | Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans:200,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <link rel="stylesheet" href="{{ asset("css/highlight.css") }}">
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

        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad()</script>
        <script>
            document.querySelectorAll(`.js-slider`).forEach((slider) => {
                console.log(slider.innerHTML)
            })
        </script>
        @yield("scripts")
    </body>
</html>
