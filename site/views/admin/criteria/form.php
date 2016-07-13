
<!-- This is the modal -->
<?php
    $criteria_id = isset($criteria_id) ? $criteria_id : null;
    $title = isset($title) ? $title : null;
    $percentage = isset($percentage) ? $percentage : null;
    $description = isset($description) ? $description : null;
    $is_active = isset($is_active) ? $is_active : null;
?>
<div id="criteria" class="uk-modal modalSelector">
    <div class="uk-modal-dialog">

        <a class="uk-modal-close uk-close"></a>
        <div>
            <form action="<?php echo base_url('admin/criteria/save')?>" class="uk-form uk-form-stacked"   method="post">
                <input type="hidden" id="criteria_id" ng-model="criteria_id" value="<?php echo $criteria_id; ?>" name="criteria_id"/>
                <fieldset data-uk-margin>
                    <legend>Criteria Form</legend>
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <label class="uk-form-label" for="">Title*</label>
                            <input type="text" value="<?php echo $title; ?>" id="title" name="title" ng-model="title" class="uk-width-1-1" required/>
                        </div>
                        <div class="uk-width-1-1">
                            <label class="uk-form-label" for="">Weight/Points*</label>
                            <div class="uk-form-icon uk-width-1-1">
                                <i class="uk-icon-percent"></i>
                                <input type="text" name="percentage" id="percentage" ng-model="percentage" class="uk-width-1-1" value="<?php echo $percentage; ?>"  required/>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <label class="uk-form-label" for="">Description</label>
                        <textarea class="uk-width-1-1" id="description" ng-model="description" name="description"><?php echo $description; ?></textarea>
                        </div>
                        <div class="uk-width-1-1 uk-margin-top">
                            <label class="uk-form-label" for="">Is Active</label>
                        <select name="is_active">
                            <option value="1" <?php if($is_active == 1){ echo "SELECTED";} ?> >Yes</option>
                            <option value="0" <?php if($is_active == 0){ echo "SELECTED";} ?> >No</option>
                        </select>
                        </div>

                    </div>
                </fieldset>
                <div class="uk-modal-footer">
                    <div class="uk-width-1-1">
                        <button class="uk-button">Submit</button>
                        <?php if($criteria_id != ''): ?>
                            <a  href="<?php echo base_url('/admin/criteria/remove/'.$criteria_id) ?>" no-click ng-click="remove($event)" class=" uk-text-danger uk-float-right">Delete</a>
                        <?php endif ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>