<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formula cuadratica</title>
</head>
<body>

    <form action="{{route('cuadratica.store')}}" method="POST" enctype="multipart/form-data"> 
        
        @csrf

        <label ">numero a:</label>
        <br>
        <input type="number" name="a">

        <br><br>

        <label ">Numero b:</label>
        <br>
        <input type="number" name="b">

        <br><br>
        <label ">numero c:</label>

        <br>
        <input type="number" name="c">

        <br><br>
        <button type="submit">CALCULAR</button>


    </form>
    
</body>
</html>