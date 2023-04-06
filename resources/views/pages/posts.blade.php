<x-layout>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
        <div class="col-lg-12 col-md-12 col-12">
            <div class="card text-bg-dark h-300 d-flex justify-content-center align-items-center card-bg-scale border-0 overflow-hidden" style="background-image:url(https://blogzine.webestica.com/assets/images/blog/16by9/07.jpg);background-position:center;background-size:cover;">
                <div class="card-img-overlay px-5 py-4 bg-blur d-flex justify-content-center align-items-center flex-column" style="position:inherit!important">
                    <h1 class="card-title fw-bolder text-center">Post</h1>
                    <ul class="nav nav-divider d-md-flex align-items-center">
                        <li class="nav-item p-0">
                            <div class="d-flex gap-2 align-items-center">
                                <div class="align-self-center" style="font-size: 14px"><a href="#"> Home </a></div>
                            </div>
                        </li>
                        <li class="nav-item align-self-center p-0" style="font-size: 14px">
                            All posts
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @unless(count($posts) == 0)
            @foreach($posts as $post)
                <x-blog-card-overlay :post="$post"></x-blog-card-overlay>
            @endforeach

            @else
            <h1>Khong co bai viet!</h1>
        @endunless
        <div class="col-12 col-lg-12 col-md-12">

            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                <ul class="pagination">

                    <?php
                    $num = 5;
                    ?>
                    @if($num > $posts->lastPage())
                        <?php
                        $startPage = 1;
                        $endPage = $posts->lastPage();
                        ?>
                    @elseif($posts->currentPage() <= floor($num/2))
                        <?php
                        $startPage = 1;
                        $endPage = $num;
                        ?>
                    @elseif($posts->currentPage() >= floor(($posts->lastPage() + $posts->currentPage())/2))
                        <?php
                        $startPage = $posts->lastPage() - $num + 1;
                        $endPage = $posts->lastPage();
                        ?>
                    @else
                        <?php
                        $startPage = $posts->currentPage() - floor($num/2);
                        $endPage = $posts->currentPage() + floor($num/2);
                        ?>
                    @endif
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    @for ($i = $startPage; $i <= $endPage; $i++)
                        @if($i == $posts->currentPage())
                            <li class="page-item active"><a class="page-link" href="?page={{$i}}" onclick="handleQueryParams(event)">{{$i}}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="?page={{$i}}" onclick="handleQueryParams(event)">{{$i}}</a></li>
                        @endif
                    @endfor
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</x-layout>

