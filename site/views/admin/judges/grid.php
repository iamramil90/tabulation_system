<div class="uk-panel uk-width-1-1" ng-controller="judgescontrollergrid">
    <div class="uk-margin uk-clearfix">
        <button  ng-click="openModal($event)" data-ajax-url="<?php echo base_url('admin/judges/loadform') ?>" class="uk-float-right uk-button uk-button-primary"><i class="uk-icon-plus"></i>  New Contestant</button>
    </div>

    <table class="uk-table uk-table-striped">
        <caption>View, Add, Edit and Delete record of Judges</caption>
        <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php if($judges->num_rows() > 0): ?>
            <?php foreach($judges->result_array()  as $item): ?>
                <?php
                $json_info = json_encode($item);
                ?>
                <tbody>
                    <tr>
                        <td class=""><input  type="checkbox"></td>
                        <td><?php echo $item['judge_id'] ?></td>
                        <td><?php echo $item['first_name'] . " " . $item['last_name'] ?></td>
                        <td><?php echo $item['username']?></td>
                        <td><?php echo status_text($item['is_active']) ?></td>
                        <td><button  ng-click="openModal($event)" data-ajax-url="<?php echo base_url('admin/judges/loadform') ?>" data-info='<?php echo $json_info ?>' class="uk-button uk-button-mini">View</button></td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>
