angular.module('messageService', [])

    .factory('Message', function($http) {

        return {
            // get all the comments
            get : function(id) {
                return $http.get('api/messages/' + id);
            },

            // save a comment (pass in comment data)
            save : function(messageData) {
                return $http({
                    method: 'POST',
                    url: '/pwa-semes/public/api/messages',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(messageData)
                });
            },

            // destroy a comment
            destroy : function(id) {
                return $http.delete('/pwa-semes/public/api/messages/' + id);
            }
        }

    });