<!-- <div id="content" class="p-4 p-md-5 pt-5"> -->
<div class="card mb-4">
    	<div class="card-header"><i class="fa fa-table mr-1"></i>ตารางแสดงการส่งมอบ</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="Protable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
            					<th>#</th>
           						<th>ผู้จำหน่าย</th>
                                <th>สินค้า</th>
                                <th>จำนวนที่ซื้อ</th>
                                <th>ราคารวม</th>
                                <th>วันเดือนปี ที่ซื้อ</th>
          					</tr>
                		</thead>
                	<tbody>
						<?php while($row = mysqli_fetch_array($querytotal,MYSQLI_ASSOC)) { ?>
        			<tr>
            			<td><?php echo $result['B_id'];?></td>
            			<td><?php echo $result['M_Fname']." ".$result["M_Lname"]; ?></td>
                        <td><?php echo $result['P_name']; ?></td>
                        <td><?php echo $result['B_Amount']; ?></td>
                        <td><?php echo $result['B_Total']; ?></td>
                        <td><?php echo $result['B_Date']; ?></td>
					</tr>
	<?php } ?>
			</tbody>
			</table>
			</div>
		</div>
		</div>
	<!--End  Modal -->