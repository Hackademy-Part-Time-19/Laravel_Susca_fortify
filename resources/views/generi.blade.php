<x-main-layout>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1 style="color: rgb(228, 228, 228)">Lista generi anime</h1>
                <ul class="list-group list-group-flush">
                    {{-- @dd($dati) --}}
                    @foreach ($dati as $anime)
                        <li><a href="{{route('anime.genre',['genre_id'=>$anime['mal_id']])}}">
                            {{$anime['name']}}
                        </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-main-layout>
