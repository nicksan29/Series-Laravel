@include("parts.header")
    <a href="{{route("seri.index")}}">Voltar</a>

        <h1>{{$seri->name}}</h1>
        <h2>Temporadas: {{$seri->seasons}}</h2>
        <h2>Genero: {{$seri->gen}}</h2>
        <img src="/storage/series/{{ $seri->image }}" alt="">
        <h3>{{$seri->bio}}</h3>

@include("parts.footer")