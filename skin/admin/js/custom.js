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

    app.service('formservice',function(){

        var jsonValue = "";

        return{

           'setData': function(value){
               jsonValue = value;

           },

           'getData': function(){
               return jsonValue;
           }

        }
    });

    app.controller('participantcontrollergrid',function($scope,formservice){


        $scope.viewParticipant = function(event){

            var info =  JSON.parse($(event.target).attr("data-info"));


            //set data into formservice
            formservice.setData(info);

            $("#entity_id").val(info.entity_id);
            $("#first_name").val(info.first_name);
            $("#last_name").val(info.last_name);
            $("#address").val(info.address);
            $("#status").val(info.status);
            $("#birth_date").val(info.birth_date);
            $("#participant_id").val(info.participant_id);

            //open modal
            var modal = UIkit.modal(".modalSelector");
            modal.show();

            // log json data
            console.log(formservice.getData());

        };
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



})(jQuery)