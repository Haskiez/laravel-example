<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cookies and Prices</h1>
    <ul>
        @php 
            $cookies = $cookies = [
                ['name' => "chocolate chip", "price" => 1.49],
                ['name' => "oatmeal rasin", "price" => 1.49],
                ['name' => "sugar cookie", "price" => 1.49],
            ];
        @endphp
        @foreach($cookies as $cookie)
            <li>{{$cookie['name']}} -- {{$cookie['price']}}</li>
        @endforeach
    </ul>
</body>
</html>