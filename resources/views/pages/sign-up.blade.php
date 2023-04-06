@section('meta_tags')
<title>Sign Up - {{env('SITE_URL', 'Site Name')}}</title>
@endsection
<x-layout>
<div class="row justify-content-center align-items-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="bg-primary-subtle rounded">

                <div class="row gap-3 flex-column px-3 px-md-5 py-3 py-md-5 ">
                    <div class="col">
                        <h2 class="text-white fw-bolder">Create your free account
                        </h2>
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                        @endforeach
                    <div class="col">
                        <form action="/sign-up" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email..." name="email" value="{{old('email')}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name..." name="name" value="{{old('name')}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{old('password_confirmation')}}" required>
                            </div>
                            <div class="d-flex justify-content-between align-items-start flex-column flex-sm-row gap-2 mb-3">
                                <button class="btn btn-primary" type="submit">Sign up</button>
                                <div>
                                    Have an account? <a href="/sign-in">Sign in</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <div class="divider"></div>
                    </div>
                    <div class="col">
                        <div class="row justify-content-center align-items-center g-2">
                            <div class="col-12 text-center">Sign in with your social network for quick access
                            </div>
                            <div class="col-12 col-sm-6 ">
                                <div class="text-center bg-primary rounded p-2 text-white">Facebook
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 ">
                                <div class="text-center bg-danger rounded p-2 text-white">Google
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
