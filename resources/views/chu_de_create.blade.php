<<<<<<< HEAD
@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'category',
    'namePage' => 'Chủ đề',
])

=======
>>>>>>> dd2e612718f8d5b6e76a4dc8ed9510dd2e24f4e7
@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
<<<<<<< HEAD
                        <h4 class="card-title">Danh Sách Chủ Để</h4>
                    </div>
                    <form method="post" action="{{ route('Category-Create-post') }}" enctype  = "multipart/form-data" autocomplete="off">
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('Tên Chủ Đề') }}</label>
                                    {{-- <input type="" name="name" value="{{old('name')}}" class="form-control"> --}}
                                    <input type="" name="name" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <label>{{ __('Trạng thái') }}</label>
                                    <select name="status" value="{{old('status')}}" class="form-control" >
                                    <option value='1' class="text-danger">Hoạt động</option>
                                    <option value='0' class="text-danger">Ngưng hoạt động</option>
                                    </select>
                                </div>
                                 <br>@if($errors->has('name')) {{$errors->first('name')}} <br>@endif     
=======
                        <h4 class="card-title">Danh Sách Chủ Đề</h4>
                    </div>
                    <form method="post" action="{{ route('categories.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('Tên Lĩnh Vực') }}</label>
                                    <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                </div>    
                                <!-- <br>@if($errors->has('name')) {{$errors->first('name')}} <br>@endif      -->
>>>>>>> dd2e612718f8d5b6e76a4dc8ed9510dd2e24f4e7
                        </div>
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-success">{{ __('Thêm')}}</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
@endsection