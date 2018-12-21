<!DOCTYPE html>
<html>
<head>
    <title>Kevin Tartiere | Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans:200,400,600,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <link rel="stylesheet" href="{{ asset("css/highlight.css") }}">
</head>
<body>

    @yield("header")
    <section class="navbar">
        <div class="navbar-links">
            <a href="{{ route("projects.index") }}">Mes projets</a>
            <a href="#">BLOG</a>
        </div>
    </section>
    @yield("content")

    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad()</script>
    @yield("scripts")
</body>
</html>
