/**
 * Created by ramil on 7/9/16.
 */


(function ($) {

    var app = angular.module('tabsystem',[]);

    app.directive('noClick', function() {
        return function(scope, element, attrs) {
            $(element).click(function(event) {
                event.preventDefault();
            });
        }
    })

    app.service('formservice',function($http){

        var jsonValue = "";

        return{

           'setData': function(value){
               jsonValue = value;

           },

           'getData': function(){
               return jsonValue;
           },

            'ajaxModal':function(info = null,currentUrl){
                $http({
                    method:'POST',
                    url:currentUrl,
                    data:{info},
                    cache:false,
                }).then(function successCallback(response) {

                    $('#modal-container').html(response.data);
                    var modal = UIkit.modal(".modalSelector");
                    modal.show();

                }, function errorCallback(response) {
                    console.log('error');
                });
            }
        }
    });

    app.controller('participantcontrollergrid',function($scope,formservice){

        $scope.openModal = function(event){
            var info = $(event.target).attr("data-info");
            var url  = $(event.target).attr("data-ajax-url");
            formservice.ajaxModal(info,url);
        }

    });

    app.controller('participantcontrollerform',function($scope,formservice){

        $scope.remove = function(event){

            var $this = this;

            var href = $(event.target).attr('href');
            var participant_id = formservice.getData().entity_id;
            var url = href + '?entity_id=' + participant_id;

            window.location = url;
        }
    });

    app.controller('criteriacontrollergrid',function($scope,formservice){

        $scope.openModal = function(event){
            var info = $(event.target).attr("data-info");
            var url  = $(event.target).attr("data-ajax-url");
            formservice.ajaxModal(info,url);
        }
    });

})(jQuery)