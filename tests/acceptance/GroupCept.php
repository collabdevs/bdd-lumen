<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
//$I->fillField('username', 'davert');
//$I->fillField('password', 'qwerty');
//$I->click('LOGIN');
$I->see('Lumen (5.4.6) (Laravel Components 5.4.*)');
