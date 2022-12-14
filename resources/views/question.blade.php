@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
    'namePage' => 'Câu hỏi',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
           
                <div class="card">
                    <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">Danh Sách Câu Hỏi</h4>
                        <a href="{{ route('Question-Create-get') }}" class="btn btn-fill btn-success">Thêm Câu Hỏi</a>
                    </div>
                   
                </div>
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Id
                                        </th>
                                        <th>
                                            Danh mục
                                        </th>
                                        <th>
                                            Câu hỏi
                                        </th>
                                        <th>
                                            A
                                        </th>
                                        <th>
                                            B
                                        </th>
                                        <th>
                                            C
                                        </th>
                                        <th>
                                            D
                                        </th>
                                        <th>
                                            Đáp án đúng
                                        </th>
                                        <th>
                                            Trạng thái
                                        </th>
                                        </tr>
                                </thead>
                               
                                @foreach($lst as $p)
                                    <div class="namePage">   
                                        @csrf    
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td>
                                            <p>{{$p->id}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->category}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->question}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->a}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->b}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->c}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->d}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->correct_answer}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->status==1?"Hoạt Động":"Không Hoạt Động"}}</p>
                                        </td>
                                       </div>
                                       
                                    <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Edit</a>  
                                            <a class="dropdown-item" href="#">Delete</a>             
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                                
                            </table>
                    </div>
                </div>
        </div>
    </div>
@endsection
