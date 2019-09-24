
function eliminarCategoria(idForm, destino){
                   
                   confirma = confirm("Deseja eliminar esta categoria?");
                   
                   if(confirma){
                   
                   dadosForm = $('#'+idForm).serialize();
                   
                   $.ajax({
                   method: 'post',
                   url: destino,
                   data: dadosForm,
                   datatype: 'html',
                   success: function(data){
                     //ação de sucesso 
                     if (data == 'true'){
                        //$('linha'+idForm).remove(); // pega a linha do html para excluir
                        $('#linha'+idForm).fadeOut(1000);
                     }else{
                          alert('Não foi possível eliminar a categoria!');
                     }
                   },
                   error: function (argument){
                       // ação de erro
                        alert('Erro ao eliminar categoria!');
                   }
                   
               });
                   }   
               return false;
           }
           
           function mostrarEsconderTitulo(){ //Mostra e esconde titulo usando Jquery
            $('#titulo').slideToggle(1000);
       }   
           
           function adicionarCategoria(destino){
               dadosForm = $('#formAdd').serialize();
               nomcat = $('#nomcat').val();
                   
                   if (nomcat.trim() != ""){
                   $.ajax({
                       
                   method: 'post',
                   url: destino,
                   data: dadosForm,
                   datatype: 'html',
                   success: function(data){
                     if (data == "true"){
                       
                         //alert('Categoria adicionada com sucesso !');
                        // history.back();// redireciona para a página de referencia.
                         $('#nomcat').val('');
                         $('#nomcat').focus(); // mantém o cursor na caixa de texto para digitar um após o outro.
                         
                     }else{
                         alert('Falha ao adicionar categoria !');
                     }
                     
                   },
                   error: function (argument){
                       // ação de erro
                        alert('Erro ao eliminar categoria!');
                   }
                   
               });
           }else{
               alert('preencha todos os campos !');
               $('#nomcat').focus();
           }       
               return false;
           }
               
           