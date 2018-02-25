'use strict'

var itpControllers = angular.module('itpControllers', []);



itpControllers.controller('adminCtrl', function($scope){
    var self = this;
    
    self.template ="/html/StudentsListView.html";
});



itpControllers.controller('addStudentCtrl', function($scope, $rootScope, $q, Students, Upload){
    
    var self = this;
    //var response;
  
    self.addMenu = false;
    //$scope.data = { errors: { } };
    self.profilePic;
    
    self.toggleAddMenu = function(event){
        $rootScope.e = event;
    
        self.firstname = "";
        self.lastname = "";
        self.email = "";
        self.dob = new Date(moment().format("MM-DD-YYYY"));
        self.phone = "";
        self.parents = "";
        self.pic = "";
        self.idform = "";
        
        self.addMenu = !self.addMenu;
    };
    
    
    self.add = function(firstname, lastname, email, dob, phone, parents, pic, idform){
        
        var data = {};
       
        data.firstname= firstname;
        data.lastname = lastname;
        data.email = email;
        data.dob = dob;
        data.phone = phone;
        data.parents = parents;
        
        self.pic = pic;
        self.idform = idform;
        
        if (self.pic) {
            Students.savePicture(pic).then(function(response){
                data.pic= response;
                if(self.idform){
                    Students.savePicture(self.idform).then(function(response){
                        data.idform = response;
                        Students.addStudent(data);
                    }).catch(function(response){
                        
                    }); 
                }else{
                    data.idform = idform;
                    Students.addStudent(data);
                }
            }).catch(function(response){
        
            });
        }else
        {
            data.pic = pic;
            if(self.idform){
                Students.savePicture(self.idform).then(function(response){
                    data.idform = response;
                    Students.addStudent(data);
                }).catch(function(response){
                    
                }); 
            }else{
                data.idform = idform;
                Students.addStudent(data);
            } 
        }
 
        self.addMenu = false;
    };
    

    self.cancelAdd = function(){
        self.addMenu = false;
        self.firstname = "";
        self.lastname = "";
        self.email = "";
        self.dob = "";
        self.phone = "";
        self.parents = "";
        self.pic = "";
        self.idform = ""; 
        
    };
    
});



itpControllers.controller("studentCtrl", function($scope, $rootScope, Students, $filter, $timeout){
    
    var theStudents = this;
    theStudents.students=[];
    theStudents.today = moment().format("MM-DD");
    theStudents.upcomingBdays = moment().add(3, 'months').date(0).format("MM-DD");
    
    theStudents.todayBday = function (item) { 
        return item.bday === theStudents.today; 
    };
    theStudents.upComingBday = function (item) { 
        return (item.bday <= theStudents.upcomingBdays) && (item.bday > theStudents.today); 
    };
    
    Students.getStudents().then(function(data){
        theStudents.students = data;
    })
    .catch(function(response){
        console.log(response.status);
    });
    
   
    // $timeout( function(){
    //         $scope.students = Students.students;
    //     }, 500 );
 
});

itpControllers.controller("studentMenuCtrl", function($scope, $rootScope, $http, $timeout, Students){
    
 
    var self=this;
    self.showVerifyDeletion = false;
    self.showStudentMenu = false;
    self.editStudent = false;
  
    self.toggleMenu = function(event){
        $rootScope.e = event;
        self.showStudentMenu = !self.showStudentMenu;
    };
    
    self.edit = function(event){
        self.showStudentMenu = false;
        $rootScope.e = event;

        self.firstnameUpdate= $scope.student.firstname;
        self.lastnameUpdate = $scope.student.lastname;
        self.emailUpdate = $scope.student.email;
        self.dobUpdate = new Date(moment($scope.student.dob).format('MM-DD-YYYY'));
        self.phoneUpdate = $scope.student.phone;
        self.parentsUpdate = $scope.student.parents;
        self.currentPic = $scope.student.pic;
        self.picUpdate = "";
        self.idformUpdate = "";
        self.currentId = $scope.student.idform;
        
        self.editStudent = !self.editStudent;
    };
    
    self.update = function(id, firstname, lastname, email, dob, phone, parents, pic, idform, index) {
        var data={};
        
        data.id = id;
        data.firstname= firstname;
        data.lastname = lastname;
        data.email = email;
        data.dob = dob;
        data.phone = phone;
        data.parents = parents;
        data.idform = idform;
        data.oldPic = self.currentPic;
        data.oldId = self.currentId;
        $scope.image = pic;
        $scope.theid = idform;

        if ($scope.image) {
            Students.savePicture(pic).then(function(response){
                data.pic= response;
                if($scope.theid){
                    Students.savePicture(idform).then(function(response){
                        data.idform = response;
                        Students.updateStudent(data, id, index);
                    }).catch(function(response){
                        
                    }); 
                }else{
                    data.idform = data.oldId;
                    Students.updateStudent(data, id, index);
                }
            }).catch(function(response){
        
            });
        }else
        {
            data.pic = data.oldPic;
            if($scope.theid){
                Students.savePicture(idform).then(function(response){
                    data.idform = response;
                    Students.updateStudent(data, id, index);
                }).catch(function(response){
                    
                }); 
            }else{
                data.idform = data.oldId;
                Students.updateStudent(data, id, index);
            } 
        }
        
        // self.firstnameUpdate= $scope.student.firstname;
        // self.lastnameUpdate = $scope.student.lastname;
        // self.emailUpdate = $scope.student.email;
        // self.dobUpdate = new Date(moment($scope.student.dob).format('MM-DD-YYYY'));
        // self.phoneUpdate = $scope.student.phone;
        // self.parentsUpdate = $scope.student.parents;
        // self.picUpdate = $scope.student.pic;
        // self.idformUpdate = $scope.student.idform;
        
        self.editStudent = false;
        

    };
    
    
    self.cancelUpdate = function() {
        self.showStudentMenu = false;
        self.editStudent = false;

        self.firstnameUpdate= $scope.student.firstname;
        self.lastnameUpdate = $scope.student.lastname;
        self.emailUpdate = $scope.student.email;
        self.dobUpdate = new Date(moment($scope.student.dob).format('MM-DD-YYYY'));
        self.phoneUpdate = $scope.student.phone;
        self.parentsUpdate = $scope.student.parents;
        self.picUpdate = $scope.student.pic;
        self.idformUpdate = $scope.student.idform;
    };   
        
    self.delete = function(event){
            self.showStudentMenu= false;
            self.verifyDeletion = true;
            $rootScope.e = event;
    };
        
    self.yesDelete = function(id, index){
        self.verifyDeletion = false;
        Students.deleteStudent(id, index);
    };
    
    self.noDelete = function(){
        self.verifyDeletion= false;
    };
   
});