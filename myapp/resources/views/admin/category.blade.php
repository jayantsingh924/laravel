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
               
                <a href="category_list" class="mb-6 btn waves-effect waves-light gradient-45deg-light-blue-cyan">Add category</a>

              </div>
              <div class="col s12 m6 l6 right-align-md">
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="category">Category</a>
                  </li>
                  <li class="breadcrumb-item active">Category list
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
    <div class="col s12 m12 l12">
      <div id="centered-table" class="card card card-default scrollspy">
        <div class="card-content">
          <h4 class="card-title">Category List</h4>
          <p class="mb-2"></p>
          <div class="row">
          
            <div class="col s12">
              <table class="centered">
                <thead>
                  <tr>
                    <th data-field="id">Name</th>
                    <th data-field="name">Item Name</th>
                    <th data-field="price">Item Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>$3.76</td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>$7.00</td>
                  </tr>
                  <tr>
                    <td>Shannon</td>
                    <td>KitKat</td>
                    <td>$9.99</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>




@endsection

<!-- @push('footer-script')

@endpush -->
    