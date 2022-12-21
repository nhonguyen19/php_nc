@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'category',
    'namePage' => 'TOPIC',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
           
                <div class="card">
                    <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">TOPIC QUESTION LIST</h4>
                        <a href="{{ route('chu_des.create') }}" class="btn btn-fill btn-success">ADD TOPIC</a>
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
                                            Status
                                        </th>
                                        <th>
                                           Date
                                        </th>
                                        </tr>
                                </thead>
                               
                                @foreach($lst as $c)
                                    <div class="namePage">   
                                        @csrf    
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td>
                                            <p> {{ $c->id}}</p>
                                        </td>
                                        <td>
                                            <p>   {{ $c->name }}</p>
                                        </td>
                                        <td>
                                            <p>{{$c->status==1?"Active":"InActive"}}</p>
                                        </td>
                                        <td>
                                            <p>   {{ $c->created_at }}</p>
                                        </td>
                                       </div>
                                       
                                    <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{route('chu_des.edit', ['chu_de'=>$c->id])}}">Edit</a> 
                                                <form method="post" action="{{route('chu_des.destroy',['chu_de'=>$c->id])}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a><input type="submit" value="Delete" class="dropdown-item"></a>
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
