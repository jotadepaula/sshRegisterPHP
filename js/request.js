var form = angular.module('form',[]);

function formController($scope,$http){
    $scope.formData= {};
    $scope.processForm = function() {
        $http({
            method  : 'POST',
            url     : 'register.php',
            data    : $.param($scope.formData),
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        })
            .success(function(data) {
                console.log(data);
                if (!data.success) {

                    $scope.errorkeyPub = data.errors.keyPub;
                } else {
                    $scope.message = data.message;
                }
            });
    };
}