
@extends('layouts.adminmaster')   
@section('admin_contents')
<section class=" mt-5 mb-5">
  <div class="container">
      <div class="row">
          <div class="col-12 col-lg-12">
               <!-- Basic Bootstrap Table -->
                <div class="card">
                  <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                      <div class=" text-center pt-4 pb-0">
                        <h2 style="border-bottom: 5px solid red; display:inline-block;background:#011a41;padding:3px;border-radius:10px;color:white;text-transform:uppercase"> 
                          Banner Information Entair Website
                        </h2>
                      </div>
                    </div>
                    <div class="col-lg-8 mx-4  pt-2">
                        <div class=" mb-2 ">
                          <form action="" method="GET">
                            <div class="input-group">
                              <input type="text" name="search" value="" class="form-control" placeholder="Search Entair Table">
                              <div class="input-group-append">
                                <button class="btn btn-outline-success" type="submit">Submit</button>
                                <button class="btn btn-outline-warning" type="submit"><a class="text-dark" href="#">Reset</a></button>
                              </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center ">
                        <div class="mb-2 ">
                        <a href="{{route('home_banner.add')}}"><button class="btn btn-success px-4">Add New Items</button></a>
                        <a href="#" > <button type="button" class="btn btn-warning position-relative">Recycle<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> 5 </span></button></a>
                        </div>
                    </div>
                  </div>
                  <hr>
                <table class="table table-striped" >
                  <thead>
                    <tr>
                      <th scope="col">ID: </th>
                      <th scope="col">Banner Heading</th>
                      <th scope="col">Banner Title</th>
                      <th scope="col">Banner caption</th>
                      <th scope="col">Banner image</th>
                      <th scope="col">status</th>
                      <th scope="col">Mangae</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Heading</td>
                      <td> title</td>
                      <td>caption</td>
                      <td>image</td>
                        <!-- image end  -->
                      <td> <p class="text-success">Public</p> </td>
                      <td> 
                        <div class="btn-group">
                          <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Edit</a></li>
                            <li><a class="dropdown-item" href="">View</a></li>
                            <li><a class="dropdown-item" onclick="return confirm('Delete this Information')" href="">Delete</a></li>
                            <li><hr class="dropdown-divider"></li>
                           
                            <li><a class="dropdown-item text-success fw-bold" href="">Publish</a></li>
                          
                          </ul>
                        </div>
                      </td>
                    </tr>
                   
                  </tbody>
                
                   
                 
                </table>
                <div class="container">
                      <div class="row pt-4 ">
                        <div class="col-lg-8"><tr><td><p>Showing 1 to 10 of 20 Entair</p></td></tr></div>
                        <div class="col-lg-4 d-flex justify-content-end">
                        <div class="row">1/2/3</div>
                        </div>
                      </div>
                </div>
                </div>
              <!-- table  -->
            <!--/ Basic Bootstrap Table -->
          </div>
      </div>
  </div>
</section>
@endsection