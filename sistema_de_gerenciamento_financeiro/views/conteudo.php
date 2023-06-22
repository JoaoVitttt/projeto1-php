<?php 
    // session_start();
    // if(empty($_SESSION)){
    //     print("<script>location.href='?view=principal';</script>"); 
    // }

    session_start();
    if(empty($_SESSION)){
        print("<script>location.href='index.php';</script>"); 
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel='stylesheet' type='text/css' media='screen' href='./css/style.css'>
    
</head>
<body>
    <!-- <h1>Hello, World!</h1> -->
    <div class="grid-conteudo">
        <!-- Menu TOPO -->
        <!-- Menu TOPO -->
        <!-- Menu TOPO -->
        <!-- Menu TOPO -->
        <!-- Menu TOPO -->
        <!-- Menu TOPO -->
        <!-- Menu TOPO -->
        <header class="header">

            <div class="icon-menutopo" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
            <div class="icon-lupa">
                <span class="material-icons-outlined">search</span>
            </div>
            <div class="icons-direita">
                <span class="material-icons-outlined">notifications</span>
                <span class="material-icons-outlined">email</span>
                <span class="material-icons-outlined text-red">account_circle</span>
            </div>

        </header>

        <!-- Menu Lateral Esquerdo -->
        <!-- Menu Lateral Esquerdo -->
        <!-- Menu Lateral Esquerdo -->
        <!-- Menu Lateral Esquerdo -->
        <!-- Menu Lateral Esquerdo -->
        <!-- Menu Lateral Esquerdo -->
        <!-- Menu Lateral Esquerdo -->

        <aside id="sidebar">
            <div class="logo_menu flex">
                <span class="nav_image">
                  <img src="img/tj-logo.jpg" alt="logoMenu_img" />
                </span>
                <span class="logo_nome">BINANCE</span>
                <i class="bx bx-lock-alt" id="icon-cadeado"></i>
            </div>
            <div class="menu_container">
                
            
                <ul class="list-item">
                    <div class="menu_titulo flex">
                        <span class="txt_titulo">Dashboard</span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex">
                        <i class="bx bx-home-alt"></i>
                        <span>Overview</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                        <i class="bx bx-grid-alt"></i>
                        <span>All Projects</span>
                        </a>
                    </li>
                </ul>
            
                <ul class="list-item">
            
                    <div class="menu_titulo flex">
                        <span class="txt_titulo">Editor</span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex">
                        <i class="material-icons-outlined">query_stats</i>
                            <span>Magic Build</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-folder"></i>
                            <span>New Projects</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-cloud-upload"></i>
                            <span>Upload New</span>
                        </a>
                    </li>
            
                </ul>
            
                <ul class="list-item">
            
                    <div class="menu_titulo flex">
                        <span class="txt_titulo">Setting</span>
                    </div>
                    <li class="item">
                        <a href="views/PDF.php" class="link flex">
                            <i class="material-icons-outlined">file_download</i>
                            <span>PDF</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class="bx bx-cog"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="?view=logout" class="link flex">
                            <i class="bx bx-award"></i>
                            <span>Sair</span>
                        </a>
                    </li>
            
                </ul>
            
                <div class="perfil_user flex">
                    <span class="nav_image">
                    <img src="img/imgUSER.jpeg" alt="user_img" />
                    </span>
                    <div class="data_text">
                        <span class="name">
                            <?php 
                                print("". $_SESSION["nome"]);
                            ?>
                        </span>
                        <span class="email">
                            <?php 
                                print("". $_SESSION["email"]);
                            ?>
                        </span>
                    </div>
                </div>
            </div>

        </aside>
 

        <!-- Conteúdo Principal-->
        <!-- Conteúdo Principal-->
        <!-- Conteúdo Principal-->
        <!-- Conteúdo Principal-->
        <!-- Conteúdo Principal-->
        <!-- Conteúdo Principal-->
        <!-- Conteúdo Principal-->
        

        <main class="conteudo-container">

            <!-- CARD  -->
            <!-- CARD  -->
            <!-- CARD  -->
            <!-- CARD  -->
            <!-- CARD  -->
            <!-- CARD  -->

            <div class="conteudo-titulo">
                <p class="font-weight-bold">DASHBOARD</p>
            </div>

            <div class="conteudo-cards">
                    <div class="card">
                    <div class="card-text">
                        <p class="text-primary">Entradas:</p>
                        <span class="material-icons-outlined text-green">attach_money</span>
                    </div>
                    <span class="incomes">0.00</span><!--  script -->
                    <!-- <span class="text-primary font-weight-bold">+ R$0.00</span> --> 
                </div>

                <div class="card">
                    <div class="card-text">
                        <p class="text-primary">Saídas:</p>
                        <span class="material-icons-outlined text-orange">money_off</span>
                    </div>
                    <span class="expenses">0.00</span><!--script -->
                    <!-- <span class="text-primary font-weight-bold">- R$0.00</span> -->
                </div>

                <div class="card">
                    <div class="card-text">
                        <p class="text-primary">Saída:</p>
                        <span class="material-icons-outlined text-blue">savings</span>
                    </div>
                    <span class="total">0.00</span><!--script -->
                    <!-- <span class="text-primary font-weight-bold">R$0.00</span> -->
                </div>
            </div>


            <!-- INSERT ITEM -->
            <!-- INSERT ITEM -->
            <!-- INSERT ITEM -->
            <!-- INSERT ITEM -->
            <!-- INSERT ITEM -->
            <!-- INSERT ITEM -->
         
            <form action="?view=salvaritem" method="post" class="newItem">
                <input type="hidden" name="acao" value="cadastraritem">

                <div class="col-auto">
                    <label>Descrição</label>
                    <input type="text" name="descricao" class="form-control" id="desc" autofocus /><!--script -->
                </div>
                <div class="col-auto">
                    <label>Valor</label>
                    <input type="number" name="valor" class="form-control" id="amount" /><!--script -->
                </div>
                <div class="col-auto">
                    <label>Data</label>
                    <input type="date" name="dat" class="form-control" id="data" /><!--script -->
                </div>
                <div class="col-auto">
                    <label>Tipo</label>
                    <select class="form-select" id="type" aria-label="Default select example"><!--script -->
                        <option value="1">Entrada</option>
                        <option value="2">Saída</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary" id="btnNew">Enviar</button><!--script -->
                </div>
            </form>
            

            <!-- Lista - Table -->
            <!-- Lista - Table -->
            <!-- Lista - Table -->
            <!-- Lista - Table -->
            <!-- Lista - Table -->
            <!-- Lista - Table -->
            <!---Lista - Table --->
            <!-- Lista - Table -->
            <table>
                    <thead>
                        <tr>
                        <th>Descrição</th>
                        <th class="columnAmount">Valor</th>
                        <th class="columnAmount">Vencimento</th>
                        <th class="columnType">Tipo</th>
                        <th class="columnAction"></th>
                        </tr>
                    </thead>
                </table>
            <?php 
                $sql = "SELECT * FROM receitas";
                $res = $conn -> query($sql);

                $qtd = $res -> num_rows;
                If($qtd > 0){
                    print("<table class='table table-hover table-striped table-bordered'>");

                    print("<tr>");
                    print "<th>Descrição</th>";
                    print "<th>Valor</th>";
                    print "<th>Vencimento</th>";
                    print "<th>Tipo</th>";
                    print "<th>Ações</th>";
                    print("</tr>");

                    while($row = $res->fetch_object()){
                        print("<tr>");
                        print "<td>".$row->descricao."</td>";
                        print "<td>".$row->valor."</td>";
                        print "<td>".$row->dat."</td>";
                        print "<td>".$row->tipo."</td>";
                        print "<td>
                        <button onclick=\"location.href='?view=editaritem&id=".$row->id."';\" class='btn btn-success'>Editar</button>

                        <button onclick=\"if(confirm('Tem certeza que deseja EXCLUIR?')){location.href='?view=salvaritem&acao=excluiritem&id=".$row->id."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
                        </td>";
                        print("</tr>");
                    }
                    print("</table>");
                }else{
                    print("<p class='alert alert-danger'>Não foi encontrado nenhum resultado!</p>");
                }
            ?>

            

            <!-- CHART -->

            <div class="charts">
                <div class="charts-card">
                    <p class="charts-title">Cálculo Mensal</p>
                    <div id="bar-chart"></div>
                </div>

                <div class="charts-card">
                    <p class="charts-title">Entrada X Saída</p>
                    <div id="area-chart"></div>
                </div>
            </div>  
                     
        </main>
    </div>
    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.41.0/apexcharts.min.js"></script>
    <!-- JS -->
    <script src='js/script.js'></script>
</body>
</html>