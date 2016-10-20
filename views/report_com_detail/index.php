<?php
$this->params['breadcrumbs'][] = ['label' => 'รายงาน Com Type', 'url' => ['/reportcomtype']];
?>
<h1>report-com-detail/index</h1>
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="success">
            <th>ลำดับ</th>
            <th>ชื่อ</th>
            <th>นามสกุล</th>
            <th>อีเมล์</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($data_show as $key => $value) {

    echo '<tr>';
    echo '<td>'.($key+1).'</td>';
    echo '<td>'.$value['brand'].'</td>';
    echo '<td>'.$value['asset_code'].'</td>';
    echo '<td>'.$value['cpu_type'].'</td>';
    echo '</tr>';
}
?>


    </tbody>
</table>