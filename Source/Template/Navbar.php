<?php

namespace Source\Template;

class Navbar 
{
    private $BootstrapNav = "
<div class='container-fluid'>
    <nav class='navbar navbar-expand-lg navbar-dark navcolor fixed-top p-2'>
        <div class='container-fluid justify-content-center'>
            <button class='mr-auto navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <a class='navbar-brand mr-auto text-center' href='#'><img class='text-center' src='/Source/img/glasslogo.png' style='width:150px;'></a>
            <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav ml-auto mb-2 mb-lg-0 text-center'>
                <li class='nav-item'>
                <a class='nav-link letter-g active' aria-current='page' href='index.php'>Home</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                <a class='nav-link letter-g' href='QuemSomos.php'>Quem Somos</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                <a class='nav-link letter-g' href='Projetos.php'>Projetos</a>
                </li>
                <div class='divider-vertical d-lg-block d-none my-auto'></div>
                <li class='nav-item'>
                <a class='nav-link letter-g' href='FaleConosco.php'>Fale Conosco</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</div>";

    

    /**
     * Get the value of BootstrapNav
     */ 
    public function getBootstrapNav()
    {
        echo $this->BootstrapNav;
    }
}

    
