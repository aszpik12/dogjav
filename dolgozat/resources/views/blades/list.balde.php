@foreach ($brands as $brand)
    <form action="/api/brands/{{$brand->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="from-group">
        <input type="submit" value="{{$brand->name}}">
</div>
<form>
@endforeach