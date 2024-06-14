<html>
<head>

    
    <title>
     Cursos
    </title>

</head>
<body>

<h1>Cursos</h1>

<table border "1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
    </tr
    <?php
    $api_url = 'http://127.0.0.1:5000';
    $cursos = json_decode(file_get_contents($api_url));

    foreach($cursos as $curso){

        echo "<tr>";
        echo "<td>{$curso -> id}</td>";
        echo "<td><{curso -> nome}</td>";
        echo "</tr>";

    }

    ?>

</table>
</body>

</html>