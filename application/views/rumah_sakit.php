<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title> Dashboard </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php include('assets/css/footer.css')?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type="text/css">
			body {
				color: #566787;
				background: #f5f5f5;
				font-family: 'Varela Round', sans-serif;
				font-size: 13px;
			}
			.table-wrapper {
				background: #fff;
				padding: 20px 25px;
				margin: 30px 0;
				border-radius: 3px;
				box-shadow: 0 1px 1px rgba(0,0,0,.05);
			}
			.position{
					margin-left:16px;
					margin-right:54%;
			}
			#sticky-footer {
				flex-shrink: none;
				position: fixed;
				left: 0;
				right: 0;
				bottom: 0;
			}
			.table-title {        
				padding-bottom: 15px;
				background: #435d7d;
				color: #fff;
				padding: 16px 30px;
				margin: -20px -25px 10px;
				border-radius: 3px 3px 0 0;
			}
			.table-title h2 {
				margin: 5px 0 0;
				font-size: 24px;
			}
			.table-title .btn-group {
				float: right;
			}
			.table-title .btn {
				color: #fff;
				float: right;
				font-size: 13px;
				border: none;
				min-width: 50px;
				border-radius: 2px;
				border: none;
				outline: none !important;
				margin-left: 10px;
			}
			.table-title .btn i {
				float: left;
				font-size: 21px;
				margin-right: 5px;
			}
			.table-title .btn span {
				float: left;
				margin-top: 2px;
			}
			table.table tr th, table.table tr td {
				border-color: #e9e9e9;
				padding: 12px 15px;
				vertical-align: middle;
			}
			table.table tr th:first-child {
				width: 60px;
			}
			table.table tr th:last-child {
				width: 100px;
			}
			table.table-striped tbody tr:nth-of-type(odd) {
				background-color: #fcfcfc;
			}
			table.table-striped.table-hover tbody tr:hover {
				background: #f5f5f5;
			}
			table.table th i {
				font-size: 13px;
				margin: 0 5px;
				cursor: pointer;
			}	
			table.table td:last-child i {
				opacity: 0.9;
				font-size: 22px;
				margin: 0 5px;
			}
			table.table td a {
				font-weight: bold;
				color: #566787;
				display: inline-block;
				text-decoration: none;
				outline: none !important;
			}
			table.table td a:hover {
				color: #2196F3;
			}
			table.table td a.edit {
				color: #FFC107;
			}
			table.table td a.delete {
				color: #F44336;
			}
			table.table td i {
				font-size: 19px;
			}
			table.table .avatar {
				border-radius: 50%;
				vertical-align: middle;
				margin-right: 10px;
			}
			.pagination {
				float: right;
				margin: 0 0 5px;
			}
			.pagination li a {
				border: none;
				font-size: 13px;
				min-width: 30px;
				min-height: 30px;
				color: #999;
				margin: 0 2px;
				line-height: 30px;
				border-radius: 2px !important;
				text-align: center;
				padding: 0 6px;
			}
			.pagination li a:hover {
				color: #666;
			}	
			.pagination li.active a, .pagination li.active a.page-link {
				background: #03A9F4;
			}
			.pagination li.active a:hover {        
				background: #0397d6;
			}
			.pagination li.disabled i {
				color: #ccc;
			}
			.pagination li i {
				font-size: 16px;
				padding-top: 6px
			}
			.hint-text {
				float: left;
				margin-top: 10px;
				font-size: 13px;
			}    
			/* Custom checkbox */
			.custom-checkbox {
				position: relative;
			}
			.custom-checkbox input[type="checkbox"] {    
				opacity: 0;
				position: absolute;
				margin: 5px 0 0 3px;
				z-index: 9;
			}
			.custom-checkbox label:before{
				width: 18px;
				height: 18px;
			}
			.custom-checkbox label:before {
				content: '';
				margin-right: 10px;
				display: inline-block;
				vertical-align: text-top;
				background: white;
				border: 1px solid #bbb;
				border-radius: 2px;
				box-sizing: border-box;
				z-index: 2;
			}
			.custom-checkbox input[type="checkbox"]:checked + label:after {
				content: '';
				position: absolute;
				left: 6px;
				top: 3px;
				width: 6px;
				height: 11px;
				border: solid #000;
				border-width: 0 3px 3px 0;
				transform: inherit;
				z-index: 3;
				transform: rotateZ(45deg);
			}
			.custom-checkbox input[type="checkbox"]:checked + label:before {
				border-color: #03A9F4;
				background: #03A9F4;
			}
			.custom-checkbox input[type="checkbox"]:checked + label:after {
				border-color: #fff;
			}
			.custom-checkbox input[type="checkbox"]:disabled + label:before {
				color: #b8b8b8;
				cursor: auto;
				box-shadow: none;
				background: #ddd;
			}
			/* Modal styles */
			.modal .modal-dialog {
				max-width: 400px;
			}
			.modal .modal-header, .modal .modal-body, .modal .modal-footer {
				padding: 20px 30px;
			}
			.modal .modal-content {
				border-radius: 3px;
			}
			.modal .modal-footer {
				background: #ecf0f1;
				border-radius: 0 0 3px 3px;
			}
			.modal .modal-title {
				display: inline-block;
			}
			.modal .form-control {
				border-radius: 2px;
				box-shadow: none;
				border-color: #dddddd;
			}
			.modal textarea.form-control {
				resize: vertical;
			}
			.modal .btn {
				border-radius: 2px;
				min-width: 100px;
			}	
			.modal form label {
				font-weight: normal;
			}
			img{
				max-width: 42%;
  				height: auto;
				margin: 24px 96px;
			}
			.anotherImg{
				max-width: 8%;
			}
			.jarak{
				margin-top: 3%;
				margin-bottom: 3%;
			}
			.divider{
				padding-top: 2%;
			}
		</style>
		<script type="text/javascript">
		$(document).ready(function(){
			// Activate tooltip
			$('[data-toggle="tooltip"]').tooltip();
			
			// Select/Deselect checkboxes
			var checkbox = $('table tbody input[type="checkbox"]');
			$("#selectAll").click(function(){
				if(this.checked){
					checkbox.each(function(){
						this.checked = true;                        
					});
				} else{
					checkbox.each(function(){
						this.checked = false;                        
					});
				} 
			});
			checkbox.click(function(){
				if(!this.checked){
					$("#selectAll").prop("checked", false);
				}
			});
		});
		</script>
	</head>
	<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="position"> 
            <a class="navbar-brand" href="#">Reservation</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">test</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?php echo base_url('admin')?>">User<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active ml-auto" href="<?php echo base_url('admin/rumah_sakit')?>">Rumah Sakit</a>
                <a class="nav-item nav-link" href="<?php echo base_url('admin/poli')?>">Poli</a>
                <a class="nav-item nav-link" href="<?php echo base_url('admin/antrean')?>">Antrean</a>
                <a class="nav-item nav-link" href="<?php echo base_url('login/logout'); ?>">Logout</a>
            </div>
        </div>
        </nav>
		<div class="container">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Manage <b>Rumah Sakit</b></h2>
						</div>
						<div class="col-sm-6">
                            <a href="#deleteEmployeeModalWhole" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Rumah Sakit</span></a>						
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
				<thead>
						<tr>
							<th>No</th>
							<th>Nama Rumah Sakit</th>
							<th style="width: 22%;">Alamat</th>
							<th>Kota</th>
							<th>Jam Operasional</th>
							<th>Action</th> 
						</tr>
					</thead>
					<?php
						$no = 1;
						foreach($rumah_sakit as $u){
					?>
					<tbody>
						<tr>
							<td> <?php echo $no++ ?> </td>
							<td> <?php echo $u->nama_rs ?> </td>
							<td> <?php echo $u->alamat ?> </td>
							<td> <?php echo $u->kota ?> </td>
							<td> <?php echo $u->jam_operasional ?> </td>
							<td>
                                <a href="#editEmployeeModal<?php echo $u->id_rs;?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="#deleteEmployeeModal<?php echo $u->id_rs;?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
						</tr>
					</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
		<!-- Add Modal HTML -->
		<div id="addEmployeeModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form action="<?php echo base_url('admin/aksi_add_rs'); ?>" method="post">
						<div class="modal-header">						
							<h4 class="modal-title">Add Rumah Sakit</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								<label>Nama Rumah Sakit</label>
								<input type="text" name="nama_rs" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Kota</label>
								<input type="text" name="kota" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Jam Operasional</label>
								<input type="text" name="jam_operasional" class="form-control" required>
							</div>					
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-success" value="Add">
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Edit Modal HTML -->
		<?php foreach($rumah_sakit as $u){?>
		<div id="editEmployeeModal<?php echo $u->id_rs;?>" class="modal fade" tabindex="-1">
			<div class="modal-dialog">
			<div class="modal-content">
					<form action="<?php echo base_url('admin/update_rs'); ?>" method="post">
						<div class="modal-header">						
							<h4 class="modal-title">Edit Rumah Sakit</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								<label>Rumah Sakit</label>
								<input type="hidden" name="id_rs" value="<?php echo $u->id_rs ?>">
								<input type="text" name="nama_rs" class="form-control" value="<?php echo $u->nama_rs ?>" required>
                            </div>
                            <div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat ?>" required>
							</div>
							<div class="form-group">
								<label>Kota</label>
								<input type="text" name="kota" class="form-control" value="<?php echo $u->kota ?>" required>
							</div>
							<div class="form-group">
								<label>Jam Operasional</label>
								<input type="text" name="jam_operasional" class="form-control" value="<?php echo $u->jam_operasional ?>" required>
							</div>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-success" value="Update">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php }?>
		<!-- Delete Modal by ID HTML -->
		<div id="deleteEmployeeModal<?php echo $u->id_rs;?>" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
                <form action="<?php echo base_url('admin/hapus_rs');?>" method="post">
						<input type="hidden" name="id_rs" value="<?php echo $u->id_rs ?>">
						<div class="modal-header">
							<h4 class="modal-title">Delete Rumah Sakit</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to delete <b><?php echo $u->nama_rs;?>?</b></p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-danger" value="Delete">
						</div>
					</form>
				</div>
			</div>
        </div>
        <!-- Delete Modal HTML -->
		<div id="deleteEmployeeModalWhole" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
                    <form action="<?php echo base_url('admin/delete_all_data_rs');?>" method="post">
						<div class="modal-header">						
							<h4 class="modal-title">Delete Rumah Sakit</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">					
							<p>Are you sure you want to delete these records?</b></p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-danger" value="Delete">
						</div>
					</form>
				</div>
			</div>
		</div>
		<?php include('template/footer.php')?>
	</body>
</html>                                		                            