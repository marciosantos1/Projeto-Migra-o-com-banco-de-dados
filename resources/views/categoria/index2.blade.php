<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Cliente</title>

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

        
        
         <a href="{{route('cliente.create')}}">Adicionar Cliente</a><br/>


        <!-- Listagem de clientes -->   
        <table style="width: 40%;">
            <thead style="text-align: center">
                <tr>
                    
                    <td style="background: #BEE9EA">Nome </td>
                    <td style="background: #BEE9EA">Cpf </td>
                    <td style="background: #BEE9EA">Endereço </td>
                    <td style="background: #BEE9EA">Número </td>
                    <td style="background: #BEE9EA">Bairro </td>
                    <td style="background: #BEE9EA">Cidade </td>
                    <td style="background: #BEE9EA">Estado </td>
                    <td style="background: #BEE9EA">Telefone </td>
                    <td style="background: #BEE9EA">Ação </td>
                </tr> 
            </thead>
            <tbody > 
                @foreach ($clientes as $cli)
                <tr>
                    
                    <td style="background: #9ba2ab">{{$cli->nomcli}}</td>
                    <td style="background: #9ba2ab">{{$cli->cpfcli}}</td>
                    <td style="background: #9ba2ab">{{$cli->endcli}}</td>
                    <td style="background: #9ba2ab">{{$cli->numcli}}</td>
                    <td style="background: #9ba2ab">{{$cli->baicli}}</td>
                    <td style="background: #9ba2ab">{{$cli->cidcli}}</td>
                    <td style="background: #9ba2ab">{{$cli->ufcli}}</td>
                    <td style="background: #9ba2ab">{{$cli->telcli}}</td>
                    
                    <td style="text-align: center">
                        
                        <button onclick="location.href='{{route('cliente.edit', $cli->codcli)}}'" type="button">Editar</button>
                        
                        <form action="{{route('cliente.destroy', $cli->codcli)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                            
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
       
    </table>
</body>
</html>


