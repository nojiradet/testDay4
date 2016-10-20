<h2 class="text-center text-success">กราฟ แยกประเภทคอมพิวเตอร์</h2>
<div class="col-md-8 col-md-offset-2">
<?php
use miloschuman\highcharts\Highcharts;
foreach ($data as $item) {
            $chart[]=['name' => $item['com_type_name'], 'data' => [intval($item['cdata'])]];
        }

echo Highcharts::widget([
 'options' => [
 'chart' => [
 'type' => 'column'
 ],
 'title' => ['text' => 'ทดสอบ'],
 'xAxis' => [
 'categories' => [ 'ทั้งหมด'],
 ],
 'yAxis' => [
 'title' => ['text' => 'ครั้ง']
 ],
 'series' =>$chart,
 ]
]);
?>
</div>
<div class="clearfix"></div>
<h2 class="text-center text-success">แยกประเภทคอมพิวเตอร์</h2>
<div class="col-md-8 col-md-offset-2">
<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr class="success">
            <th>ประเภทคอมพิวเตอร์</th>
            <th>จำนวน</th>
        </tr>
    </thead>
    <tbody>

<?php
foreach ($data as $key => $value) {

    echo '<tr>';
    echo '<td>'.$value['com_type_name'].'</td>';
    echo '<td>'.$value['cdata'].'</td>';
       echo '</tr>';
}
?>


    </tbody>
</table>
</div>