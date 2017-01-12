(function() {

    'use strict';

    angular
        .module('website')
        .controller('userController', UserController);

    function UserController($http, $auth, $rootScope) {

        var vm = this;

        vm.users;
        vm.error;

        vm.getUsers = function() {
            // This request will hit the index method in the AuthenticateController
            // on the Laravel side and will return the list of users
            $http.get('api/authenticate').then(successCallback, errorCallback);
            function successCallback(users) {
                vm.users = users.data;
            }
            function errorCallback(error){
                vm.error = error;
            }
        }



    }

})();