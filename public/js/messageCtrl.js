angular.module('messageCtrl', []).controller('messageController', function($scope, $http, Message, $stateParams, $state) {
    // object to hold all the data for the new comment form
    $scope.messageData = {};

    //get user id from localstorage and thread id from URI

    if (localStorage.getItem("satellizer_token") != null) {
        var token_id = localStorage.getItem('satellizer_token');
        var decoded_id = jwt_decode(token_id);
        var id_user = decoded_id;
    } else {
        var id_user = JSON.parse(localStorage.getItem('user'));
    }

    //get id from route
    var id = $stateParams.id;
    $scope.messageData.id_thread = id;

    // get all the comments first and bind it to the $scope.comments object
    // use the function we created in our service
    // GET ALL COMMENTS ==================================================
    Message.get(id).then(successCallback);
    function successCallback(data) {
        $scope.messages = data.data;
    }

    // function to handle submitting the form
    // SAVE A COMMENT =====================================================
    $scope.submitMessage = function() {
        // save the comment. pass in comment data from the form
        // use the function we created in our service

        if (id_user == null) {
            $state.go('login');
        } else {
            $scope.messageData.id_user = id_user['sub']
            Message.save($scope.messageData).then(successCallback2, errorCallback);
        }
        
        function successCallback2(getData) {
            $scope.messages = getData.data;
            Message.get(id).then(successCallback);
        }

        function errorCallback(data) {
            console.log(data);
        }

    };

    // function to handle deleting a comment
    // DELETE A COMMENT ====================================================
    $scope.deleteMessage = function(id, id_thread) {

        if (id_user == null) {
            $state.go('login');
        } else {
            // use the function we created in our service
            Message.destroy(id).then(successCallbackDestroy);
        }

        function successCallbackDestroy(data){
            Message.get(id_thread).then(successCallback);
        }
    };

});