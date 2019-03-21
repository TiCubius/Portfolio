@extends("includes.template")

@section("header")
    <div id="header">
        <h2 id="title">KEVIN TARTIERE</h2>
        <p id="description">
            Passioné par l'informatique et le high-tech, <br>
            notamment le développement et l'administration <br>
            des systèmes d'informations.
        </p>
        <div id="links">
            <a class="link btn-primary" href="https://github.com/TiCubius" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a class="link btn-primary" href="https://gitlab.com/TiCubius" target="_blank">
                <i class="fab fa-gitlab"></i>
            </a>
            <a class="link btn-primary" href="mailto:ktartiere@gmail.com" target="_blank">
                <i class="far fa-envelope"></i>
            </a>
        </div>
    </div>
@endsection

@section("content")
    <div id="projects">
        <div id="filters">
            <div class="filter btn-primary">FrontEnd</div>
            <div class="filter btn-primary">BackEnd</div>
            <div class="filter btn-primary">SysAdmin</div>
        </div>
        <div id="list">
            @foreach($projects as $project)
                <a class="js-project" href="{{ route("projects.show", [$project]) }}">
                    <div class="project" style="background: {{ $project->primary_color }}" data-tags="{{ $project->tags->implode('name', ',') }}">
                        <img class="image" src="{{ asset("storage/images/projects/{$project->id}/thumbnail.png") }}" alt="{{ $project->title }}">
                        <h4>{{ $project->title }}</h4>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection

@section("scripts")

    <script>
        document.querySelectorAll(`.filter`).forEach((filter) => {

            filter.addEventListener(`click`, (e) => {

                // We add or remove the `active` class on the filter
                if (e.currentTarget.classList.contains(`active`)) {
                    e.currentTarget.classList.remove(`active`)
                } else {
                    e.currentTarget.classList.add(`active`)
                }

                // Push each `active` filters in an array
                let filters = []
                document.querySelectorAll(`.filter.active`).forEach((filter) => {
                    filters.push(filter.innerHTML)
                })

                // Loop through each project
                document.querySelectorAll(`.project`).forEach((project) => {
                    // We clear previous search results
                    project.classList.remove(`hidden`)

                    // Fetch the project's tags
                    let tags = project.dataset.tags.split(`,`)

                    // Check weather or not the project has all the searched filters
                    let hasTags = filters.every(function (tag) {
                        return tags.indexOf(tag) !== -1
                    })

                    if (!hasTags) {
                        project.classList.add(`hidden`)
                    }
                })
            })

        })

        document.querySelectorAll(`.js-project *`).forEach((project) => {
            project.addEventListener(`mouseover`, (e) => {
                document.querySelector(`html`).style.background = project.style.background
            })

            project.addEventListener(`mouseleave`, (e) => {
                document.querySelector(`html`).style.background = "#364BB6"
            })
        })


    </script>

@endsection
