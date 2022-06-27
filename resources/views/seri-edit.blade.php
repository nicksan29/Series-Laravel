@include("parts.header")
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<a href="{{route("seri.index")}}">Voltar</a>
<form action="{{route("seri.update")}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    <input value="{{$seri->id}}" type="hidden" name="id">
    <input value="{{$seri->name}}" type="text" name="name" placeholder="nome">
    <input value="{{$seri->seasons}}" type="number" name="seasons" placeholder="temporadas">
    <input value="{{$seri->gen}}" type="text" name="gen" placeholder="genero">
    <input value="{{$seri->image}}" type="file" name="image" placeholder="URL da imagem">
    <textarea name="bio" id="" cols="30" rows="10" placeholder="Bio">{{$seri->bio}}</textarea>
    <Button type="submit">enviar</Button>
</form>
@include("parts.footer")