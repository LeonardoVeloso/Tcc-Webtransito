@extends('index')

@section('table')
    <div class="col-8 m-auto">
        <table class="table table-hover thead-dark">   
            <thead>
                <tr>
                    <th scope="col">Id AIT</th>
                    <th scope="col">Código Infração</th>
                    <th scope="col">Data Infração</th>
                    <th scope="col">Nome Agente</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                
            </tbody>
        </table>
    </div>
@endsection