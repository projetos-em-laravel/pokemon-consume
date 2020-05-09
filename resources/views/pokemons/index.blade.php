<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemóns</title>

    <link rel="stylesheet" href="{{url('vendor/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('custom/css/api.css')}}">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="{{url('vendor/css/bulma.min.css')}}" />
</head>
<body>


    <section class="hero is-small is-primary is-bold">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <img class="image-logo" src="{{url('assets/Moon.png')}}" alt="Logo">
                    </div>
                </div>
            </nav>
        </div>

        <!-- Hero content: will be in the middle -->
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Pokemóns List
                </h1>
                <h2 class="subtitle">
                    Consumption API.
                </h2>
            </div>
        </div>
    </section>

    <div class="box cta">
        <p class="has-text-centered">
            <span class="tag is-danger">Jonathan'S</span>
            <a target="_blank" href="">Github projects.</a>
        </p>
    </div>

    <section class="container">

    @if(isset($pokemons->pokemon))
    @php
        $i = 0;
    @endphp

    @foreach($pokemons->pokemon as $pokemon)
    @php
       $i++;
    @endphp

    @if($i % 3 == 1)
    <div class="columns features">
    @endif
        <div class="column is-4">
        <div class="card">
            <div class="card-image has-text-centered">
            <figure class="image is-128x128">
                <img src="{{$pokemon->img}}" alt="{{$pokemon->name}}" class="" data-target="modal-image2">
            </figure>
            </div>
            <div class="card-content has-text-centered hero is-light">
            <div class="content">
                <h4>{{$pokemon->name}}</h4>
                <p>
                <ul>
                @if(isset($pokemon->next_evolution))
                    {{"Próximas evoluções: "}}
                    @foreach($pokemon->next_evolution as $proximaEvolucao)
                        {{$proximaEvolucao->name . " "}}
                    @endforeach
                @else
                    {{"Não possui próximas evoluções "}}
                @endif
                </ul>
                </p>
            </div>
            </div>
        </div>
        </div>
    @if($i % 3 == 0)
    </div>
    @endif
    @endforeach
    @else
        <p>Nenhum pokemón retornado pela API</p>
    @endif
    </section>
</body>
</html>
