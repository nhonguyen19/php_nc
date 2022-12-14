@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
    'namePage' => 'Câu hỏi',
])

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">Danh Sách Chủ Đề</h4>
                    </div>
                    <form method="post" action="{{ route('Question-Create-post') }}" enctype  = "multipart/form-data" autocomplete="off">
                        <div class="card-body">
                                @csrf
                            <div class="form-group" >
                                <label for="country-floating">Category</label>
                                <select name='category' class="form-control">
                                    @foreach($lsType as $item)
                                    <option>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Câu Hỏi') }}</label>
                                <input type="" name="question" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 1') }}</label>
                                <input type="" name="a" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 2') }}</label>
                                <input type="" name="b" class="form-control">
                            </div>
                           

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 3') }}</label>
                                <input type="" name="c" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Câu Trả lời 4') }}</label>
                                <input type="" name="d" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Chọn Đáp Án') }}</label>
                                <select name="correct_answer" value="{{old('correct_answer')}}" class="form-control" >
                                <option value='' class="text-danger">Chọn đáp án</option> 
                                <option value="1" class="text-danger">Đáp án 1</option>
                                <option value='2' class="text-danger">Đáp án 2</option>
                                <option value='3' class="text-danger">Đáp án 3</option>
                                <option value='4' class="text-danger">Đáp án 4</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>{{ __('Trạng thái') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >
                                <option value='1' class="text-danger">Hoạt động</option>
                                <option value='0' class="text-danger">Ngưng hoạt động</option>
                                </select>
                            </div>
                            
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

