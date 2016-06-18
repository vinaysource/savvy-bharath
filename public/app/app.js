angular.module('myApp', [])

angular.module('myApp')
		.controller('mailingController', ['$scope','$http', function($scope, $http){
			console.log("injecting");
		$scope.sendMail = function(){
			var data = {
				"email_from": $scope.email_from,
				"name": $scope.name,
				"Phone": $scope.contactNumber,
				"DOB": $scope.dob,
				"job_role": $scope.job_role,
				"job_category":$scope.job_category,
				"industry": $scope.industry,
				"location": $scope.location
			};
			// console.log('Data: ', data);
			// $http({url:'/sendMail', method: 'POST' ,data: data}).success(function(data){
			// 	console.log(data);
			// 	alert("success");
			// })




			}
		}])