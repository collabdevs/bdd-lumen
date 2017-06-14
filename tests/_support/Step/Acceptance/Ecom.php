<?php
namespace Step\Acceptance;

class Ecom extends \AcceptanceTester{
	//private $ecom;

    public function __construct()
    {
        $I = $this;
        //$this->ecom = new \App\Ecom; 
    }

    //os snippets devem vir abaixo

    /**
     * @Given i have categorie with name :arg1
     */
     public function iHaveCategorieWithName($arg1)
     {
        throw new \Codeception\Exception\Incomplete("Step `i have categorie with name :arg1` is not defined");
     }

    /**
     * @When i call categorie_save
     */
     public function iCallCategorie_save()
     {
        throw new \Codeception\Exception\Incomplete("Step `i call categorie_save` is not defined");
     }

    /**
     * @Then i call categories
     */
     public function iCallCategories()
     {
        throw new \Codeception\Exception\Incomplete("Step `i call categories` is not defined");
     }

    /**
     * @Then Then i should see that total number categories is :arg1
     */
     public function thenIShouldSeeThatTotalNumberCategoriesIs($arg1)
     {
        throw new \Codeception\Exception\Incomplete("Step `Then i should see that total number categories is :arg1` is not defined");
     }

    /**
     * @Then i call categorie
     */
     public function iCallCategorie()
     {
        throw new \Codeception\Exception\Incomplete("Step `i call categorie` is not defined");
     }

    /**
     * @Then Then i should see that categorie name is :arg1
     */
     public function thenIShouldSeeThatCategorieNameIs($arg1)
     {
        throw new \Codeception\Exception\Incomplete("Step `Then i should see that categorie name is :arg1` is not defined");
     }

}

