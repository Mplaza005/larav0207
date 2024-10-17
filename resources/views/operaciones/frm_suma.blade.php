<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma</title>
</head>
<body>
    <h1>Suma</h1>

    <form action="{{route('operaciones.store')}}" method="POST" enctype="multipart/form-data"> 
        
        @csrf

        <label ">Numero 1:</label>
        <br>
        <input type="number" name="num1">

        <br><br>

        <label ">Numero 2:</label>
        <br>
        <input type="number" name="num2">

        <br><br>
        <button type="submit">SUMAR</button>



        
    </form>
    

    

</body>
</html>