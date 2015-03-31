/*****
 * @author Jeffry Angtoni
 * @date 03-31-2015
 * @purpose Backend script for angularjs
 *****/
var app = angular.module('instapp',['ngAnimate']);
app.controller('instactrl',function($scope){
   //Initialize Progress Bar to 0%
   $scope.progress = 0;
   
   //Initialize page show/hide variable
   // page1 default is 1 because it's the first page to show
   $scope.page1 = 1;
   $scope.page2 = $scope.page3 = $scope.page4 = 0;
   
   //Control Ptogress
   $scope.controlProgress = function(obj){
       console.log(obj);
       if(obj.length == 0){
           $scope.progress = ($scope.progress > 0) ? ($scope.progress - 20) : $scope.progress;
       }
   }
});