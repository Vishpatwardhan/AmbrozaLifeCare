 var app = angular.module('myApp', []);
	app.controller('regionCtrl', function($scope, $http) 
	{
    $http.get("distributors.php")
    .then(function (response) 
    {
	$scope.distributor=response.data;
	}, function(response) {
        //Second function handles error
        $scope.content = "Something went wrong";
    });
    });
