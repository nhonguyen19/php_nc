@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
    'namePage' => 'QUESTION',
])

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
<<<<<<< HEAD
                        <h4 class="card-title">ADD QUESTION</h4>
=======

                        <h4 class="card-title">Thêm câu hỏi</h4>

                        <h4 class="card-title">Danh Sách Chủ Đề</h4>

>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                    </div>
                    <form method="post" action="{{ route('questions.store') }}" enctype  = "multipart/form-data" autocomplete="off">
                        <div class="card-body">
                                @csrf

                            <div class="form-group" >
                                <label for="country-floating">Topic</label>
                                <select name='category' class="form-control">
                                    <option>Chọn chủ đề</option>

                            <div class="form-group">
                                <label for="country-floating">Category</label>
                                <select class="form-select" name='category'>

                                    @foreach($lsType as $item)
                                    <option>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Question') }}</label>
                                <input type="" name="question" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 1') }}</label>
                                <input type="" name="a" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 2') }}</label>
                                <input type="" name="b" class="form-control">
                            </div>
                           

                            <div class="form-group">
                                <label>{{ __('Answer 3') }}</label>
                                <input type="" name="c" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Answer 4') }}</label>
                                <input type="" name="d" class="form-control">
                            </div>
                            

                            <div class="form-group">
                                <label>{{ __('Select Answer') }}</label>
                                <select name="correct_answer" class="form-control" >
                                        <option value='1' class="text-danger">Answer 1</option>
                                        <option value='2' class="text-danger">Answer 2</option>
                                        <option value='3' class="text-danger">Answer 3</option>
                                        <option value='4' class="text-danger">Answer 4</option>
                                </select>

                            </div>

                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >
<<<<<<< HEAD
                                <option value='1' class="text-danger">Active</option>
                                <option value='0' class="text-danger">InActive</option>
=======
                                <option value='1' class="text-danger">Hoạt động</option>
                                <option value='0' class="text-danger">Ngưng hoạt động</option>

                                <select name="correct_answer" value="{{old('correct_answer')}}" class="form-control" >                                
                                <option value="{{'a'}}" class="text-danger">Đáp án 1</option>
                                <option value="{{'a'}}" class="text-danger">Đáp án 2</option>
                                <option value="{{'a'}}" class="text-danger">Đáp án 3</option>
                                <option value="{{'a'}}" class="text-danger">Đáp án 4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>{{ __('Trạng thái hoạt động') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >                                
                                <option value='1' class="text-danger">Hoạt động</option>
                                <option value='0' class="text-danger">Không hoạt động</option>
                                

>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                                </select>
                            </div>
                            
                            </div>
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-success">{{ __('ADD ')}}</button>
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
@endsection

