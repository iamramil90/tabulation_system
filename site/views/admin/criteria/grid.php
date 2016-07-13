<div ng-controller="criteriacontrollergrid">
    <div class="uk-margin uk-clearfix">
        <button   ng-click="openModal($event)" data-ajax-url="<?php echo base_url('admin/criteria/loadform') ?>" class="uk-float-right uk-button uk-button-primary"><i class="uk-icon-plus"></i>  New Criteria</button>
    </div>

    <table class="uk-table uk-table-striped">
        <caption>View, Add, Edit and Delete record of criteria</caption>
        <thead>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Title</th>
            <th>Percentage</th>
            <th>Action</th>
        </tr>
        </thead>

        <?php if($criteria->num_rows() > 0): ?>
            <?php foreach($criteria->result_array()  as $item): ?>
                <?php
                $json_info = json_encode($item);
                ?>
                <tbody>
                <tr>
                    <td class=""><input  type="checkbox"></td>
                    <td><?php echo $item['criteria_id'] ?></td>
                    <td><?php echo $item['title'] ?></td>
                    <td><?php echo $item['percentage']?></td>
                    <td><button  ng-click="openModal($event)" data-ajax-url="<?php echo base_url('admin/criteria/loadform') ?>" data-id='<?php echo $item['criteria_id'] ?>' data-info='<?php echo $json_info ?>' class="uk-button uk-button-mini">View</button></td>
                </tr>
                </tbody>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
</div>



