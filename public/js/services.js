'use strict'

var itpServices = angular.module('itpServices', []);



itpServices.factory('Students', function($http, $q, $timeout, Upload){
  
    var Students ={};
    
    Students.students = [];
    Students.profilePic;
//   $http.get('/students').then(function(response) {
//             for(var i=0; i < response.data.length; i++)
//             {
//                 Students.students[i] = response.data[i];
//             }
//         }, function(error){
//             console.log(error, "cannot get data");
//     });   
    
    
    Students.getStudents = function(){
        
        var deferred = $q.defer();
        
        $http.get('/students').then(function(response) {
            
            for(var i=0; i < response.data.length; i++)
            {
                Students.students[i] = response.data[i];
                Students.students[i].bday = moment(Students.students[i].dob).format('MM-DD');
            }
            deferred.resolve(Students.students);
        }, function(error){
            deferred.reject(error);
        }); 
        
        return deferred.promise;
    };
    
    Students.savePicture = function(file){
        var deferred = $q.defer();
        Upload.upload({
            url: '/upload',
            data: {file: file}
        }).then(function (resp) {
           Students.profilePic= resp.data;
           deferred.resolve(Students.profilePic);
        }, function (error) {
            deferred.reject(error);
        }, function (evt) {
            var progressPercentage = parseInt(100.0 * evt.loaded / evt.total, 10);
            console.log('progress: ' + progressPercentage + '% ' + evt.config.data.file.name);
        });
        
        return deferred.promise;
    };
    
    Students.addStudent = function(data) {
        $http.post('/students', data).then(function(response) {
            Students.students.splice(response.data.position, 0, response.data);
            Students.students[response.data.position].bday = moment(response.data.dob).format("MM-DD");
        }, function(error){
            console.log(error, "cannot post data");
            if(data.pic){
                deletePicture(data.pic);
            }
            if(data.idform){
                deletePicture(data.idform);
            }
            
        });
    };

    Students.updateStudent = function(data, id, index) {
        //var deferred = $q.defer();
        $http.put('/students/' + id, data).then(function(response) {
            if(data.oldPic  && data.oldPic != data.pic){
                deletePicture(data.oldPic);
            }
            if(data.oldId  && data.oldId != data.idform){
                deletePicture(data.oldId);
            }
            Students.students.splice(index, 1, response.data[0]);
            Students.students[index].bday = moment(response.data[0].dob).format("MM-DD");
        }, function(error){
            console.log(error, "cannot get data");
            if(data.pic){
                deletePicture(data.pic);
            }
            if(data.idform){
                deletePicture(data.idform);
            }
        });
    };
    

    Students.deleteStudent = function(id, index) {
        return $http.delete('/students/' + id).then(function(response) {
            Students.students.splice(index, 1);
        }, function(error){
            console.log(error, "cannot delete data");
        });
    };
    
    
    var deletePicture = function(data){
        var picdata = {};
        picdata.pic = data;
        $http.post('/deletepic', picdata).then(function(response) {
                
            }, function(error){
                console.log(error, "cannot delete picture");
            });
    };

    return Students;
    
});

