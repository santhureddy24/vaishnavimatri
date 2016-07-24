angular.module('matrimonialApp')
		.factory('dataService' , function($http){
			return {
				get : function(){
					return $http.get('data.json');
				}
			}
		});