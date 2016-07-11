<?php
    $session_success = $this->session->flashdata('success');
    $session_error = $this->session->flashdata('error');
    $session_warning = $this->session->flashdata('warning');

?>
<div class="uk-panel" >
    <?php if(isset($session_success)): ?>
        <div class="uk-alert uk-alert-success" data-uk-alert>
            <a href="" class="uk-alert-close uk-close"></a>
            <p> <i  class="uk-icon-check uk-margin-right"></i><?php echo $session_success ?></p>
        </div>
    <?php endif ?>

    <?php if(isset($session_error)): ?>
        <div class="uk-alert uk-alert-danger" data-uk-alert>
            <a href="" class="uk-alert-close uk-close"></a>
            <p><i  class="uk-icon-warning uk-margin-right"></i><?php echo $session_error ?></p>
        </div>
    <?php endif ?>

    <?php if(isset($session_warning)): ?>
        <div class="uk-alert uk-alert-warning" data-uk-alert>
            <a href="" class="uk-alert-close uk-close"></a>
            <p><i  class="uk-icon-warning uk-margin-right"></i><?php echo $session_warning ?></p>
        </div>
    <?php endif ?>
</div>