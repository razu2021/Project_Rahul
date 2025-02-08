
@extends('layouts.adminmaster')   
@section('admin_contents')
<section class="mb-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="table_header pt-5 ">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="px-4"> Added a new Information </h3>
                            </div>
                            <div class="col-lg-6 text-end px-4">
                                <a href="{{route('home_banner.all')}}"><button class="btn btn-success"> All Information </button></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Banner Heading</label>
                                <input type="text" class="form-control" name="banner_heading" id="banner_heading" placeholder="Banner Heading"/>
                                <div id="defaultFormControlHelp" class="form-text">
                                    We'll never share your details with anyone else.
                                </div>
                            </div>
                            {{-- input end --}}
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Banner Title</label>
                                <input type="text" class="form-control" name="banner_title" id="banner_title"placeholder="Banner Title"/>
                                <div id="defaultFormControlHelp" class="form-text">
                                    We'll never share your details with anyone else.
                                </div>
                            </div>
                            {{-- input end --}}
                            <div>
                                <label for="defaultFormControlInput" class="form-label">Banner Caption</label>
                                <input type="text" class="form-control" name="banner_cation" id="banner_cation"placeholder="Banner caption"/>
                                <div id="defaultFormControlHelp" class="form-text">
                                    We'll never share your details with anyone else.
                                </div>
                            </div>
                            {{-- input end --}}
                            <div>
                                <label for="defaultFormControlInput" class="form-label"> Button Name</label>
                                <input type="text" class="form-control" name="button_name" id="defaultFormControlInput"placeholder="Button Name"/>
                                <div id="defaultFormControlHelp" class="form-text">
                                    We'll never share your details with anyone else.
                                </div>
                            </div>
                            {{-- input end --}}
                            <div>
                                <label for="defaultFormControlInput" class="form-label"> Button Ulr</label>
                                <input type="text" class="form-control" name="banner_url" id="defaultFormControlInput"placeholder="Button Url"/>
                                <div id="defaultFormControlHelp" class="form-text">
                                    We'll never share your details with anyone else.
                                </div>
                            </div>
                            {{-- input end --}}
                            <div>
                                <label for="defaultFormControlInput" class="form-label"> Banner Image </label>
                                <input type="file" class="form-control" name="images" id="defaultFormControlInput"placeholder="Button Url"/>
                                <div id="defaultFormControlHelp" class="form-text">
                                    We'll never share your details with anyone else.
                                </div>
                            </div>
                            {{-- input end --}}

                        </form>
                    </div>
                </div>
                  
            </div>
            {{-- col end --}}
            <div class="col-lg-4">

            </div>
            {{-- col end --}}
        </div>
    </div>
</section>
@endsection