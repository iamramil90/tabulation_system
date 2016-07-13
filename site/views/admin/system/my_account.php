<div class="uk-container">

    <form class="uk-form uk-form-stacked" method="post" action="<?php echo base_url('admin/system/save_account')?>">

        <fieldset data-uk-margin class="uk-width-1-1">
            <legend>Adminstrator</legend>

            <div class="uk-form-row">
                <label class="uk-form-label " for=""> Name</label>
                <input type="text" name="first_name">
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="">Last Name</label>
                <input type="text" name="last_name">
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="">Username*</label>
                <input type="text" name="username" required>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="">Password*</label>
                <input type="password" name="password" required>
            </div>
            <div class="uk-form-row">
               <button class="uk-button uk-button-primary">Submit</button>
            </div>
        </fieldset>

    </form>
</div>