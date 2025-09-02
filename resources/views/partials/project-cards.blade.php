@foreach($projects as $project)
    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
        <div class="project" @if($project->image) style="background-image: url('{{ asset($project->image) }}');" @endif>
            <div class="desc">
                <div class="con">
                    <h3><a href="work.html">{{ $project->title }}</a></h3>
                    <span>{{ Str::limit($project->description, 100) }}</span>
                    <p class="icon">
                        <span><a href="{{ $project->url ?? '#' }}"><i class="icon-share3"></i></a></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach
