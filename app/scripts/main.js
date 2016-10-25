var app = angular.module('WebApp', ['ngRoute','ngResource']);

app.config (['$routeProvider', function ($routeProvider) {
    $routeProvider
    .when('/', {
        templateUrl: 'snippets/views/home.html',
        controller: 'HomeViewController'
    })
    .when('/consulting', {
        templateUrl: 'snippets/views/lab.html',
        controller: 'LabViewController'
    })
    .when('/lab', {
        templateUrl: 'snippets/views/consulting.html',
        controller: 'ConsultingViewController'
    })
    .when('/septic', {
        templateUrl: 'snippets/views/septic.html',
        controller: 'SepticViewController'
    })
    .when('/waste-water', {
        templateUrl: 'snippets/views/waste-water.html',
        controller: 'WasteWaterViewController'
    })
    .otherwise ({
        redirectTo: '/'
    })
}]);