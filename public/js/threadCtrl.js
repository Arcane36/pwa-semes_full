angular.module('threadCtrl', []).controller('threadController', function($scope, $http, $state, Thread) {
    // object to hold all the data for the new comment form
    $scope.threadData = {};

    var id_user = JSON.parse(localStorage.getItem('user'));

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==================================================
    Thread.get().then(successCallback);
    function successCallback(data) {
        $scope.threads = data.data;
    }

    // function to handle submitting the form
    // SAVE A COMMENT =====================================================
    $scope.submitThread = function() {

        if (id_user == null) {
            $state.go('login');
        } else {
            // save the comment. pass in comment data from the form
            // use the function we created in our service
            Thread.save($scope.threadData).then(successCallback2, errorCallback);
        }

        function successCallback2(getData) {
            $scope.threads = getData.data;
            Thread.get().then(successCallback);
        }

        function errorCallback(data) {
            console.log(data);
        }

    };

    // function to handle deleting a comment
    // DELETE A COMMENT ====================================================
    $scope.deleteThread = function(id) {

        if (id_user == null) {
            $state.go('login');
        } else {
            // use the function we created in our service
            Thread.destroy(id).then(successCallbackDestroy);
        }
        
        function successCallbackDestroy(data){
            Thread.get().then(successCallback);
        }
    };

});