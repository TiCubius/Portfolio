@extends("includes.template")

@section("content")

    <div id="project">
        <div class="header">
            <h4 class="title">{{ $project->title }}</h4>
            <p class="tags">
                    {{ join(', ', $project->tags->pluck('name')->sort()->toArray()) }}
            </p>
        </div>

        <div id="content" class="content">
            @markdown
            {!! $project->content !!}
            @endmarkdown
        </div>

        <div id="links" class="links">
            <a href="{{ route("projects.index") }}">
                <button>Retour</button>
            </a>
        </div>
    </div>

@endsection

@section("scripts")
    <script async>
        const primaryColor = `{{ $project->primary_color }}`

        document.querySelector(`html, body`).style.background = primaryColor
        document.querySelectorAll(`#content button`).forEach((button) => {
            button.style.background = primaryColor
            button.style.border = `1px solid ${primaryColor}`

            button.addEventListener(`mouseover`, () => {
                button.style.background = `transparent`
                button.style.color = primaryColor
            })

            button.addEventListener(`mouseout`, () => {
                button.style.color = `white`
                button.style.background = primaryColor
            })
        })

        document.querySelectorAll(`#links button`).forEach((button) => {
            button.style.background = `transparent`
            button.style.border = `1px solid white`

            button.addEventListener(`mouseover`, () => {
                button.style.background = `white`
                button.style.color = primaryColor
            })

            button.addEventListener(`mouseout`, () => {
                button.style.background = `transparent`
                button.style.color = `white`
            })
        })
    </script>
@endsection
