<html>
    <head>
        <title>Criar Curso</title>
    </head>
    <body>
        <h1>Criar Curso</h1>

        <form method="POST" action= "">
            Nome: <input type= "text" name = "nome"><br>

            <input type = "submit" value = "Criar curso">

            <?php
             
             if ($_SERVER['REQUEST_METHOD']) == 'POST'{
                $data = ['nome => $_POST'['nome']];

                $options = [

                    'http' => [
                        'header' => "Content-type:application/json\r\n",
                        'method' => 'POST',
                        'content' => json_encode($data),
                    ],
         
                ];

                $context = stream_context_create($data),
                $result = file_get_contents ('http://127.0.0:5000/cursos', false, 
                $context);

                if ($result == FALSE){

                
                  echo 'Erro ao criar curso!';
                  
                  else}

                  header('Location: cursos.php');

             }

            ?>

            </form>
    </body>
</html>