@props(['post'])
@props(['isSummary'])

<div class="card card-blog col border-0 bg-transparent overflow-hidden">
    <div class="card-img">
        <a href="/post/{{$post->slug}}/{{$post->id}}">
            <img src="{{$post->image}}" class="card-img-top card-img" alt="Image">
        </a>
        <span class="badge bg-danger card-blog-badge">Technology</span>
    </div>
    <div class="card-body p-0 mt-3">
    <h5 class="card-title "><a href="/post/{{$post->slug}}/{{$post->id}}" class="text-white fw-bolder text-decoration-none">{{$post->title}}</a></h5>
    @if($isSummary)
        <p class="card-text" style="font-size: 16px">{{$post->summary}}</p>
    @endif
    <ul class="nav nav-divider d-md-flex align-items-center">
        <li class="nav-item p-0">
            <div class="d-flex gap-2 align-items-center">
                <div class="avatar">
                    <img class="rounded-circle" src="https://blogzine.webestica.com/assets/images/avatar/01.jpg" alt="Avatar">
                </div>
                <div class="align-self-center" style="font-size: 14px">by<a href="#" class="text-white text-decoration-none"> {{$post->user->name}}</a></div>
            </div>
        </li>
        <li class="nav-item align-self-center p-0" style="font-size: 14px">
            {{date('F j, Y',strtotime($post->created_at))}}
        </li>
    </ul>
    </div>
</div>
