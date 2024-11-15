<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>edit product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)

            <li>{{$error}}</li>

            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="amount">amount</label>
            <input type="text" name="amount" id="amount" placeholder="Amount" value="{{$product->amount}}">
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" name="price" id="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description" value="{{$product->description}}">
        </div>
        <input type="submit" value="Update product">
    </form>
</body>
</html>