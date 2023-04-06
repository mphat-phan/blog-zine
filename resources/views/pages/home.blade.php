<x-layout>
    <div class="row g-3">
        <div class="col-lg-8">
            <div class="title">
                <div class="h1 fw-bolder text-white">Today's top highlights</div>
                <p>Latest breaking news, pictures, videos, and special reports
                </p>
            </div>
            <div class="card-blogs row row-cols-1 row-cols-sm-2 justify-content-between g-3">
                @unless(count($posts) == 0)
                @foreach($posts as $post)
                    <x-blog-card-v :post="$post" :isSummary="true"></x-blog-card-v>
                @endforeach
                @else
                <h1>Khong co bai viet!</h1>
                @endunless
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row g-3">
                <div class="col-lg-12 col-md-12">
                    <div class="text-white fw-bolder h3">Trending topics</div>
                    <div
                        class="trending-topics d-flex gap-3 flex-column text-center align-item-center justify-content-center">
                        <div class="trending-topic rounded text-white card-bg-scale overflow-hidden">
                            <div class="card-img-overlay" style="position: inherit!important">
                                Travel
                            </div>
                        </div>
                        <div class="trending-topic rounded text-white card-bg-scale overflow-hidden">
                            <div class="card-img-overlay" style="position: inherit!important">
                                Travel
                            </div>
                        </div>
                    </div>
                    <div class="text-center"><a href="#">View all categories</a></div>
                </div>

                <div class="col-lg-12 col-md-6">
                    <div class="text-white fw-bolder h3">Recent post</div>
                    <div class="card__mini-blog">
                        <div class="card mb-3 border-0 bg-transparent">
                            <div class="row g-0 flex-nowrap">
                                <div class="col-4">
                                    <img src="//spin.atomicobject.com/wp-content/uploads/portfolio-tips-feature-image.jpg"
                                        class="img-fluid rounded" alt="Image">
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-0 ps-3 ">
                                        <h6 class="card-title fw-bolder" style="font-size: 16px;">The pros and cons of
                                            business agency</h6>
                                        <p class="card-text"><small class="text-body-secondary"
                                                style="font-size: 14px;">May 17, 2022</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card__mini-blog">
                        <div class="card mb-3 border-0 bg-transparent">
                            <div class="row g-0 flex-nowrap">
                                <div class="col-4">
                                    <img src="//spin.atomicobject.com/wp-content/uploads/portfolio-tips-feature-image.jpg"
                                        class="img-fluid rounded" alt="Image">
                                </div>
                                <div class="col-8">
                                    <div class="card-body p-0 ps-3 ">
                                        <h6 class="card-title fw-bolder" style="font-size: 16px;">The pros and cons of
                                            business agency</h6>
                                        <p class="card-text"><small class="text-body-secondary"
                                                style="font-size: 14px;">May 17, 2022</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
