<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Products</h2>
        @foreach($categories as $category)
            <h4>{{$category}}</h4>
        @endforeach
    </body>
</html>