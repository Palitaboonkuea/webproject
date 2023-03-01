<?php include 'connect.php'?>
<?php include 'header.php'?>
<?php
//query
$query=mysqli_query($conn,"SELECT COUNT(รหัสสินค้า) FROM `product`");
	$row = mysqli_fetch_row($query);

	$rows = $row[0];

	$page_rows = 10;  

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) {
		$pagenum = 1;
	}
	else if ($pagenum > $last) {
		$pagenum = $last;
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;

	$nquery=mysqli_query($conn,"SELECT * from product $limit");

	$paginationCtrls = '';

	if($last != 1){

	if ($pagenum > 1) {
$previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';

		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
			}
	}
}

	$paginationCtrls .= ''.$pagenum.' &nbsp; ';

	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}

if ($pagenum != $last) {
$next = $pagenum + 1;
$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">Next</a> ';
}

?>
<!DOCTYPE html>
<html>k
	<head>
        <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script> scr="bootstrap/js/bootstrap.bundle.min.js"</script> 
	</head>
	<style>
	*
	{
    margin: 0px;
    padding: 0px;
	justify-content: center;
	}

	body
	{
    	background-color: pink;
	}
	.info
	{
		color:black;
	}

	</style>
	<body>
		<div" rel="nofollow">
			<div style="height: 20px;"></div>
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-6">
					<h4 class="alert alert-danger h3 center" role="alert">สินค้า</h4>
					<table width="80%" class="table table-striped table-bordered table-hover">
						
						<thead>
							<tr class="info">
							<th>รหัสสินค้า</th>
							<th>ชื่อสินค้า</th>
							<th>ราคา</th>
							<th>รายละเอียดสินค้า</th>
							</tr>
						</thead>
					
						<tbody>
							<?php
								while($crow = mysqli_fetch_array($nquery)){
							?>
							<tr>
								<td><?php echo $crow['รหัสสินค้า']; ?></td>
								<td><?php echo $crow['ชื่อสินค้า']; ?></td>
								<td><?php echo $crow['ราคาสินค้า']; ?></td>
								<td><?php echo $crow['รายละเอียดสินค้า']; ?></td>
							</tr>
							<?php
									}
							?>
						</tbody>
					</table>
					<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	</body>
</html>
