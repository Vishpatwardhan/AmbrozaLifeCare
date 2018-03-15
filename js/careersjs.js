 var app = angular.module('myCar', []);
	app.controller('careerCtrl', function($scope, $http) 
	{
    $http.get("careers.php")
    .then(function (response) 
    {
		 debugger;
	$scope.opening=response.data;
	 debugger;
	}, function(response) {
        //Second function handles error
        $scope.content = "Something went wrong";
    });
    });
