<h1>reportcomservice/index</h1>

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="success">
            <th>ยี่ห้อคอม</th>
            <th>ปัญหาคอมพิวเตอร์</th>
            <th>แก้ไข</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($data_show as $key => $value) {

    echo '<tr>';
    echo '<td>'.$value['brand'].'</td>';
    echo '<td>'.$value['problem'].'</td>';
    echo '<td>abc</td>';
    echo '</tr>';
}
?>


    </tbody>
</table>

