'use strict'


var itpApp = angular.module('itpApp', ['ui.router', 'ngRoute', 'itpControllers', 'itpServices', 'itpDirectives', 'ngFileUpload']);


itpApp.config(function($stateProvider, $routeProvider) {
  
  // $routeProvider
  //   .when('/', {
  //       templateUrl : '/html/StudentsListView.html'
  //   });
    
 
  var helloState = {
    name: 'hello',
    url: '/hello',
    template: '<h3>hello world!</h3>'
  }

  var aboutState = {
    name: 'about',
    url: '/about',
    template: '<h3>Its the UI-Router hello world app!</h3>'
  }
  
  var studentState = {
    name: 'student',
    url:'/student',
    templateUrl: '/html/StudentsListView.html'
  }

  $stateProvider.state(helloState);
  $stateProvider.state(aboutState);
  $stateProvider.state(studentState);
  
  
});


itpApp.filter('tel', function () {
    return function (tel) {

        if (!tel) { return ''; }

        var value = tel.toString().trim().replace(/^\+/, '');

        if (value.match(/[^0-9]/)) {
            return tel;
        }

        var country, city, number;

        switch (value.length) {
            case 1:
            case 2:
            case 3:
                city = value;
                break;

            default:
                city = value.slice(0, 3);
                number = value.slice(3);
        }

        if(number){
            if(number.length>3){
                number = number.slice(0, 3) + '-' + number.slice(3,7);
            }
            else{
                number = number;
            }

            return ("(" + city + ") " + number).trim();
        }
        else{
            return "(" + city;
        }

    };
});