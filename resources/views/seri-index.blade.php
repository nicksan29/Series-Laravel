@include("parts.header")
<section class="container-fluid" id="Cont1">
    <div class="row">
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
                                <div class="col-12">
                                    <tr>
                                        <td class="pou">{{ $s->name }}</td>
                                        {{-- <td>{{$s->seasons}}</td>
                                        <td>{{ $s->gen }}</td> --}}
                                        <td><img src="/storage/series/{{ $s->image }}" alt=""></td>
                                        <td><a href="{{route("seri.edit" , $s->id)}}">Editar</a></td>
                                        <td><form action="{{route("seri.delete", $s->id)}}" method="POST">
                                        @csrf
                                        @method("delete")
                                        <button type="submit">Deletar</button>
                                        </form></td>
                                        <td><form action="{{route("seri.bio", $s->id)}}">
                                        <button type="submit" >Ver</button>
                                        </form></td>
                                    </tr>
                                </div>
                            @endforeach
            </div>
        </div>
    </div>
</section>
@include("parts.footer")