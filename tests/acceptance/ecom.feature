Feature: ecom
  In order to manipulate categories
  As a admin
  I need to create modifiy and delete categories

 Scenario: create new categorie
 	As a user
 	I need to be able to create a new categorie
 	Given i have categorie with name "grupo de teste" 
 	When i call categorie_save 
 	Then  i call categories 
 	And Then i should see that total number categories is "1"
 	


 Scenario: create new categorie whit correct name
 	As a user
 	I need to be able to create a new categorie
 	Given i have categorie with name "grupo de teste" 
 	When i call categorie_save 
 	Then  i call categorie
 	And Then i should see that categorie name is "grupo de teste"
