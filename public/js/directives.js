'use strict'

var danceDirectives = angular.module('itpDirectives', []);


danceDirectives.directive('addmodal', function() {
   
   return {
       restrict: 'E',
       
       scope: {
           showmodal: '=',
       },
       
       replace: true, //replace with the template below
       
       transclude: true, //to insert answer from user to directive
       
       link: function(scope, element, attrs){
           
           angular.element(document.body).append(element);
           
           scope.style={};
           
         
            
            if(attrs.width){
              scope.style.width = attrs.width;
            }
            
            if(attrs.height)
            {
              scope.style.height = attrs.height;
            }
           
            
            
          scope.hideModal = function() {
              scope.showmodal = false;
          };

          
           
           
       },
       
       template: '<div class="ng-modal" ng-show="showmodal">\
                  <div class="ng-modal-overlay" ng-click="hideModal()"></div>\
                  <div class="ng-modal-dialog" ng-style="style">\
                    <div class="ng-modal-close" ng-click="hideModal()">X</div>\
                    <div class="ng-modal-dialog-content" ng-transclude></div>\
                  </div>\
                </div>'
   }; 
});


danceDirectives.directive('menumodal', function() {
   
  return {
       
      restrict: 'E',
       
      scope: {
          question: '='
      },
       
      replace: true, //replace with the template below
       
      transclude: true, //to insert answer from user to directive
       
      link: function(scope, element, attrs){
          
          angular.element(document.body).append(element);
          
          scope.style={};
          scope.darkstyle = {};
          
            var top = 0;
            var height = 0;
            
            if(attrs.width){
               scope.style.width = attrs.width;
            }
            if(attrs.height)
            {
               scope.style.height = attrs.height;
            }
          
         
          scope.hideQuestionModal = function() {
              scope.question = false;
          };
           
           
           scope.$watch('question', function(){
             
                if(scope.question == true)
                {
                     angular.element(document.body).append(element);

                     var e = scope.$root.e;
                     top =  e.pageY;
                    // left = e.pageX;
                     
                     var windowHeight = window.innerHeight + window.scrollY;
                    //  height = windowHeight;
                     
                     var body = document.body, html = document.documentElement;
                     height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
                     
                     if(window.scrollY > 1)
                     {
                       top = window.scrollY + (window.innerHeight/2);
                     }
                     else{
                       top = (window.innerHeight/2);
                     }
                     
                    $(window).resize(function(){
                        // var windowHeight = window.innerHeight + window.scrollY;
                        // height = windowHeight;
                         
                        // if(window.scrollY > 1)
                        // {
                        //   top = window.scrollY + (window.innerHeight/2);
                        // }
                    }); 
                     
                           
                }
            });
                
            scope.style= function(){
                return { 'top':top};
            };    
          
          scope.darkstyle= function(){
                return { 'height':height};
            }; 
      },
       
      template: '<div class="ng-modal" ng-show="question">\
                  <div class="ng-modal-overlay"  ng-style="darkstyle()" ng-click="hideQuestionModal()" ></div>\
                  <div class="ng-modal-dialog" ng-style="style()">\
                    <div class="ng-modal-close" ng-click="hideQuestionModal()">X</div>\
                    <div class="ng-modal-dialog-content" ng-transclude></div>\
                  </div>\
                </div>'
    
  }; 
});



    
    
danceDirectives.directive('continuemodal', function() {
   
  return {
       
      restrict: 'E',
       
      scope: {
          question: '='
      },
       
      replace: true, //replace with the template below
       
      transclude: true, //to insert answer from user to directive
       
      link: function(scope, element, attrs){
          
          scope.style={};
          var top=0;
          var left=0;
           
          scope.hideQuestionModal = function() {
              scope.question = false;
          };
           
           
            // scope.$watch('question', function(value){
                
            //   scope.isClickable = !value;
            //     if(value == false)
            //     {
            //       window.removeEventListener('click', eventfunction); 
            //     }
            //     if(value == true)
            //     {
            //         angular.element(document.body).append(element);
            //          var e = scope.$root.e;
            //          top = e.pageY;
            //          left =e.pageX;
                     
            //          var windowHeight = window.innerHeight + window.scrollY;
            //          if(top + 245 > windowHeight)
            //          {
            //              var diff = (top + 245) - windowHeight;
            //              top = top - diff;
            //          }
                     
            //          if(left + 220 > window.innerWidth)
            //          {
            //              var diff = (left + 220) - window.innerWidth;
            //              left = left - diff;
            //          }
                   
            //     }
            // });
            
            // element.bind('mouseenter', function(){
            //   scope.isActive = true;
            //   });
            
            //  element.bind('mouseleave', function(){
            //   scope.isActive = false;
            // });
            
            // element.bind('click', function(){
                
            //     if(scope.isActive == true){
            //         window.removeEventListener('click', eventfunction); 
            //     }
            // });
            
            // function eventfunction()
            // {
            //     if(scope.question == true)
            //     {
            //         scope.question = false;
            //         scope.$apply();
            //     }
            // }
                
            // window.addEventListener('click', function(){
            //     if(scope.isClickable == false)
            //     {
            //         window.addEventListener('click', eventfunction);
            //     }
                
            // });

            // scope.hfStyle = function(){
            //     //return {'font-weight':'bold', 'background-color':'rgba(' + Style.css.buttons_borderColor + ', 0.8)'};
            //     return {'font-weight':'bold', 'background-color':'rgba(0, 0, 0, 0.8)'};
            // };

            // scope.style= function(){
            //     return {'width':'180px', 'height':'230px', 'left':left, 'top':top};
            // };
                
                
            if(attrs.width){
              scope.style.width = attrs.width;
            }
            
            if(attrs.height)
            {
              scope.style.height = attrs.height;
            }
          
      },
       
      template: '<div class="ng-modal" ng-show="question">\
                  <div class="ng-modal-overlay" ng-click="hideQuestionModal()"></div>\
                  <div class="ng-modal-dialog" ng-style="style">\
                    <div class="ng-modal-close" ng-click="hideQuestionModal()">X</div>\
                    <div class="ng-modal-dialog-content" ng-transclude></div>\
                  </div>\
                </div>'
    
  }; 
});

danceDirectives.directive('phoneInput', function($filter, $browser) {
    return {
        require: 'ngModel',
        link: function($scope, $element, $attrs, ngModelCtrl) {
            var listener = function() {
                var value = $element.val().replace(/[^0-9]/g, '');
                $element.val($filter('tel')(value, false));
            };

            // This runs when we update the text field
            ngModelCtrl.$parsers.push(function(viewValue) {
                return viewValue.replace(/[^0-9]/g, '').slice(0,10);
            });

            // This runs when the model gets updated on the scope directly and keeps our view in sync
            ngModelCtrl.$render = function() {
                $element.val($filter('tel')(ngModelCtrl.$viewValue, false));
            };

            $element.bind('change', listener);
            $element.bind('keydown', function(event) {
                var key = event.keyCode;
                // If the keys include the CTRL, SHIFT, ALT, or META keys, or the arrow keys, do nothing.
                // This lets us support copy and paste too
                if (key == 91 || (15 < key && key < 19) || (37 <= key && key <= 40)){
                    return;
                }
                $browser.defer(listener); // Have to do this or changes don't get picked up properly
            });
            

            $element.bind('paste cut', function() {
                $browser.defer(listener);
            });
        }

    };
});