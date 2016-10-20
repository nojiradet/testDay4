<?php 
use yii\helpers\Html;
?>
<h1>report-com-type/index</h1>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="success">
            <th>com_type_id</th>
            <th>com_type_name</th>
            <th>แก้ไข</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($data_show as $key => $value) {

    echo '<tr>';
    echo '<td>'.$value['com_type_id'].'</td>';
    echo '<td>'.$value['com_type_name'].'</td>';
    echo '<td>'.Html::a('<span class="glyphicon glyphicon-eye-open"></span>',['/report_com_detail','id'=>$value['com_type_id']]).' | '.Html::a('<span class="glyphicon glyphicon-trash"></span>',['reportcomdetail']).'</td>';
    echo '</tr>';
}
?>


    </tbody>
</table>