        <table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="success">
            <th>ลำดับ</th>
            <th>เลขครุภัณฑ์</th>
            <th>ยื่ห้อ</th>
            <th>วันที่รับ</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($comfind as $key => $value) {

    echo '<tr>';
    echo '<td>'.($key+1).'</td>';
    echo '<td>'.$value->asset_code.'</td>';
    echo '<td>'.$value->brand.'</td>';
    echo '<td>'.$value->accept_date.'</td>';
    echo '</tr>';
}
?>


    </tbody>
</table>
