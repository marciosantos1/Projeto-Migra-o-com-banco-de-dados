<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>
            window.onload = function (){
            @if (session()->get('msg'))
                    alert('{{session()->get('msg')}}');
            @endif
            };
        </script>

    </head>
    <body style="background: #A5A5A5">

        <a href="{{route('categoria.create')}}">Adicionar Categoria</a><br/>


        <!-- Listagem de categorias -->   
        <table style="width: 40%;">
            <thead style="text-align: center">
                <tr>
                    <td style="background: #BEE9EA">Cód. </td>
                    <td style="background: #BEE9EA">Nome </td>
                    <td style="background: #BEE9EA">Ação </td>
                </tr> 
            <tbody >
                @foreach ($categorias as $c)
                <tr>
                    <td style="background: #9ba2ab">{{$c->codcat}} </td>
                    <td style="background: #9ba2ab">{{$c->nomcat}}</td>
                    <td style="text-align: center">
                        
                        <button onclick="location.href='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>
                        
                        <form action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                            
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </thead>
    </table> 
        
         <a href="{{route('cliente.create')}}">Adicionar Cliente</a><br/>


        <!-- Listagem de clientes -->   
        <table style="width: 40%;">
            <thead style="text-align: center">
                <tr>
                    <td style="background: #BEE9EA">Cód. </td>
                    <td style="background: #BEE9EA">Nome </td>
                    <td style="background: #BEE9EA">Endereço </td>
                </tr> 
            <tbody >
                @foreach ($cliente as $cli)
                <tr>
                    <td style="background: #9ba2ab">{{$c->codcli}} </td>
                    <td style="background: #9ba2ab">{{$c->nomcli}}</td>
                    <td style="text-align: center">
                        
                        <button onclick="location.href='{{route('cliente.edit', $cli->codcli)}}'" type="button">Editar</button>
                        
                        <form action="{{route('cliente.destroy', $c->codcli)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                            
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
        </thead>
    </table>
</body>
</html>

