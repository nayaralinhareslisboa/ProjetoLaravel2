<!DOCTYPE html>
<html>
<head>
    <title>Minha Aplicação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container my-5">
        <div class="row row-cols-1">
            <div class="col">
                <div class="alert alert-success" role="alert">
                    <h4 class="text-center alert-heading">{{$mensagem}}</h4>
                </div>
            </div>
            <div class="col">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <a class="btn btn-success" href="{{ route('produtos.index')}}">Voltar a lista</a>
                </div>
            </div>
         </div>
    </div>
    
</body>
</html>
