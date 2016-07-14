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
    });

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


    app.controller('participantcontrollerform',function($scope){
            $scope.addImage = function(){
                alert();
            }
    });
    app.controller('judgescontrollerform',function($scope){

    });
    app.controller('criteriacontrollerform',function($scope){

    });

    app.controller('modalController',function($scope){

        $scope.addImage = function(){
            alert();
        }
    });


    app.controller('participantcontrollergrid',function($scope,formservice){

        $scope.openModal = function(event){
            var info = $(event.target).attr("data-info");
            var url  = $(event.target).attr("data-ajax-url");
            formservice.ajaxModal(info,url);
        }

    });
    app.controller('criteriacontrollergrid',function($scope,formservice){
        $scope.openModal = function(event){
            var info = $(event.target).attr("data-info");
            var url  = $(event.target).attr("data-ajax-url");
            formservice.ajaxModal(info,url);
        }
    });
    
    app.controller('judgescontrollergrid',function($scope,formservice){
        $scope.openModal = function(event){
            var info = $(event.target).attr("data-info");
            var url  = $(event.target).attr("data-ajax-url");
            formservice.ajaxModal(info,url);
        }
    });

})(jQuery)

function addImage($this){

    var $participant_id = $($this).attr('data-participant-id');
    var $image_id = $($this).attr('data-image-id');
    
}

function setdefaultimage($this){

    var $participant_id = $($this).attr('data-participant-id');
    var $image_id = $($this).attr('data-image-id');
    var $url = $($this).attr('data-addimage-url');

    var jqXHR = $.get($url, { participant_id: $participant_id, image_id: $image_id } );
    jqXHR.done(function(data){
        $($this).closest('ul').find('span').css({"background":"#f7f7f7"});
        $($this).css({"background":"#82bb42"});
    });
}

function removeselectedimage($this){
    var $image_id = $($this).attr('data-image-id');
    var $url = $($this).attr('data-addimage-url');

    var jqXHR = $.get($url, {image_id: $image_id } );
    jqXHR.done(function(data){
        $($this).closest('li').hide();
    });
}