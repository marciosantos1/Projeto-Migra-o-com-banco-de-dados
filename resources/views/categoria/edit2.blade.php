<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 224</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
       
       <h3>Editando o Cliente {{$cliente->nomcli}}</h3>
        
        <form action="{{route('cliente.update', $cliente->codcli)}}" method="post">
            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->
            @method('patch')
            
            
            <label for='nomcli'>Nome do Cliente</label><br/>
            <input type="text" name="nomcli" id="nomcli" value="{{$cliente->nomcli}}"/><br/><br/>
            <button type="submit">Editar</button>
           
        </form>
    </body>
</html>



