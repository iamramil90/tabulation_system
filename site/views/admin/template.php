<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "{$title} | Tabulation System" ?></title>

    <?php $this->load->view('admin/html/head'); ?>
</head>
<body ng-app="tabsystem">
    <div class="uk-container uk-container-center">
       <?php $this->load->view('admin/html/topmenu'); ?>
    <div class="uk-width-1-1">
        <div class="uk-margin-top">
            <h2 class="uk-h2"><?php echo $content_title ?></h2>
        </div>
        <div class="uk-width-1-1">
            <?php $this->load->view('admin/html/notice'); ?>
        </div>
        <div class="uk-margin-top">
            <?php echo $content ?>
        </div>
    </div>
    </div>
    <?php echo $form_modal; ?>
</body>
</html>