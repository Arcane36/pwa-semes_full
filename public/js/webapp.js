(function() {

    'use strict';

    angular
        .module('website', ['ui.router', 'satellizer', 'threadService', 'threadCtrl', 'messageService', 'messageCtrl'])
        .config(function($stateProvider, $urlRouterProvider, $authProvider) {

            // Satellizer configuration that specifies which API
            // route the JWT should be retrieved from
            $authProvider.loginUrl = 'pwa-semes/public/api/authenticate';

            // Redirect to the auth state if any other states
            // are requested other than users
            // $urlRouterProvider.otherwise('/login');

            $stateProvider
                .state('login', {
                    url: '/login',
                    templateUrl: 'partials/login.html',
                    controller: 'authController as auth'
                })
                .state('users', {
                    url: '/users',
                    templateUrl: 'partials/users.html',
                    controller: 'userController as user'
                })
                .state('message', {
                    url: '/message/{id}',
                    templateUrl: 'partials/message.html'
                })
                .state('homepage', {
                    url: '/homepage',
                    templateUrl: 'partials/homepage.html'
                });
                // .state('index', {
                //     url: '',
                //     templateUrl: 'partials/homepage.html'
                // });
        });
})();