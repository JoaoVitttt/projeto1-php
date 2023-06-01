<?php
//echo "<h1> Aqui terá os personagens</h1>";

include_once("dao/manipuladados.php");

$busca = new manipuladados();

$busca->setTable("tb_personagens");
$personagens = $busca->getAllDataTable();
foreach ($personagens as $persona){ ?>
<?php }?>

<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imga/ArthurSl_auto_x2.jpg" class="d-block w-100" alt="...">

            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/John_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>John Marston</span></h1>
                        <p>Um órfão que foi acolhido por Dutch quando ainda tinha 12 anos, John teve que sobreviver
                            usando sua astúcia. Destemido e de temperamento forte, ele e Arthur são os membros
                            preferidos da gangue de Dutch</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Dutch_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Dutch van der Linde</span></h1>
                        <p>Líder da gangue. Idealista, anarquista, carismático, estudado e bem vivido, mas começa a
                            aparentar estar perdendo a cabeça devido a pressão do mundo moderno.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Micah_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Hosea_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Molly_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Susan_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Pearson_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Charles_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Bill_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Leopold_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Abigail_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Jack_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Karen_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Javier_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Tilly_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Uncle_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>

                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Mary_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Lenny_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Josiah_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Reverend_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Sean_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imga/Sadie_auto_x2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span>Arthur Morgan</span></h1>
                        <p>O homem mais competente da gangue de Dutch, ele faz parte dessa vida desde que era um garoto.
                            Um homem tranquilo, mas sem piedade, ainda que tenha seu próprio senso de honra. Um homem
                            que garante que o trabalho seja feito.</p>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
    </div>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next"
        style="padding: 0rem 0 14rem 8rem;">
        <span class="" aria-hidden="true"><i class="fa-solid fa-arrow-right-long"
                style="font-size: 55px; color: #fff;"></i></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>