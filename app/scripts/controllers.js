angular.module("WebApp")

.controller('NavbarController', ['$scope', '$location', 'modals', function ($scope, $location) {
    $scope.goToHomeView = () => { $location.path('/') };
}])
.controller('HomeViewController', ['$scope' ,'$location', function ($scope) {
    
}])
.controller('LabViewController', ['$scope' ,'$location', function ($scope) {
    
}])
.controller('ConsultingViewController', ['$scope' ,'$location', function ($scope) {
    
}])
.controller('SepticViewController', ['$scope' ,'$location', function ($scope) {
    
}])
.controller('WasteWaterViewController', ['$scope' ,'$location', function ($scope) {
    
}])
.controller('FooterController', ['$scope', function ($scope) {
    
}]);