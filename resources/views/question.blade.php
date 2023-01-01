@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'question',
    'namePage' => 'QUESTION LIST',
])

@section('content')
<header>
    <script language="JavaScript" type="text/javascript">
      function confirmDelete(){      
          return confirm('Bạn có chắc chắn muốn xóa');
      }
    </script>
  </header>
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
           
                <div class="card">
                    <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">QUESTION LIST</h4>
                        <a href="{{ route('questions.create') }}" class="btn btn-fill btn-success">ADD QUESTION</a>
                    </div>
                </div>
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                           Topic
                                        </th>
                                        <th>
                                           Question
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
                                            Correct
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Date
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
                                            <p>
                                            @if($p->correct_answer==1)
                                                {{$p->a }}
                                            @elseif($p->correct_answer==2)
                                                {{$p->b }}
                                            @elseif($p->correct_answer==3)
                                                {{$p->c }}
                                            @elseif($p->correct_answer==4)
                                                {{$p->d }}
                                            
                                            @endif
                                            </p>
                                        </td>
                                        <td>
                                            <p>{{$p->status==1?"Active":"InActive"}}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->created_at}}</p>
                                        </td>
                                       </div>
                                       
                                    <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{route('questions.edit', ['question'=>$p->id])}}">Edit</a> 
                                            <form method="post" action="{{route('questions.destroy', ['question'=>$p->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <a><input type="submit" value="Delete" onclick="return confirmDelete()" class="dropdown-item"></a>
                                            </form>
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
