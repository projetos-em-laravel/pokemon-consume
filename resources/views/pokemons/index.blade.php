<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemóns</title>

    <link rel="stylesheet" href="{{url('vendor/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.7.2-->
    <link rel="stylesheet" href="{{url('vendor/css/bulma.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="canalti.css">
</head>
<body>
    <section class="hero is-info is-small">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    Pokemóns List
                </p>
                <p class="subtitle">
                    Consumption API.
                </p>
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

    @foreach($pokemons->pokemon as $Pokemon)
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
                <img src="{{$Pokemon->img}}" alt="{{$Pokemon->name}}" class="" data-target="modal-image2">
            </figure>
            </div>
            <div class="card-content has-text-centered">
            <div class="content">
                <h4>{{$Pokemon->name}}</h4>
                <p>
                <ul>
                @if(isset($Pokemon->next_evolution))
                    {{"Próximas evoluções: "}}
                    @foreach($Pokemon->next_evolution as $ProximaEvolucao)
                        {{$ProximaEvolucao->name . " "}}
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
