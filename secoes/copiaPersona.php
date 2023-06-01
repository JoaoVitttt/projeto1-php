<?php
//echo "<h1> Aqui terá os personagens</h1>";

include_once("dao/manipuladados.php");
include_once("adm/url.php");

$busca = new manipuladados();

$busca->setTable("tb_personagens");
$personagens = $busca->getAllDataTable();
foreach ($personagens as $persona) { ?>


<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">

            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="local">
                        <button class="bom">Sobre Mim</button>
                    </div>
                </div>
            </div>
            <img src="imga/logooRD2.png" class="logame" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $arquivo['$path']; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption d-md-block">
                <div class="info">
                    <div class="text">
                        <h1><span><?=$persona['txtNome'];?></span></h1>
                        <p><?=$curso['txtDesc'];?></p>
                        <div class="redes-sociais">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
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

<?php } ?>