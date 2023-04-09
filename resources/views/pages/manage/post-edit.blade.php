<x-layout-manage>
    <div class="row flex-column g-3">
        <div class="col">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="text-white fw-bold">Edit post</h2>
                <div>
                    <form action="/posts/{{$post->id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete post</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col">
            <div class="border rounded p-3">
                <form action="/posts/{{$post->id}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row flex-column g-3">
                        <div class="col">
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="title" class="form-label">Post Name</label>
                                <input type="text" class="form-control bg-transparent" id="title" placeholder="Post name" name="title" value="{{$post->title}}" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="metaTitle" class="form-label">Post Meta Title</label>
                                <input type="text" class="form-control bg-transparent" id="metaTitle" placeholder="Post name" name="metaTitle" value="{{$post->metaTitle}}">
                                <div id="metaTitleHelp" class="form-text">Minimum of 6 words | If null, meta title same as title</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="summary" class="form-label">Short Summary</label>
                                <textarea class="form-control bg-transparent" id="summary" name="summary" rows="3" required>{{$post->summary}}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control bg-transparent" id="content" name="content" rows="10" required>{{$post->content}}</textarea>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                @if(!is_null($post->image))
                                    <div class="col-3">
                                        <img src="/images/{{$post->image}}" alt="Image" class="img-fluid rounded">
                                    </div>
                                @endif
                            </div>
                            <div class="">
                                <label for="image" class="form-label">Upload post image here</label>
                                <input class="form-control" type="file" id="image" name="image">
                                <div id="titleHelp" class="form-text">Must be image file</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="">
                                        <label for="tags" class="form-label">Tags</label>
                                        <input type="text" class="form-control bg-transparent" id="tags" name="tags" placeholder="business, sports,..." aria-describedby="tagsHelp">
                                        <div id="tagsHelp" class="form-text">Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing.</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="">
                                        <label for="category" class="form-label">Category</label>
                                        <select class="form-select" aria-label="Default select example" id="category" name="category">
                                            <option value="1" selected>Travel</option>
                                            <option value="2">Technology</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">

                            <button type="submit" class="btn btn-primary me-2">Save changes</button>

                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</x-layout-manage>
