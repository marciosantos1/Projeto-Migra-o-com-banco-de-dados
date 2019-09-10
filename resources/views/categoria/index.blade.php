<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        
        <a href="{{route('categoria.create')}}">Adicionar Categoria</a><br/>
            
        
           <!-- Listagem de categorias -->   
           <table style="width: 50%;">
               <thead>
                   <tr>
                       <td style="background: #34ce57">Cód. </td>
                       <td style="background: #34ce57">Nome </td>
                       <td style="background: #34ce57">Ação </td>
                   </tr> 
               <tbody>
                   @foreach ($categorias as $c)
                   <tr>
                       <td style="background: #34ce57">{{$c->codcat}} </td>
                       <td style="background: #34ce57">{{$c->nomcat}}</td>
                       <td style="background: #34ce57">Editar | Excluir</td>
                   </tr> 
                   @endforeach
               </tbody>
               </thead>
          </table>          
    </body>
</html>

