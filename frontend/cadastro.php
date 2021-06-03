<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio DT3</title>


    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/site.webmanifest">
    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700&display=swap');
    </style>
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/b0e6bca5b9.js" crossorigin="anonymous"></script>


</head>

<body onload="carregarSeletores()">

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo.png" width="70" height="" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Produtos
                        </a><span class="sr-only">(Página atual)</span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php">Catalogo</a>
                            <a class="dropdown-item" href="cadastro.php">Cadastrar Produto</a>
                        </div>
                    </li>
                    <a class="nav-item nav-link" href="#">Destaques</a>
                    <a class="nav-item nav-link" href="#">Suporte</a>
                    <a class="nav-item nav-link" href="#">Empresa</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/banner/BANNER-Royce-Winter-1-1920x600.jpg" alt="Primeiro Slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/banner/BANNER-UBI-BLACK-DESKTOP-1920x600-1920x600.jpg" alt="Segundo Slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/banner/BANNER-UBI-GREY-DESKTOP-1920x600-1920x600.jpg" alt="Terceiro Slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/banner/HYPERSPACE-PAISAGEM.jpg" alt="Quarto Slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Próximo</span>
        </a>
    </section>

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <li class="breadcrumb-item">//Cadastro dos Produtos</li>
    </section>

    <!-- Cadastro dos produtos -->
    <section class="jumbotron">
        <H2 class="display-8">
            Cadastro dos Produtos
        </H2>
        <hr class="my-4">
        <div class="form-row">
            <div class="col-7">
                <label>Modelo</label>
                <input type="text" name="modelo" class="form-control" id="criar_modelo" placeholder="Modelo">
            </div>
            <label class="col-7">Preço</label>
            <div class="col-7">
                <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                    <span class="input-group-text">0.00</span>
                </div>
                <input type="text" name="preco" class="form-control" id="criar_preco" aria-label="Quantia em Dollar (com ponto e duas casas decimais)">
            </div>
            <div class="col-7">
                <label>Descrição</label>
                <textarea class="form-control" name="descricao" id="criar_descricao" rows="3"></textarea>
            </div>
            <label class="col-7">Url da Imagem</label>
            <div class="col-7">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">https://exemplo.com.br/users/</span>
                </div>
                <input type="text" class="form-control" id="criar_urlImg" aria-describedby="basic-addon3">
            </div>
            <label class="col-7">Disponibilidade</label>
            <div class="col-7">
                <input class="form-check-input" type="radio" name="disponivel" id="criar_disponivel-true" value="true" checked>
                <label class="form-check-label">
                    Disponivel
                </label>
            </div>
            <div class="col-7">
                <input class="form-check-input" type="radio" name="disponivel" id="criar_disponivel-false" value="false">
                <label class="form-check-label">
                    Em falta
                </label>
            </div>
            <button class="btn col-7" class="btn" onClick="criarCadeira()">Confirmar</button>
        </div>
    </section>

    <!-- Atualizar produtos -->
    <section class="jumbotron">
        <H2 class="display-8">
            Atualizar Produtos
        </H2>
        <hr class="my-4">
        <div class="form-row">
            <label class="col-7">Cadeira</label>
            <div class="col-7">
                <select class="form-control" id="atualizar-cadeira" onChange='atualizarCadeiraForm()'>
                </select>
            </div>
            <div class="col-7">
                <label>Modelo</label>
                <input type="text" name="modelo" class="form-control" id="atualizar_modelo" placeholder="Modelo">
            </div>
            <label class="col-7">Preço</label>
            <div class="col-7">
                <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                    <span class="input-group-text">0.00</span>
                </div>
                <input type="text" name="preco" class="form-control" id="atualizar_preco" aria-label="Quantia em Dollar (com ponto e duas casas decimais)">
            </div>
            <div class="col-7">
                <label>Descrição</label>
                <textarea class="form-control" name="descricao" id="atualizar_descricao" rows="3"></textarea>
            </div>
            <label class="col-7">Url da Imagem</label>
            <div class="col-7">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">https://exemplo.com.br/users/</span>
                </div>
                <input type="text" class="form-control" id="atualizar_urlImg" aria-describedby="basic-addon3">
            </div>
            <label class="col-7">Disponibilidade</label>
            <div class="col-7">
                <input class="form-check-input" type="radio" name="disponivel" id="atualizar_disponivel-true" value="true" checked>
                <label class="form-check-label">
                    Disponivel
                </label>
            </div>
            <div class="col-7">
                <input class="form-check-input" type="radio" name="disponivel" id="atualizar_disponivel-false" value="false">
                <label class="form-check-label">
                    Em falta
                </label>
            </div>
            <button class="btn col-7" class="btn" onClick="atualizarCadeira()">Confirmar</button>
        </div>
    </section>

    <!-- Deletar produtos -->
    <section class="jumbotron">
        <H2 class="display-8">
            Deletar Produtos
        </H2>
        <hr class="my-4">
        <form action="" method="POST">
            <div class="form-row">
                <label class="col-7">Cadeira</label>
                <div class="col-7">
                    <select class="form-control" id="deletar-cadeira">
                    </select>
                </div>
                <button type="submit" class="btn col-7" onClick="deletarCadeira()">Confirmar</button>
            </div>
        </form>
    </section>


    <!-- footer -->
    <footer class="page-footer bg-dark">

        <div class="social">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">

                    <div class="col-md-12 text-center">
                        <a href="#"><i class="fab fa-facebook-f white-text mr-4"> </i></a>
                        <a href="#"><i class="fab fa-twitter white-text mr-4"> </i></a>
                        <a href="#"><i class="fab fa-youtube white-text mr-4"> </i></a>
                        <a href="#"><i class="fab fa-instagram white-text"> </i></a>
                    </div>

                </div>
            </div>
        </div>

        <div class="container text-center text-md-left mt-5">
            <div class="row">

                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Atendimento</h6>
                    <hr class="social mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                    <p class="mt-2">
                        De 9:00 às 18:00 – segunda-feira
                        <br>
                        De 9:00 às 20:00 – terça a sexta-feira
                        <br>
                        De 9:00 às 18:00 – Sábado
                        <br>
                        horário de Brasília
                        (exceto feriados)
                    </p>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Institucional</h6>
                    <hr class="social mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height: 2px">

                    <ul class="list-unstyled">
                        <li class="my-2"><a href="#">Sobre nós</a></li>
                        <li class="my-2"><a href="#">Revendas</a></li>
                        <li class="my-2"><a href="#">FAQ</a></li>
                        <li class="my-2"><a href="#">Compra corporativa</a></li>
                        <li class="my-2"><a href="#">Seja um revendedor</a></li>
                    </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Duvidas</h6>
                    <hr class="social mb-4 mt-0 d-inline-block mx-auto" style="width: 110px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><a href="#">Prazos e entregas</a></li>
                        <li class="my-2"> <a href="#">Guia comparativo</a></li>
                        <li class="my-2"> <a href="#">Guia de compras</a></li>
                        <li class="my-2"><a href="#">Garantia</a></li>
                        <li class="my-2"><a href="#">Política de privacidade</a></li>
                        <li class="my-2"> <a href="#">Trocas e devoluções</a></li>
                    </ul>
                </div>

                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contatos</h6>
                    <hr class="social mb-4 mt-0 d-inline-block mx-auto" style="width: 75px; height: 2px">
                    <ul class="list-unstyled">
                        <li class="my-2"><i class="fas fa-envelope mr-3"></i> <a href="mailto:atendimento@dt3.com.br?Subject=Contato%20Dt3%20Sports">atendimento@dt3.com.br</a></li>
                        <li class="my-2"><i class="fa fa-whatsapp mr-3"></i><a href="https://api.whatsapp.com/send?phone=+552120180792">(21) 2018-0792</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright text-center py-3">
            <p>&copy; Copyright
                <a href="https://www.dt3sports.com.br/">© DT3sports 2021</a>
            </p>
        </div>
    </footer>


    <!-- JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>