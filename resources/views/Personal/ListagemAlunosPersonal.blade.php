<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academias Go</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!--CSS-->
    <link rel="stylesheet" href="../public/css/css.css">

    <!--ICONs-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <!--SÓ APARECE NO CELULAR-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--LINK-->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/homePersonal">Alunos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/homePersonal-treino">Exercício</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/homePersonal-cardio">Cardio</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container bg-light " style="width: 90%;text-align: center;">
        @if (session('msg'))
        <p class="alert alert-success">{{session('msg')}}</p>
        @endif
        <div class="row ">
            <div class="col-sm-2" style="display: flex;flex-direction: column;justify-content: space-around;">
                <h4 id="saudacao"></h4>
                <div>
                    @if(!empty($usuario->foto))
                    <div type="file" class="fotoPerfil" style="padding:0px!important">
                        <img src="img/{{$usuario->foto}}" alt="" style="height: 6rem;width: 6rem;border-radius: inherit;">
                    </div>
                    @else
                    <div type="file" class="fotoPerfil" style="background: rgb(219, 221, 223);">
                        <img src="../public/img/user.png" alt="" style="height: 3.5rem; width:3.5rem;">
                    </div>
                    @endif
                </div>
                <p><b>{{$usuario->name}}</b></p>
                <p class="mb-4">ID: {{$usuario->id}}</p>
                <p>{{$personal->filial}}</p>
                <p>{{$personal->cref}}</p>
                <a class="btn btn-danger" href="/logout">Sair</a>
                <p>Garanhuns - PE</p>
            </div>

            <div class="col-sm-10">
                <h2 class="texto mb-4">
                    <b> Alunos Cadastrados </b>
                </h2>
                <form class="forms-pesquisa" action="/homePersonal" method="get">
                    <input type="text" name="search" class="input form-control me-2" placeholder="Procure aluno" id="search">
                </form>
                <div class="table-responsive rolagem">
                    @if (empty($aluno) && $busca)
                    <p><a href="/homePersonal">Aluno não encontrado</a></p>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Unidade</th>
                                <th>Objetivo</th>
                                <th>Informações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aluno as $alunos)
                            <tr>
                                @foreach ($entidade as $entidades)
                                @if($alunos->id_usuario==$entidades->id)
                                <td>{{$entidades->name}}</td>
                                <td>{{$alunos->filial}}</td>
                                <td>{{$alunos->objetivo}}</td>
                                <td>
                                    <a class="btn btn-primary" href="/detalhesAlunoPersonal/{{$alunos->id}}">Perfil</a>
                                    <a class="btn btn-primary" href="/treinosAluno/{{$alunos->id}}">Treinos</a>
                                </td>
                                @endif
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
                <div class="col-md-12">
                    <a href="/cadastroAlunoPersonal" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>

        </div>
    </div>

    <script src="../public/js/jquery.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="../public/js/script.js"></script>
    <script src="../public/js/saudacao.js"></script>


</body>

</html>