@extends('admin.layout.master')
@section('content')


    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="pt-3 pb-1" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s12 m6 l6">
               
                <a href="category" class="mb-6 btn waves-effect waves-light gradient-45deg-light-blue-cyan">Back to List</a>

              </div>
              <div class="col s12 m6 l6 right-align-md">
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="category">Category</a>
                  </li>
                  <li class="breadcrumb-item active">Category Add
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">

<!-- Centered Table -->
<div class="row">
    <form class="col s12" action="{{ route('category.insert_category') }}" method="POST">
      @csrf
      <div class="row">
        <div class="input-field col s6">
          <input type="text" id="category_name" name="category_name"  class="validate">
          <label for="category_name">Category Name</label>
      </div>


      <div class="input-field col s6">
          <input type="text" id="category_code" name="category_code" class="validate">
          <label for="category_code">Category Code</label>
        </div>
      </div>
   
   

      <div class="row">
          <div class="col s12 m6 l6">
              <button type="submit" class="mb-6 btn waves-effect waves-light gradient-45deg-green-teal">Submit</button>
          </div>
      </div>

    </form>
  </div>



</div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>




@endsection

<!-- @push('footer-script')

@endpush -->
    