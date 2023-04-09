<x-layout-manage>
    <div class="row flex-column g-3">
        <div class="col">
            <h2 class="text-white fw-bold">Create a post</h2>
        </div>
        <div class="col">
            <div class="border rounded p-3">
                <form action="/posts" method="post" enctype="multipart/form-data">
                @csrf
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
                                <input type="text" class="form-control bg-transparent" id="title" placeholder="Post name" name="title" value="{{old('title')}}" aria-describedby="titleHelp" required>
                                <div id="titleHelp" class="form-text">Minimum of 6 words</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="metaTitle" class="form-label">Post Meta Title</label>
                                <input type="text" class="form-control bg-transparent" id="metaTitle" placeholder="Post name" name="metaTitle" value="{{old('metaTitle')}}">
                                <div id="metaTitleHelp" class="form-text">Minimum of 6 words</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="">
                                <label for="summary" class="form-label">Short Summary</label>
                                <textarea class="form-control bg-transparent" id="summary" name="summary" rows="3" value="{{old('summary')}}" required></textarea>
                                <div id="summaryHelp" class="form-text">Minimum of 30 words</div>
                            </div>
                        </div>
                        {{-- Use ckeditor edit --}}
                        <div class="col">
                            <div class="">
                                <label for="content" class="form-label">Content</label>
                                <textarea class="form-control bg-transparent" id="content" name="content" rows="10" value="{{old('content')}}" required></textarea>
                                <div id="contentHelp" class="form-text">Minimum of 50 words</div>
                            </div>
                            {{-- <div id="editor">
                                <p>This is the editor content.</p>
                            </div> --}}
                        </div>
                        <div class="col">
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
                            <button type="submit" class="btn btn-primary w-100">Create post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout-manage>
