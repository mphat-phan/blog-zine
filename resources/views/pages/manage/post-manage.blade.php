<x-layout-manage>
    <div class="row flex-column gy-3 gy-lg-4">
        <div class="col">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="text-white fw-bold h2">Manage Post
                        <span class="badge bg-primary bg-opacity-10">110</span>
                    </h2>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary">Add a post</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="info-dash">
                <div class="row justify-content-between g-3">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-md fs-5 rounded-3 bg-success bg-opacity-10 text-success">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="">
                                    <h6 class="text-white fw-bold">134K</h6>
                                    <div class="text-white" style="font-size: 14px">Page Views</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-md fs-5 rounded-3 bg-success bg-opacity-10 text-success">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="">
                                    <h6 class="text-white fw-bold">134K</h6>
                                    <div class="text-white" style="font-size: 14px">Page Views</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-md fs-5 rounded-3 bg-success bg-opacity-10 text-success">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="">
                                    <h6 class="text-white fw-bold">134K</h6>
                                    <div class="text-white" style="font-size: 14px">Page Views</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card p-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="icon-md fs-5 rounded-3 bg-success bg-opacity-10 text-success">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>
                                <div class="">
                                    <h6 class="text-white fw-bold">134K</h6>
                                    <div class="text-white" style="font-size: 14px">Page Views</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="border p-3 rounded-3">
                <div class="row flex-column g-3">
                    <div class="col">
                        <div class="row flex-column flex-sm-row g-2">
                            <div class="col">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-transparent border-end-0" placeholder="Search post..." aria-label="Username" aria-describedby="basic-addon1">
                                    <span class="input-group-text border-start-0 bg-transparent" id="basic-addon1"><i class="bi bi-search"></i></span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Sort by</option>
                                    <option value="1">Newest</option>
                                    <option value="2">Oldest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Post Name</th>
                                <th scope="col">Published Date</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><div class="badge bg-danger">Technology</div></td>
                                <td><div class="badge bg-success bg-opacity-25 text-success">Live</div></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-rounded border">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        <a href="" class="btn btn-rounded border">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </div>
                                </td>
                            </tbody>
                          </table>
                    </div>
                    <div class="col">
                        <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="fw-bold">
                                Showing 1 to 8 of 20 entries
                            </div>
                            <div class="">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination m-0">
                                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-manage>
