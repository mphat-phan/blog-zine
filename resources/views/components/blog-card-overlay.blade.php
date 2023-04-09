@props(['post'])

<div class="col ">
    <div class="card card-blog border-0 bg-transparent">
        <div class="card-img " onclick="window.location='http://google.com';">
            @if(File::exists('images/'.$post->image))
                <img src="{{asset('images/'.$post->image)}}" class="card-img-top object-fit h-500" alt="Image">
            @elseif(!is_null($post->image))
                <img src="{{$post->image}}" class="card-img-top object-fit h-500" alt="Image">
            @else
                <img src="{{asset('images/No-Image-Placeholder.svg.png')}}" class="card-img-top object-fit h-500" alt="Image">
            @endif
        </div>
        <div class="card-img-overlay d-flex px-3 flex-column justify-content-end">
            <div><span class="badge bg-danger">Technology</span></div>
            <div class="mt-auto w-100 card-img-overlay-bottom">
                <h5 class="card-title "><a href="/post/{{$post->slug}}/{{$post->id}}"
                        class="text-white fw-bolder text-decoration-none">{{$post->title}}</a></h5>
                <ul class="nav nav-divider d-md-flex align-items-center">
                    <li class="nav-item p-0">
                        <div class="d-flex gap-2 align-items-center">
                            <div class="avatar">
                                <img class="rounded-circle"
                                    src="https://blogzine.webestica.com/assets/images/avatar/01.jpg" alt="Avatar">
                            </div>
                            <div class="align-self-center" style="font-size: 14px">by<a href="#">
                                    {{$post->user->name}}</a></div>
                        </div>
                    </li>
                    <li class="nav-item align-self-center p-0" style="font-size: 14px">
                        {{date('F j, Y',strtotime($post->created_at))}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
