@section('meta_tags')
    <title>{{$post->title}} - {{env('SITE_URL', 'Site Name')}}</title>
    <meta name='description' itemprop='description' content='{{$post->summary}}' />
    <meta property='article:published_time' content='{{$post->created_at}}' />
    <meta property='article:section' content='event' />
    <meta property="og:description" content="{{$post->summary}}" />
    <meta property="og:title" content="{{$post->title}}" />

    {{-- <meta name='keywords' content='{{$tags}}' /> --}}

    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="en-us" />
    <meta property="og:site_name" content="{{env('SITE_URL', 'Site Name')}}" />
    {{-- @foreach($obj->images as $image)
        <meta property="og:image" content="{{$image->url}}" />
    @endforeach --}}
    {{-- <meta property="og:image:url" content="{{obj->image}}" /> --}}
    <meta property="og:image:size" content="300" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{$post->title}}" />
    {{-- <meta name="twitter:site" content="@BrnBhaskar" /> --}}
@endsection
<x-layout>
<div class="header-post py-3 py-lg-5">
    <div class="badge bg-primary mb-2">Lifestyle</div>
    <h1 class="text-white fw-bolder">{{$post->title}}</h1>
    <h6 class="fw-normal">{{$post->summary}}</h6>
</div>
<div class="center-post ">
    <div class="row mt-0 gx-4 gy-3">
        <div class="col-12 col-lg-3 p-0">
            <div class="info-section d-flex justify-content-start align-items-start align-items-lg-center flex-column px-3 gap-2 text-center">
                <div class="info-author d-flex justify-content-between align-items-center flex-column gap-2">
                    <div class="info-author-avatar">
                        <img class="img-fluid rounded-circle" style="width:100px" src="https://blogzine.webestica.com/assets/images/avatar/03.jpg" alt="Avatar">
                    </div>
                    <div class="info-author-name">
                        <a href="">{{$post->user->name}}</a>
                    </div>
                </div>
                <div class="divider d-none d-lg-block"></div>
                <div class="info-post d-flex justify-content-between align-items-center flex-row flex-lg-column gap-3 flex-wrap">
                    <div class="info-post-date">{{date('F j, Y',strtotime($post->created_at))}}</div>
                    <div class="info-post-time">5 min read</div>
                    <div class="info-post-react"><i class="bi bi-heart"></i>&nbsp;<span>256</span></div>
                    <div class="info-post-view"><i class="bi bi-eye"></i>&nbsp;<span>25634</span></div>
                    <div class="info-post-tags">

                    </div>
                </div>
                <div class="tag-post d-flex justify-content-between align-items-center flex-row gap-2 flex-wrap">
                    <span>#tag</span>
                    <span>#tag</span>
                    <span>#tag</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="row row-cols-1 gy-3">
                <div class="col">
                    <div class="content-post">
                        {!! $post->content !!}
                    </div>
                </div>
                <div class="col">
                    <div class="row border-box-start border-box-end">
                        <div class="col-12 col-sm-6 pe-sm-0">
                            <div class="d-flex flex-column p-4 bg-primary-subtle">
                                <span><i class="bi bi-arrow-left"></i>&nbsp;Previous</span>
                                <h5 class="text-white fw-bold">Dirty little secrets about the business industry</h5>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 ps-sm-0">
                            <div class="d-flex flex-column align-items-end p-4 bg-primary-subtle">
                                <span><i class="bi bi-arrow-right"></i>&nbsp;Next</span>
                                <h5 class="text-white fw-bold text-end">Dirty little secrets about the business industry</h5>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h2 class="text-white fw-bold mt-2">Related post</h2>
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        @unless(count($posts) == 0)
                            @foreach($posts as $post)
                                <x-blog-card-v :post="$post" :isSummary="false"></x-blog-card-v>
                            @endforeach
                            @else
                            <h1>Khong co bai viet!</h1>
                        @endunless
                    </div>
                </div>
            </div>


        </div>
        <div class="col-12 col-lg-3">
            <div class="share-post d-flex flex-row flex-wrap gap-2">
                <div class="p-2 d-flex justify-content-center align-items-center border rounded-circle" style="width:50px;height:50px;"><i class="bi bi-facebook"></i></div>
                <div class="p-2 d-flex justify-content-center align-items-center border rounded-circle" style="width:50px;height:50px;"><i class="bi bi-twitter"></i></div>
                <div class="p-2 d-flex justify-content-center align-items-center border rounded-circle" style="width:50px;height:50px;"><i class="bi bi-linkedin"></i></div>
                <div class="p-2 d-flex justify-content-center align-items-center border rounded-circle" style="width:50px;height:50px;"><i class="bi bi-pinterest"></i></div>
                <div class="p-2 d-flex justify-content-center align-items-center border rounded-circle" style="width:50px;height:50px;"><i class="bi bi-envelope"></i></div>
            </div>
        </div>
    </div>
</div>
</x-layout>
