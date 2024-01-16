<form action="/api/brandpost" method="post">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="country" placeholder="Country">
    <select name="brand_id" placeholder="Brand Id">
        @foreach ($brands as $brand)
            <option values="{{$brand->id}}"> {{$brand->name}}</option>
        @endforeach
    </select>
    <input type="submit" value="OK">
</form>