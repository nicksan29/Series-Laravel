@include("parts.header")
<section class="container-fluid" id="Cont1">

        <div class="container">
            <div class="row">
                <a href="{{route("seri.create")}}">criar</a>
                            {{-- <tr> --}}
                                {{-- <th>Nome</th> --}}
                                {{-- <th>Temporadas</th>
                                <th>Genero</th> --}}
                                {{-- <th>Imagem</th>
                                <th>Editar</th>
                                <th>Deletar</th>
                                <th>Ver</th> --}}
                            {{-- </tr> --}}
                            @foreach($seri as $s)
                                <div class="col-4 mx-auto">
                                    <div class="card">
                                        <img src="/storage/series/{{ $s->image }}" alt="">
                                        <h2>{{ $s->name }}</h2>
                                        {{-- <td>{{$s->seasons}}</td>
                                        <td>{{ $s->gen }}</td> --}}
                                        <td><a href="{{route("seri.edit" , $s->id)}}">Editar</a></td>
                                        <td><form action="{{route("seri.delete", $s->id)}}" method="POST">
                                        @csrf
                                        @method("delete")
                                        <button type="submit">Deletar</button>
                                        </form></td>
                                        <td><form action="{{route("seri.bio", $s->id)}}">
                                        <button type="submit" >Ver</button>
                                        </form></td>
                                </div>
                                </div>
                            @endforeach
            </div>
        </div>
</section>
@include("parts.footer")