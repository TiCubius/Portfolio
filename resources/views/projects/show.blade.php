@extends("includes.template")
@section("content")

    <div class="project-show">
        <div class="markdown-body">

            @markdown
            {!! $project->content !!}
            @endmarkdown
        </div>
    </div>

@endsection
