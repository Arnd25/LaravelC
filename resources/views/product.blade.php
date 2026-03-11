<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="max-w-360 m-auto gap-5 flex flex-col">
        <div class="flex justify-between">
            <h2 class="text-4xl">Репродукции</h2>
            <div class="h-full mt-3 self-end">
                @foreach($Countries as $country)
                    <button class="hover:cursor-pointer bg-green-300 px-3 py-1.5 border border-green-600 rounded-3xl">{{$country->name}}</button>
                @endforeach
            </div>
        </div>
        
        <div class="grid grid-cols-3 gap-5">
        @foreach($Authors as $Author)
        <div class="bg-green-100 grid grid-rows-3 px-5 py-8 gap-2.5">
            <img src="" alt="" class="bg-gray-600 row-span-2 w-full "/>
            <div class="">
                <p class="text-lg text-gray-600">{{$Author->name}}</p>
                <div class="flex flex-col">
                    <p class="text-3xl">Title</p>
                    <p class="text-lg">Lorem ipsum dolor sit amet consectetur.</p>
                </div>
                <p class="my-6 text-2xl text-green-600">14 500 руб</p>
                <button class="border border-green-600 hover:cursor-pointer text-green-600 text-xl w-full py-3">В корзину</button>
            </div>
        </div>
        @endforeach
    </div>
    </div>
    
</body>
</html>