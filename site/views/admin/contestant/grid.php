<div class="uk-margin uk-clearfix">
    <button  data-uk-modal="{target:'#contestant'}" class="uk-float-right uk-button uk-button-primary"><i class="uk-icon-plus"></i>  New Contestant</button>
</div>

<table class="uk-table uk-table-striped" ng-controller="participantcontrollergrid">
    <caption>View, Add, Edit and Delete record of contestant</caption>
    <thead>
    <tr>
        <th></th>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
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
                    <td><?php echo get_age($item['birth_date'])?></td>
                    <td><button  ng-click="viewParticipant($event)" data-info='<?php echo $json_info ?>' class="uk-button uk-button-mini">View</button></td>
                </tr>
            </tbody>
        <?php endforeach; ?>
    <?php endif; ?>

   
</table>


