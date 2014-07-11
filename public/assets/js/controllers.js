//solicitamos los datos de la ruta getData para obtener todos los posts
//de la bd en formato json
app.controller("loginController", function($scope,$http){
	$scope.toLogin = function(){
	    $http.get('http://domiciliosco.info/admin/public/session/create').success(function(data) {
	        if(data.posts) $location.url("/dashboard");
	        else alert('error');
	    });
	}
})