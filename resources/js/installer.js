/*****
 * @author Jeffry Angtoni
 * @date 03-31-2015
 * @purpose Backend script for angularjs
 *****/
var app = angular.module('instapp',[]);
app.controller('instactrl',function($scope){
    // page1 default is 1 because it's the first page to show
    $scope.page3 = 1;
    $scope.page2 = $scope.page1 = $scope.page4 = 0;
});
