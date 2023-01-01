@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
<<<<<<< HEAD
    'namePage' => 'Edit Question',
=======
    'namePage' => 'Câu hỏi',
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
])

@section('content')
    <div class="panel-header panel-header-sm"></div>
    <div class="content">
        <div class="row">
           <div class="card">
                <div class="card-body">
                    <div class="col-8">
<<<<<<< HEAD
                        <h4 class="card-title">EDIT QUESTION</h4>
                    </div>
                    <form method="post" action="{{ route('questions.update',['question'=>$p]) }}" enctype  = "multipart/form-data" autocomplete="off">
                        
                        <div class="card-body">
                                @csrf
                                @method('PUT')
                            <div class="form-group" >
                                <label for="country-floating">Toppic</label>
                                <select name='category' class="form-control">
                                    @foreach($lst as $item)
                                    <option>{{ $item->name}}</option>
=======
                        <h4 class="card-title">Sửa câu hỏi</h4>
                    </div>
                    <form method="post" action="{{ route('Question-Edit-put',['question'=>$p]) }}" enctype  = "multipart/form-data" autocomplete="off">
                                @csrf
                                @method('PUT')
                                @foreach($lsType as $question)
                                @if($question->id==old('question',$p->id))
                                <input type="hidden" value="{{$question->id}}" name ="id"  class="form-control" >
                    <div class="card-body">                                
                            <div class="form-group" >
                                <label for="country-floating">Category</label>
                                <select name='category' class="form-control">
                                    @foreach($lsType as $item)
                                    <option>{{ $item->name }}</option>
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
<<<<<<< HEAD
                                <label>{{ __('Question') }}</label>
                                <input name="question" value="{{old('question', $p->question)}}" class="form-control">
=======
                                <label>{{ __('Câu Hỏi') }}</label>
                                <input name ="question" value="{{old('question', $p->question)}}"   class="form-control" >
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                            </div>
                            

                            <div class="form-group">
<<<<<<< HEAD
                                <label>{{ __('Answer 1') }}</label>
                                <input name="a" value="{{old('a', $p->a)}}" class="form-control">
=======
                                <label>{{ __('Câu Trả lời 1') }}</label>
                                <input name ="question" value="{{old('question', $p->a)}}"  class="form-control" >
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                            </div>
                            

                            <div class="form-group">
<<<<<<< HEAD
                                <label>{{ __('Answer 2') }}</label>
                                <input name="b" value="{{old('b', $p->b)}}" class="form-control">
=======
                                <label>{{ __('Câu Trả lời 2') }}</label>
                                <input name ="question" value="{{old('question', $p->b)}}" class="form-control">
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                            </div>
                           

                            <div class="form-group">
<<<<<<< HEAD
                                <label>{{ __('Answer 3') }}</label>
                                <input name="c" value="{{old('c', $p->c)}}" class="form-control">
=======
                                <label>{{ __('Câu Trả lời 3') }}</label>
                                <input name ="question" value="{{old('question', $p->c)}}" class="form-control">
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                            </div>
                            

                            <div class="form-group">
<<<<<<< HEAD
                                <label>{{ __('Answer 4') }}</label>
                                <input name="d" value="{{old('d', $p->d)}}" class="form-control">
=======
                                <label>{{ __('Câu Trả lời 4') }}</label>
                                <input name ="question" value="{{old('question', $p->d)}}" class="form-control">
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                            </div>
                            

                            <div class="form-group">
<<<<<<< HEAD
                                <label>{{ __('Select Answer') }}</label>
                                <select name="correct_answer" class="form-control" >
                                        <option value="{{old('question', $p->id)}}" class="text-danger" > 
                                          @if(old('question',$p->correct_answer)==1)
                                          {{old('question',$p->a)}}
                                          @elseif(old('question',$p->correct_answer)==2)
                                          {{old('question',$p->b)}}
                                          @elseif(old('question',$p->correct_answer)==3)
                                          {{old('question',$p->c)}}
                                          @elseif(old('question',$p->correct_answer)==4)
                                          {{old('question',$p->d)}}
                                          @endif  
                                        </option>
                                        <option value='1' class="text-danger">{{old('question',$p->a)}}</option>
                                        <option value='2' class="text-danger">{{old('question',$p->b)}}</option>
                                        <option value='3' class="text-danger">{{old('question',$p->c)}}</option>
                                        <option value='4' class="text-danger">{{old('question',$p->d) }}</option>
=======
                                <label>{{ __('Chọn Đáp Án') }}</label>
                                <select name="correct_answer" value="{{old('question', $p->d)}}" class="form-control" >
                                        <option value="{{old('question', $p->id)}}" class="text-danger" >Đáp án {{old('question',$p->correct_answer)}}</option>
                                        <option value='1' class="text-danger">Đáp án 1</option>
                                        <option value='2' class="text-danger">Đáp án 2</option>
                                        <option value='3' class="text-danger">Đáp án 3</option>
                                        <option value='4' class="text-danger">Đáp án 4</option>
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                                </select>

                            </div>

                            <div class="form-group">
<<<<<<< HEAD
                                <label>{{ __('Status') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >
                                <option value='1' class="text-danger">Active </option>
                                <option value='0' class="text-danger">Inactive</option>
=======
                                <label>{{ __('Trạng thái') }}</label>
                                <select name="status" value="{{old('status')}}" class="form-control" >
                                <option value='1' class="text-danger">Hoạt động</option>
                                <option value='0' class="text-danger">Ngưng hoạt động</option>
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                                </select>
                            </div>
                            
                            </div>
<<<<<<< HEAD
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-success">{{ __('EDIT AND UPDATE')}}</button>
=======
                            @endif
                        @endforeach
                        
                        <div class="card-footer">
                            <button type="submit" class="btn btn-fill btn-success">{{ __('Sửa')}}</button>
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c
                        </div>
                    </form>     
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
@endsection
=======
@endsection 
>>>>>>> ddb362bc50549c58e56f32d8b4fc88d30997fc4c

