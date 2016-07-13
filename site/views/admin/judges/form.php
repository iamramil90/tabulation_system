
<!-- This is the modal -->
<?php
    $judge_id = isset($judge_id) ? $judge_id : null;
    $first_name = isset($first_name) ? $first_name : null;
    $last_name = isset($last_name) ? $last_name : null;
    $username = isset($username) ? $username : null;
    $password = isset($password) ? $password : null;
    $is_active = isset($is_active) ? $is_active : null;
?>
<div id="contestant" class="uk-modal modalSelector" ng-controller="judgescontrollerform">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div>
            <form action="<?php echo base_url('admin/judges/save')?>" class="uk-form uk-form-stacked"   method="post">
                <input type="hidden" id="judge_id" ng-model="judge_id" value="<?php echo $judge_id ?>" name="judge_id"/>
                <fieldset data-uk-margin>
                    <legend>Contestant Form</legend>
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-1-2">
                            <label class="uk-form-label" for="">First Name*</label>
                            <input type="text" name="first_name" id="first_name" ng-model="first_name" class="uk-width-1-1" value="<?php echo $first_name  ?>"  required/>
                        </div>
                        <div class="uk-width-1-2">
                            <label class="uk-form-label" for="">Last Name*</label>
                            <input type="text" value="<?php echo $last_name ?>" id="last_name" name="last_name" ng-model="last_name" class="uk-width-1-1" required/>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top ">
                            <label class="uk-form-label" for="">Username*</label>
                            <div class="uk-form-icon uk-width-1-1">
                                <i class="uk-icon-user"></i>
                                <input type="text" value="<?php echo $username ?>" autocomplete="off" id="username" name="username" ng-model="username" class="uk-width-1-1"  required/>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <label class="uk-form-label" for="">Password*</label>
                            <div class="uk-form-icon uk-width-1-1 uk-form-password">
                                <i class="uk-icon-lock"></i>
                                <input type="password" value="<?php echo $this->encryption->decrypt($password); ?>" autocomplete="off" id="password" name="password" ng-model="password" class="uk-width-1-1"  required/>
                                <a href="" class="uk-form-password-toggle" data-uk-form-password>Show</a>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <label class="uk-form-label" for="">Is Active</label>
                        <select name="is_active">
                            <option value="1" <?php if($is_active== 1){ echo "SELECTED";} ?>>Yes</option>
                            <option value="0" <?php if($is_active == 0){ echo "SELECTED";} ?>>No</option>
                        </select>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <button class="uk-button">Submit</button>
                            <?php if($judge_id != ''): ?>
                                <a href="<?php echo base_url('/admin/judges/remove/'. $judge_id )?>"  no-click  class=" uk-text-danger uk-float-right">Delete</a>
                            <?php endif ?>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>