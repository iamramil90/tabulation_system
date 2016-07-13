<div class="uk-panel uk-width-1-1" ng-controller="participantcontrollergrid">
    <div class="uk-margin uk-clearfix">
        <button  ng-click="openModal($event)" data-ajax-url="<?php echo base_url('admin/participants/loadform') ?>" class="uk-float-right uk-button uk-button-primary"><i class="uk-icon-plus"></i>  New Contestant</button>
    </div>

    <table class="uk-table uk-table-striped">
        <caption>View, Add, Edit and Delete record of contestant</caption>
        <thead>
        <tr>
            <th></th>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php if($participants->num_rows() > 0): ?>
            <?php foreach($participants->result_array()  as $item): ?>
                <?php
                $json_info = json_encode($item);
                ?>
                <tbody>
                    <tr>
                        <td class=""><input  type="checkbox"></td>
                        <td><?php echo $item['participant_id'] ?></td>
                        <td><?php echo $item['first_name'] . " " . $item['last_name'] ?></td>
                        <td><?php echo $item['age'] ?></td>
                        <td><?php echo status_text($item['status']) ?></td>
                        <td><button  ng-click="openModal($event)" data-ajax-url="<?php echo base_url('admin/participants/loadform') ?>" data-info='<?php echo $json_info ?>' class="uk-button uk-button-mini">View</button></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>
