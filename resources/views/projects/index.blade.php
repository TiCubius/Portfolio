@extends("includes.template")

@section("header")
    <section id="header" class="header">
        <h2 class="header-title">
            Kevin Tartiere
            <br>
            <strong>DEVELOPPEUR WEB</strong>
        </h2>

        <p class="header-description">
            Passioné par l'informatique et le high-tech, notamment le développement et l'administration des systèmes d'informations. <br>
            J'ai obtenu un BAC S en 2017 et je suis actuellement en deuxième année en BTS Services Informatique aux Organisations
        </p>

        <div class="header-links">
            <a href="https://github.com/TiCubius">
                <button class="btn">
                    <i class="fab fa-github"></i>
                </button>
            </a>
            <a href="https://gitlab.com/TiCubius">
                <button class="btn">
                    <i class="fab fa-gitlab"></i>
                </button>
            </a>
            <a href="https://twitter.com/TiCubius">
                <button class="btn">
                    <i class="fab fa-twitter"></i>
                </button>
            </a>
            <a href="mailto:ktartiere@gmail.com">
                <button>
                    <i class="far fa-envelope"></i>
                </button>
            </a>
        </div>
    </section>
@endsection

@section("content")
    <section id="portfolio" class="portfolio">
        @foreach($projects as $project)
            <div class="project">
                <img class="project-image" src="{{ asset("images/projects/{$project->id}/thumbnail.png") }}">
                <div class="project-details">
                    <h2 class="project-title">{{  $project->title }}</h2>
                    <p class="project-description">
                        {{  $project->description }}
                    </p>
                    <button class="btn">
                        <a href="{{ route("projects.show", [$project->id]) }}">En savoir plus</a>
                    </button>
                </div>
            </div>
        @endforeach
    </section>
@endsection
