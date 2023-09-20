<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Create Product</h1>
   <form action="{{route('product.store')}}" method="post">
     @csrf
     @method('post')
     <div class="field">
        <label for="name">Name:</label>
        <input type="text" name="product_name" placeholder="Name">
     </div>
     <div class="field">
        <label for="name">Description:</label>
        <input type="text" name="product_descritpion" placeholder="descritption">
     </div>
     <div class="field">
        <label for="name">Quantity:</label>
        <input type="text" name="produt_quantity" placeholder="quantity">
     </div>
     <div class="field">
        <label for="name">Price:</label>
        <input type="text" name="product_unit_price" placeholder="price">
     </div>
     <div class="">
        <input type="submit" value="Save">
     </div>
   </form>
</body>
</html>
