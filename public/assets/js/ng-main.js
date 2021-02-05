var app = angular.module('myApp', []);

app.controller('cardsListController', function($scope) {
    $scope.todos = [
    {body: 1,completed:true},
    {body: 2,completed:false}
    ];
});
// script.js
// create the module and name it scotchApp
// var scotchApp = angular.module('scotchApp', []);
// create the controller and inject Angular's $scope
app.controller('mainController', function($scope) {
    // create a message to display in our view
    $scope.message = 'Everyone come and see how good I look!';
});