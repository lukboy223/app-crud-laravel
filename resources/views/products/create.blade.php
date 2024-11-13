<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>create product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)

            <li>{{$error}}</li>

            @endforeach
        </ul>
        @endif
    </div>
    <form method    ="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name">
        </div>
        <div>
            <label for="amount">amount</label>
            <input type="text" name="amount" id="amount" placeholder="Amount">
        </div>
        <div>
            <label for="price">price</label>
            <input type="text" name="price" id="price" placeholder="Price">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description">
        </div>
        <input type="submit" value="Save new product">
    </form>
</body>
</html>