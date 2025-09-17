<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css']) 
    <title>offertes</title>
</head>

<body>
    <div>
        <ul>
            <li><a class="bg-white text-black p-10 " href="/">Home</a></li>
        </ul>
    </div>
    <div class="flex justify-center bg-black">
        <div class="bg-red-600  ">
            <h1>Producten voor offertes ID: {{ $data['offertenummer'] }}</h1>
            <p>offertenummer {{ $data['offertenummer'] }}</p>
            <p>klant {{ $data['klant'] }}</p>
            <p>bedrag {{ $data['bedrag'] }}</p>

        </div>
    </div>
<footer>
    
</footer>
</body>

</html>
