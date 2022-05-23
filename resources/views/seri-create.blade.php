@include("parts.header")

<a href="{{route('seri.index')}}">Voltar</a>
<form action="{{ route('seri.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="number" name="seasons" placeholder="Temporadas">
    <input type="text" name="gen" placeholder="Genero">
    <input type="file" name="image" placeholder="URL da imagem">
    <button type="submit">Enviar</button>
</form>
@include("parts.footer")