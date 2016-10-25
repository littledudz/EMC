var app = angular.module('WebApp', ['ngRoute','ngResource']);

app.config (['$routeProvider', function ($routeProvider) {
    $routeProvider
    .when('/', {
        templateUrl: 'snippets/views/home.html',
        controller: 'HomeViewController'
    })
    .when('/', {
        templateUrl: 'snippets/views/lab.html',
        controller: 'LabViewController'
    })
    .when('/', {
        templateUrl: 'snippets/views/consulting.html',
        controller: 'ConsultingViewController'
    })
    .when('/', {
        templateUrl: 'snippets/views/septic.html',
        controller: 'SepticViewController'
    })
    .when('/', {
        templateUrl: 'snippets/views/waste-water.html',
        controller: 'WasteWaterViewController'
    })
    .otherwise ({
        redirectTo: '/'
    })
}]);