# core-php-lumen
Codigo base em php montado em cima do lumen


criar uma feature 
ex: imobiliaria.feature em tests/acceptance
codecept gherkin:snippets acceptance
--> vai mostrar pedaços do codigo que precisamos colocar no arquivo de steps 

criar em tests/_support/Steps/Acceptance
Ex. tests/_support/Steps/Acceptance/Imobiliaria.php

"
<?php
namespace Step\Acceptance;

class Imobiliaria extends \AcceptanceTester{
	private $imobiliaria;

    public function __construct()
    {
        $I = $this;
        $this->imobiliaria = new \App\Imobiliaria; 
    }

    //os snippets devem vir abaixo
}
"


no arquivo codeception.yml habilitar o arquivo de steps
 nessa parte :
 gherkin:
    contexts:
        default: 
            - AcceptanceTester
            - Step\Acceptance\Group
            - Step\Acceptance\User
            ------seu arquivo de steps vem aqui !!!