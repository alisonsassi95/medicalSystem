@extends('adminlte::page')

@section('title', 'Especialidade')

@section('content')

<div class="box box-primary">
        <div class="box-header with-border">
           <h3 class="box-title">Consulta</h3>
        </div>

                <div class="panel-body">
                
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table id="tableDepartament" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                            <thead>
                                <tr>
                                  
                                    <th>Nº</th>
                                    <th>Nome especialidade</th>
                                  
                                </tr>
                              </thead>
                          <tbody>
                              
                              @foreach($specialties as $specialty)
                              <tr>
                                <td>{{ $specialty->id }}</td>
                                <td>{{ $specialty->name }}</td>
                                <td>

                                    <a class="btn btn-default" href="{{route('specialty.edit', $specialty->id)}}">Editar</a>
                                    <a class="btn btn-danger" href="javascript:(confirm('Deletar esse registro?') ? window.location.href='{{route('specialty.delete',$specialty->id)}}' : false)">Deletar</a>
                                        
                                </td>
                              </tr>
                              @endforeach
                    </table>

                    <div align="center">
                        {!! $specialties->links() !!}
                    </div> 
                    <a class="btn btn-primary" href="{{route('specialty.add')}}">Adicionar</a>
                </div>
            </div>
</div>

@stop

