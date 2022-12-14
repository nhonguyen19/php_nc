@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
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