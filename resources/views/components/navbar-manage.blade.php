<nav class="navbar navbar-expand-md bg-dark-tertiary sticky-top flex-row border-bottom border-dark-subtle">
    <div class="container-lg gap-2">
        <a class="navbar-brand" href="/">
            <img src="https://blogzine.webestica.com/assets/images/logo-light.svg" alt="Logo" height="30"
                class="d-inline-block align-text-top">
        </a>
        <div class="ms-auto">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        </div>

        <div class="collapse navbar-collapse navbar-manage-collapse justify-content-center" id="navbar">
            <ul class="navbar-nav navbar-nav-scroll">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/dashboard">
                    <span><i class="bi bi-house"></i>&nbsp;Dashboard</span>
                  </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span><i class="bi bi-pencil"></i>&nbsp;</span>Posts
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/posts/manage">Manage Post</a></li>
                      <li><a class="dropdown-item" href="/posts/create">Create a post</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
            </ul>
        </div>
        <div class="d-inline-flex flex-row gap-2 align-items-center">
            <div class="navbar-btn-search d-none d-md-flex position-relative">
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#searchBox"
                    aria-expanded="false" aria-controls="searchBox">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <div class="collapse collapse-horizontal dropdownBox" id="searchBox">
                    <form action="/posts/?" method="get">
                        <div class="card card-body d-none d-md-block" style="width: 600px;">
                            <div class="row gx-2 gy-1">
                                <div class="col">
                                    <input class="form-control" type="text" name="search" placeholder="Searching..."
                                        aria-label="default input example">
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="navbar-user position-relative">
                <div class="button avatar d-flex align-items-center" type="button" data-bs-toggle="collapse"
                    data-bs-target="#userBox" aria-controls="userBox">
                    <img class="rounded-circle" style="width:40px"
                        src="https://blogzine.webestica.com/assets/images/avatar/01.jpg" alt="Avatar">
                </div>
                <div class="collapse collapse-horizontal dropdownBox" id="userBox">
                    <div class="card card-body bg-dark" style="width: 300px;">
                        <div class="row row-cols-1 gx-5 gy-3 py-3 align-items-center justify-content-center">
                            <div class="col">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img class="rounded-circle" style="width:50px"
                                            src="https://blogzine.webestica.com/assets/images/avatar/01.jpg"
                                            alt="Avatar">
                                    </div>
                                    <div class="col">
                                        <div class="text-white fw-bold">{{auth()->user()->name}}</div>
                                        <div class="text-white" style="font-size: 14px;">{{auth()->user()->email}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex flex-column justify-content-center gap-2 border-top pt-3 px-3">
                                    <div><span><a href="/dashboard" class="text-white text-decoration-none"><i
                                        class="fa-solid fa-magnifying-glass">&nbsp;&nbsp;&nbsp;</i>Manage</span></a></div>
                                    <div><span><a href="/edit-profile" class="text-white text-decoration-none"><i
                                                    class="fa-solid fa-magnifying-glass">&nbsp;&nbsp;&nbsp;</i>Edit
                                                Profile</span></a></div>
                                    <div><span><a href="/account-setting" class="text-white text-decoration-none"><i
                                                    class="bi bi-person">&nbsp;&nbsp;&nbsp;</i>Account
                                                Setting</span></a></div>
                                    <div>
                                        <span><a href="/help" class="text-white text-decoration-none"><i
                                            class="bi bi-info-circle">&nbsp;&nbsp;&nbsp;</i>Help</span></a>

                                        </div>
                                        <div>
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <span><button type="submit" class="text-white text-decoration-none nav-link"><i
                                                    class="bi bi-box-arrow-in-right">&nbsp;&nbsp;&nbsp;</i>Sign out
                                                </span></a>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
