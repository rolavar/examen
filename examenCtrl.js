angular.module('app.controllers',[])
	.controller('examenCtrl', function($scope, $http, Users) {
		var vm = this;
			
		vm.logear = function(){
			
			var url = "rest/login/"+vm.usuario+"/"+vm.password+"/";
			$http.get(url).success(function(data) {
			vm.prueba = data;
		  });
		}

		vm.testRest = function(){
			var json = { 'user': vm.usuario, 'password' : vm.password };
			Users.post({}, json, function(data){
				vm.prueba = data;	
			});
		}
		
		
	});