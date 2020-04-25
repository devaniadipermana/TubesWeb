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
			#sticky-footer {
				flex-shrink: none;
				position: fixed;
				left: 0;
				right: 0;
				bottom: 0;
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
		<!-- <img class="card-img-top" src="<?php echo base_url('/application/views/assets/gambar1.png')?>" alt="Card image cap"> -->
		<?php include('template/header.php')?>
		<div class="container">
			<h2> Hai, <?php echo $this->session->userdata("nama"); ?>.  </h2>
			<h4> Nowadays, you would be able to reserve by Apps </h4>
			<div class="card-deck jarak">
				<div class="card">
					<img class="card-img-top" src="<?php echo base_url('/application/views/assets/pict/002-mask.png')?>" alt="Card image cap">
					<div class="card-body">
					<h5 class="card-title text-center text-bold font-weight-bold">DISEASE</h5>
					<br>
					<p class="card-text">Tanggap penyakit berat dapat diawali dengan berobat secepatnya dan mendapatkan penanganan yang sangat cepat dari pihak rumah sakit.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="<?php echo base_url('/application/views/assets/pict/001-line.png')?>" alt="Card image cap">
					<div class="card-body">
					<h5 class="card-title text-center font-weight-bold">QUEUE HANDLING</h5>
					<br>
					<p class="card-text">Antre panjang tidak perlu dilakukan lagi dalam proses pengobatan yang efektif, agar calon pasien tidak menunggu dalam waktu yang lama.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
				<div class="card">
					<img class="card-img-top" src="<?php echo base_url('/application/views/assets/pict/003-mobile-banking.png')?>" alt="Card image cap">
					<div class="card-body">
					<h5 class="card-title text-center font-weight-bold">RESERVATION</h5>
					<br>
					<p class="card-text">Reservasi untuk antrean dapat dilakukan melalui website secara online dan dapat mempermudah tanpa perlu antre panjang.</p>
					<p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
					</div>
				</div>
			</div>
			<br>
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h1 class="display-4">How it Works?</h1>
					<p class="lead">Yuk kita lihat, bagaimana alur dari sistem ini.</p>
				</div>
			</div>
			<hr class="my-4">
			<h4><b> Sekarang antre untuk berobat lebih mudah dengan reservation website </b></h4>
			<!-- Gambar 1 -->
			<img src="<?php echo base_url('/application/views/assets/pict/002-note.png')?>" class="rounded float-left anotherImg" alt="...">
			<p class="lead" href="#multiCollapseExample1" data-toggle="collapse" aria-controls="multiCollapseExample1"><br> Make it easier </p>
			<p class="collapse multi-collapse" id="multiCollapseExample1">
				Calon pasien dapat menggunakan platform ini sebagai alat untuk mempermudah registrasi secara online. <br> Tidak dipungut biaya lho, alias free!
			</p>
			<!-- Gambar 2 -->
			<br><br><br><br>
			<img src="<?php echo base_url('/application/views/assets/pict/003-hospital.png')?>" class="rounded float-left anotherImg">
			<p class="lead" href="#multiCollapseExample2" data-toggle="collapse" aria-controls="multiCollapseExample2"><br> Data Integrity </p>
			<p class="collapse multi-collapse" id="multiCollapseExample2">
				Data anda akan tersimpan dengan baik oleh sistem yang terintegrasi langsung dengan pihak rumah sakit. <br>Data anda dijamin aman dan tidak disalahgunakan oleh pihakmanapun.  
			</p>
			<!-- Gambar 3 -->
			<br><br><br><br>
			<img src="<?php echo base_url('/application/views/assets/pict/001-customer.png')?>" class="rounded float-left anotherImg" alt="...">
			<p class="lead" href="#multiCollapseExample3" data-toggle="collapse" aria-controls="multiCollapseExample3"><br> Customer Service </p>
			<p class="collapse multi-collapse" id="multiCollapseExample3">
				Tidak perlu khawatir jika terjadi masalah, administrator kami siap membantu kapanpun dan dimanapun <br>saat anda mengalami kesulitan.
			</p>
		</div>
		<hr class="style1">
		<?php include('template/footer.php')?>
	</body>
</html>                                		                            