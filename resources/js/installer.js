/*****
 * @author Jeffry Angtoni
 * @date 03-31-2015
 * @purpose Backend script for angularjs
 *****/
var app = angular.module('instapp',[]);
app.controller('instactrl',function($scope){
    //Initialize Progress Bar to 0%
    $scope.progress = 0;
    
    // page1 default is 1 because it's the first page to show
    $scope.page1 = 1;
    $scope.page2 = $scope.page3 = $scope.page4 = 0;
});
