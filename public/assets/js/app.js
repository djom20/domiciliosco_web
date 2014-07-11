var app = angular.module("app", []);

app.config(function($interpolateProvider) {
  $interpolateProvider.startSymbol('<%');
  $interpolateProvider.endSymbol('%>');
});
 
app.config(function($routeProvider){
    $routeProvider.when("/dashboard", 
    { 
        controller: "LoginController",
        templateUrl: ""
    }).otherwise({ reditrectTo : "/" });
})