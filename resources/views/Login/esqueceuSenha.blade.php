<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Academias Go</title>
  <!--CSS BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--Link Css-->
  <link rel="stylesheet" href="../public/css/styleLogin.css">

  <script defer src="scripts/EscondeMostra.js"></script>
</head>

<body>

  <div class="container col-md-6 form-container ">
    @if (session('msg'))
       <p class="alert alert-danger">{{session('msg')}}</p>
    @endif
    <h1 class="mb-5 m-auto">Redefinir Senha</h1>
    <form class="col-md-8 m-auto confirmaEmail" action="{{route('recSenhaToEmail')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="">Confirme seu email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email:" required>
      </div>
      <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mb-3 align-center" onclick="troca" id="EnviarEmail">Enviar</button>
      </div>
      <a class="contato d-flex justify-content-center" href="https://wa.me/+55087988572731" target="_blank">Entrar em
        contato</a>
    </form>


  </div>



  <!--SCRIPTS-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"></script>

</body>

</html>