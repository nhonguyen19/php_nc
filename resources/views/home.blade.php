@extends('layouts.app', [
    'namePage' => 'Dashboard',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])
@section('content')
  <div class="panel-header ">
  </div>
        <div class="table-title">
            <div class="row">
                <div class="col-sm-8"><h2>Question <b>Details</b></h2></div>
                <div class="col-sm-4">
                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Question</th>
                    <th>Answer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>Administration</td>
                    <td>(171) 555-2222</td>
                    <td>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Peter Parker</td>
                    <td>Customer Service</td>
                    <td>(313) 555-5735</td>
                    <td>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Fran Wilson</td>
                    <td>Human Resources</td>
                    <td>(503) 555-9931</td>
                    <td>
                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>      
            </tbody>
        </table>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();
    });
  </script>
@endpush