<header class="navbar fixed-top navbar-expand-lg bg-white border-bottom pb-0" role="header">
    <div class="container-fluid">
        <div class="navbar-brand">
            <?php 
                echo('<a href="/" title="Giron Pully">');
            ?>
            <h2 class="mb-0 text-dark">
                <img src="/images/logo/logo-pully-express-train.png" style="max-height:52px;" alt="Pully Express"/>
                Giron Pully
            </h2>
            <?php 
                echo('</a>');
            ?>
        </div>
        <div class="row">
            <ul class="col navbar-nav mr-auto text-center">
                <?php
                    echo('<li class="nav-item d-none d-md-block">');
                        echo('<a class="nav-link py-3 px-3'); 
                        if( strpos($_SESSION['page'], 'societes') !== false ){ echo(' active');}
                        echo('" href="/societes/" title="Sociétés participants au giron">');
                            echo('<i data-feather="users" class="mr-2"></i> Sociétés');
                        echo('</a>');
                    echo('</li>');
                    echo('<li class="nav-item d-none d-md-block">');
                        echo('<a class="nav-link py-3 px-3');
                        if( strpos($_SESSION['page'], 'plans') !== false ){ echo(' active');}
                        echo('" href="/plans/" title="Plans et informations utiles">');
                            echo('<i data-feather="map" class="mr-2"></i> Plans');
                        echo('</a>');
                    echo('</li>');
                    echo('<li class="nav-item d-none d-md-block">');
                        echo('<a class="nav-link py-3 px-3');
                        if( strpos($_SESSION['page'], 'concours') !== false ){ echo(' active');}
                        echo('" href="/concours/" title="Concours ">');
                            echo('<i data-feather="award" class="mr-2"></i> Concours');
                        echo('</a>');
                    echo('</li>');
                    echo('<li class="nav-item d-none d-md-block">');
                        echo('<a class="nav-link py-3 px-3');
                        if( strpos($_SESSION['page'], 'restauration') !== false ){ echo(' active');}
                        echo('" href="/restauration/" title="Concours ">');
                            echo('<i data-feather="coffee" class="mr-2"></i> Wagons Restaurants');
                        echo('</a>');
                    echo('</li>');
                    echo('<li class="nav-item d-none d-md-block">');
                        echo('<a class="nav-link py-3 px-3');
                        if( strpos($_SESSION['page'], 'galerie') !== false ){ echo(' active');}
                        echo('" href="/galerie/" title="Galerie Photos">');
                            echo('<i data-feather="image" class="mr-2"></i> Galerie');
                        echo('</a>');
                    echo('</li>');
                    echo('<li class="nav-item d-none d-md-block">');
                        echo('<a class="nav-link py-3 px-3');
                        if( strpos($_SESSION['page'], 'organisation') !== false ){ echo(' active');}
                        echo('" href="/organisation/" title="Organisation du Giron">');
                            echo('<i data-feather="home" class="mr-2"></i> Organisation');
                        echo('</a>');
                    echo('</li>');
                    echo('<li class="nav-item d-none d-md-block">');
                        echo('<a class="nav-link py-3 px-3');
                        if( strpos($_SESSION['page'], 'benevoles') !== false ){ echo(' active');}
                        echo('" href="/benevoles/" title="Nous aider">');
                            echo('<i data-feather="user-plus" class="mr-2"></i> Bénévoles');
                        echo('</a>');
                    echo('</li>');
                ?>
            </ul>
        </div>
        <div class="d-block d-md-none dropdown position-static">
            <button class="dropdown-toggle border-0 m-0 p-0 bg-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                <i data-feather="menu"></i>
            </button>
            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton" id="responsive_menu_dropdown">
                <?php
                    echo('<a class="dropdown-item'); 
                    if( strpos($_SESSION['page'], 'societes') !== false ){ echo(' active');}
                    echo('" href="/societes/" title="Sociétés participants au giron">');
                        echo('<i data-feather="users" class="mr-2"></i> Sociétés');
                    echo('</a>');

                    echo('<a class="dropdown-item');
                    if( strpos($_SESSION['page'], 'plans') !== false ){ echo(' active');}
                    echo('" href="/plans/" title="Plans et informations utiles">');
                        echo('<i data-feather="map" class="mr-2"></i> Plans');
                    echo('</a>');

                    echo('<a class="dropdown-item');
                    if( strpos($_SESSION['page'], 'concours') !== false ){ echo(' active');}
                    echo('" href="/concours/" title="Concours ">');
                        echo('<i data-feather="award" class="mr-2"></i> Concours');
                    echo('</a>');

                    echo('<a class="dropdown-item');
                    if( strpos($_SESSION['page'], 'restauration') !== false ){ echo(' active');}
                    echo('" href="/restauration/" title="Concours ">');
                        echo('<i data-feather="coffee" class="mr-2"></i> Wagons Restaurants');
                    echo('</a>');

                    echo('<a class="dropdown-item');
                    if( strpos($_SESSION['page'], 'galerie') !== false ){ echo(' active');}
                    echo('" href="/galerie/" title="Galerie Photos">');
                        echo('<i data-feather="image" class="mr-2"></i> Galerie');
                    echo('</a>');

                    echo('<a class="dropdown-item');
                    if( strpos($_SESSION['page'], 'organisation') !== false ){ echo(' active');}
                    echo('" href="/organisation/" title="Organisation du Giron">');
                        echo('<i data-feather="home" class="mr-2"></i> Organisation');
                    echo('</a>');

                    echo('<a class="dropdown-item');
                    if( strpos($_SESSION['page'], 'benevoles') !== false ){ echo(' active');}
                    echo('" href="/benevoles/" title="Nous aider">');
                        echo('<i data-feather="user-plus" class="mr-2"></i> Bénévoles');
                    echo('</a>');
                ?>
            </div>
        </div>
    </div>
</header>