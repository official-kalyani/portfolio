@foreach($projects as $project)
    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="project" style="background-image: url('{{ asset($project->image) }}');">
            <div class="desc">
                <div class="con">
                    <h3><a href="@if($project->url) {{ $project->url }} @endif">{{ $project->title }}</a></h3>
                    <span>{{ Str::limit($project->description, 100) }}</span>
                    <p class="icon">
                        @if($project->url)
                            <span><a href="{{ $project->url }}"><i class="icon-share3"></i></a></span>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
