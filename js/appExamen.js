
var app = angular.module('app', ['app.controllers','ngRoute', 'ngResource']);

app.factory('Users', function($resource){
	
	return $resource("rest/login2/:id",{},{
		get:{
			method : "GET",
			isArray : false,
			headers: {"Content-type":"application/json; charset=UTF-8"}
		}
	});
	
});

	