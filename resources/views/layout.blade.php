<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Fix Title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald%7cRoboto+Slab" rel="stylesheet">
    <style>
        @media(min-width: 1200px){
            .container{
                max-width: 100%;
            }
        }
        body{
            background-color: #a0a0a0;
            text-align: center;
        }
        p{
            color: white;
        }
    </style>
</head>
<body>
    <div class="container" style="margin: 0px; padding: 0px; width: 100vw;">

        <nav class="navbar navbar-expand navbar-dark" style="background-color: #254839;">
            <div class="col-3"></div>
            <div class="col-2">
                <div class="dropdown"><!--Dropdown for pokemon info in different generations-->
                    <button class="btn btn-dark dropdown-toggle" style="background-color: #28872F;" type="button" id="pokedexMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pokédex</button>
                    <div class="dropdown-menu" aria-labelledby="pokedexMenuButton">
                        <a class="dropdown-item" href="/generation1Dex/">Red/Blue</a>
                        <a class="dropdown-item" href="/generation2Dex/">Gold/Silver</a>
                        <a class="dropdown-item" href="/generation3Dex/">Ruby/Sapphire</a>
                        <a class="dropdown-item" href="/generation4Dex/">Diamond/Pearl</a>
                        <a class="dropdown-item" href="/generation5Dex/">Black/White</a>
                        <a class="dropdown-item" href="/generation6Dex/">X/Y</a>
                        <a class="dropdown-item" href="/generation7Dex/">Sun/Moon</a>
                        <a class="dropdown-item" href="/generation8Dex/">Sword/Shield</a>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <a href="/"><img class="text-light" src="" alt="POKÉMON"></a><!-- Logo for website-->
            </div>
            <div class="col-2">
                <div class="dropdown"><!--Dropdown for moves in different generations-->
                    <button class="btn btn-dark dropdown-toggle" style="background-color: #28872F;" type="button" id="movesMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Moves</button>
                    <div class="dropdown-menu" aria-labelledby="movesMenuButton">
                        <a class="dropdown-item" href="/generation1Moves/">Red/Blue</a>
                        <a class="dropdown-item" href="/generation2Moves/">Gold/Silver</a>
                        <a class="dropdown-item" href="/generation3Moves/">Ruby/Sapphire</a>
                        <a class="dropdown-item" href="/generation4Moves/">Diamond/Pearl</a>
                        <a class="dropdown-item" href="/generation5Moves/">Black/White</a>
                        <a class="dropdown-item" href="/generation6Moves/">X/Y</a>
                        <a class="dropdown-item" href="/generation7Moves/">Sun/Moon</a>
                        <a class="dropdown-item" href="/generation8Moves/">Sword/Shield</a>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </nav>
    </div>

    @yield('content')

    <div class="navbar fixed-bottom navbar-dark bg-dark">
        <p>Pokémon And All Respective Names are Trademark & ©Copyright of Nintendo 1996-2019</p>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>