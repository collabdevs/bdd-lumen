<!doctype html>
<html ng-app="openApp">
  <head>

  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  <script type="text/javascript">
  	
  	var myApp = angular.module('openApp',[]);

	myApp.controller('AppController', ['$scope', function($scope) {
	  $scope.yourName = 'vem do angular';
	}]);


  </script>
  <title><?php echo $app_name; ?></title>
  </head>
  <body ng-controller="AppController">
    <div>
      <label>Name:</label>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <hr>
      <h1>Bem vindo {{yourName}}!</h1>
    </div>
  </body>
</html>


