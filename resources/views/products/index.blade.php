<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Prouct</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <p>this is ma index boi <br>
    <a href="{{route('product.create')}}">create product</a></p>

    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Prijs</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            @foreach($products as $product)
             <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->amount}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                </td>
                <td>
                    <form action="{{route('product.destroy', ['product' => $product])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
             </tr>
            @endforeach
        </table>
    </div>
</body>
</html>