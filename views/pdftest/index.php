<h1>ปัญหาคอมพิวเตอร์</h1>

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="success">
            <th>เลขครุภัณฑ์</th>
            <th>ยี่ห้อคอม</th>
            <th>ปัญหาคอมพิวเตอร์</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($data_show as $key => $value) {

    echo '<tr>';
    echo '<td>'.$value['asset_code'].'</td>';
    echo '<td>'.$value['brand'].'</td>';
    echo '<td>'.$value['problem'].'</td>';
    echo '</tr>';
}
?>


    </tbody>
</table>
