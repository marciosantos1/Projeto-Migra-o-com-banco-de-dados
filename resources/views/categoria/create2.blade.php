<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 223</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>                                                
        
        <form action="{{route('cliente.store')}}" method="post">
            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->
            
            <label for='nomcli'>Nome do cliente</label><br/>
            <input type="text" name="nomcli" id="nomcli"/><br/><br/>
            <button type="submit">Adicionar</button>
            
            <label for='cpfcli'>Cpf</label><br/>
            <input type="text" name="cpfcli" id="cpfcli"/><br/><br/>
            <button type="submit">Adicionar</button>
           
        </form></br>
        
    </body>
</html>

