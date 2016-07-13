
<!-- This is the modal -->
<?php
    $entity_id = isset($entity_id) ? $entity_id : null;
    $participant_id = isset($participant_id) ? $participant_id : null;
    $first_name = isset($first_name) ? $first_name : null;
    $last_name = isset($last_name) ? $last_name : null;
    $height = isset($height) ? $height : null;
    $age = isset($age) ? $age : null;
    $about = isset($about) ? $about : null;
    $address = isset($address) ? $address : null;
    $status = isset($status) ? $status : null;
    $images = isset($images) ? $images : null;
?>
<div id="contestant" class="uk-modal modalSelector"  ng-controller="participantcontrollerform">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div>
            <form  action="<?php echo base_url('admin/participants/save')?>" class="uk-form uk-form-stacked"   method="post" enctype="multipart/form-data">
                <input type="hidden" id="entity_id" ng-model="entity_id" value="<?php echo $entity_id ?>" name="entity_id"/>
                <fieldset data-uk-margin>
                    <legend>Contestant Form</legend>

                    <!-- This is the tabbed navigation containing the toggling elements -->
                    <ul class="uk-tab" data-uk-tab="{connect:'#participants-tab'}">
                        <li class="uk-active"><a href="">Personal Information</a></li>
                        <li><a href="">Gallery</a></li>
                        <li><a href="">Others</a></li>
                    </ul>

                    <!-- This is the container of the content items -->
                    <ul id="participants-tab" class="uk-switcher uk-margin">
                        <li>  <!-- Personal information container -->
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-1-1 uk-margin-bottom">
                                    <label class="uk-form-label" for="">Participant's ID</label>
                                    <input type="text"  id="participant_id" value="<?php echo $participant_id ?>" name="participant_id" ng-model="participant_id" class="uk-width-1-1" required/>
                                </div>
                                <div class="uk-width-1-2">
                                    <label class="uk-form-label" for="">First Name</label>
                                    <input type="text" name="first_name" id="first_name" ng-model="first_name" class="uk-width-1-1" value="<?php echo $first_name  ?>"  required/>
                                </div>
                                <div class="uk-width-1-2">
                                    <label class="uk-form-label" for="">Last Name</label>
                                    <input type="text" value="<?php echo $last_name ?>" id="last_name" name="last_name" ng-model="last_name" class="uk-width-1-1" required/>
                                </div>
                                     <div class="uk-width-1-2 uk-margin-top ">
                                        <label class="uk-form-label" for="">Age</label>
                                            <input type="text" value="<?php echo $age ?>" id="age" name="age" ng-model="age" class="uk-width-1-1"  />
                                        </div>

                                    <div class="uk-width-1-2 uk-margin-top ">
                                         <label class="uk-form-label" for="">Height</label>
                                         <input type="text" value="<?php echo $height ?>" id="height" name="height" ng-model="height" class="uk-width-1-1"  />
                                     </div>
                                <div class="uk-width-1-1 uk-margin-top">
                                    <label class="uk-form-label" for="">Address</label>
                                    <textarea class="uk-width-1-1" id="address" ng-model="adress" name="address"><?php echo $address ?></textarea>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-1-1 uk-margin-top ">
                                    <label class="uk-form-label" for="">Image</label>
                                    <div class="uk-form-icon uk-width-1-1">
                                        <i class="uk-icon-image"></i>
                                       <input type="file" name="participant_image"/>
                                    </div>
                                </div>

                                <div class="uk-width-1-1 uk-margin-top">
                                    <ul class="uk-thumbnav uk-grid-width-1-3">
                                        <?php $thumbnail = array_filter(explode(",",$images)); ?>
                                        <?php if(count($thumbnail) > 0): ?>
                                            <?php foreach($thumbnail as $image) : ?>
                                               <li><img class="uk-thumbnail uk-thumbnail-small" src="<?php echo base_url($image) ?>" alt=""></li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                    </div>
                            </div>
                        </li>
                        <li>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label class="uk-form-label" for="">About</label>
                                <textarea rows="5" class="uk-width-1-1" id="about" ng-model="about" name="about"><?php echo $about ?></textarea>
                            </div>
                            <div class="uk-width-1-1 uk-margin-top">
                                <label class="uk-form-label" for="">Status</label>
                                <select name="status" class="uk-width-1-1">
                                    <option value="1" <?php if($status== 1){ echo "SELECTED";} ?>>Yes</option>
                                    <option value="0" <?php if($status == 0){ echo "SELECTED";} ?>>No</option>
                                </select>
                            </div>
                        </li>
                    </ul>

                </fieldset>
                <div class="uk-modal-footer">
                    <div class="uk-width-1-1">
                        <button class="uk-button">Submit</button>
                        <?php if($entity_id != ''): ?>
                            <a href="<?php echo base_url('/admin/participants/remove/'. $entity_id )?>"  no-click  class=" uk-text-danger uk-float-right">Delete</a>
                        <?php endif ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
