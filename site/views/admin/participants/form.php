
<!-- This is the modal -->
<?php $key =  $this->session->userdata('auth_key'); ?>
<div id="contestant" class="uk-modal modalSelector" ng-controller="participantcontrollerform">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div>
            <form action="<?php echo base_url('admin/participants/save')?>" class="uk-form uk-form-stacked"   method="post">
                <?php
                $id = isset($entity_id) ? $entity_id : '';
                ?>
                <input type="hidden" id="entity_id" ng-model="entity_id" value="<?php echo $id ?>" name="entity_id"/>
                <fieldset data-uk-margin>
                    <legend>Contestant Form</legend>
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <label class="uk-form-label" for="">Participant's ID</label>
                            <input type="text"  id="participant_id" value="<?php echo isset($participant_id) ? $participant_id : '' ?>" name="participant_id" ng-model="participant_id" class="uk-width-1-1" required/>
                        </div>
                        <div class="uk-width-1-2">
                            <label class="uk-form-label" for="">First Name</label>
                            <input type="text" name="first_name" id="first_name" ng-model="first_name" class="uk-width-1-1" value="<?php echo isset($first_name) ? $first_name : ''  ?>"  required/>
                        </div>
                        <div class="uk-width-1-2">
                            <label class="uk-form-label" for="">Last Name</label>
                            <input type="text" value="<?php echo isset($last_name)? $last_name : '' ?>" id="last_name" name="last_name" ng-model="last_name" class="uk-width-1-1" required/>
                        </div>

                        <div class="uk-width-1-1 uk-margin-top ">

                            <label class="uk-form-label" for="">Birth Date</label>
                            <div class="uk-form-icon uk-width-1-1">
                                <i class="uk-icon-calendar"></i>
                                <input type="text" data-uk-datepicker="{format:'YYYY/MM/DD'}" value="<?php echo isset($birth_date) ? $birth_date : '' ?>" id="birth_date" name="birth_date" ng-model="birth_date" class="uk-width-1-1"  required/>

                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <label class="uk-form-label" for="">Address</label>
                        <textarea class="uk-width-1-1" id="address" ng-model="adress" name="address"><?php echo isset($address) ? $address : '' ?></textarea>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <label class="uk-form-label" for="">Status</label>
                        <select name="status">
                            <?php
                            $st = isset($status) ? $status : '';
                            ?>
                            <option value="1" <?php if($st== 1){ echo "SELECTED";} ?>>Yes</option>
                            <option value="0" <?php if($st == 0){ echo "SELECTED";} ?>>No</option>
                        </select>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <button class="uk-button">Submit</button>
                            <a  href="<?php echo base_url('/admin/participants/remove/'. $id )?>" class=" uk-text-danger uk-float-right">Delete</a>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>