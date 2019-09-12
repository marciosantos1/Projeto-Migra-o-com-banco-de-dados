<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Categoria</title>

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
    <body>

        <a href="{{route('categoria.create')}}">Adicionar Categoria</a>
        
        <!-- Listagem de categorias -->   
        <table style="width: 40%;">
            <thead style="text-align: center">
                <tr>
                    <td style="background: #BEE9EA">Cód. </td>
                    <td style="background: #BEE9EA">Nome </td>
                    <td style="background: #BEE9EA">Ação </td>
                </tr> 
            </thead>
            <tbody>
                @foreach ($categorias as $c)
                <tr>
                    <td style="background: #9ba2ab">{{$c->codcat}}</td>
                    <td style="background: #9ba2ab">{{$c->nomcat}}</td>
                    <td style="text-align: center">

                        <button onclick="location.href ='{{route('categoria.edit', $c->codcat)}}'" type="button">Editar</button>

                        <form action="{{route('categoria.destroy', $c->codcat)}}" method="post">
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

