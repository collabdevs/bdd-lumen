<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Testa os cenarios da api(devem ser basicos, os complexos são bdd e tdd)');

$I->amOnPage('/api');
//$I->fillField('username', 'davert');
//$I->fillField('password', 'qwerty');
//$I->click('LOGIN');
$I->see('app');
