<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Testa os cenarios da app(devem ser basicos, os complexos são bdd e tdd)');

$I->amOnPage('/app');
//$I->fillField('username', 'davert');
//$I->fillField('password', 'qwerty');
//$I->click('LOGIN');
$I->see('vem do angular');
$I->see('bem vindo');
$I->see('xablau');
