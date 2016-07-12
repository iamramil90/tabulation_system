


<!DOCTYPE html>
<html lang="en" class="uk-height-1-1">
<head>
    <meta charset="UTF-8">
    <title><?php echo "{$title} | Tabulation System" ?></title>

    <?php $this->load->view('admin/html/head'); ?>
</head>
<body class="uk-height-1-1">
    <div class="uk-container uk-width-1-3 uk-container-center uk-height-1-1 uk-vertical-align">
        <div class="uk-vertical-align-middle uk-width-1-1">
            <div class="uk-panel uk-width-1-1  uk-panel-box">
                <form action="<?php echo base_url('admin/auth/login'); ?>" method="post" class="uk-form uk-form-stacked">
                    <fieldset >
                        <legend><i class="uk-icon-lock"></i> Login to Admin Panel</legend>
                        <div class="uk-form-row uk-margin-top">
                            <label class="uk-form-label" for="">Username</label>
                            <input type="text" name="username" required class="uk-width-1-1" />
                        </div>
                        <div class="uk-form-row uk-form-password uk-width-1-1 uk-margin-top">
                            <label class="uk-form-label" for="">Password</label>
                            <input type="password" name="password" required class="uk-width-1-1" />

                        </div>
                        <div class="uk-form-row uk-margin-top">
                           <button class="uk-button uk-button-primary uk-float-left">Login</button>
                            <a href="#" class="uk-float-right uk-text-danger">Forgot your password?</a>
                        </div>
                        <div class="uk-form-row uk-margin-top uk-width-1-1">
                            <?php $this->load->view('admin/html/notice'); ?>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>