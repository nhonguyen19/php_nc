<<<<<<< HEAD
@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'category',
    'namePage' => 'TOPIC',
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
                        <h4 class="card-title">TOPIC LIST</h4>
=======
<<<<<<< HEAD
                        <h4 class="card-title">Danh Sách Chủ Để</h4>
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                    </div>
                    <form method="post" action="{{ route('chu_des.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                        <div class="card-body">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('Topic name') }}</label>
                                    <input type="" name="name" value="{{old('name')}}" class="form-control">
                                </div>   
                                <div class="form-group">
                                    <label>{{ __('Status') }}</label>
                                    <select name="status" value="{{old('status')}}" class="form-control" >
                                    <option value='1' class="text-danger">Acctive</option>
                                    <option value='0' class="text-danger">InActive</option>
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
                            <button type="submit" class="btn btn-fill btn-success">{{ __('ADD')}}</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
@endsection