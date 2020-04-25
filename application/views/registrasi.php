<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reservation</title>
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
        background: #f7f5f2;
		font-family: 'Roboto', sans-serif;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px auto;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .position{
		margin-left:16px;
		margin-right:54%;
	}
    .table-title {
		color: #fff;
		background: #40b2cd;		
		padding: 16px 25px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
	.search-box {
        position: relative;
        float: right;
    }
	.search-box .input-group {
		min-width: 300px;
		position: absolute;
		right: 0;
	}
	.search-box .input-group-addon, .search-box input {
		border-color: #ddd;
		border-radius: 0;
	}	
    .search-box input {
        height: 34px;
        padding-right: 35px;
        background: #f4fcfd;
        border: none;
        border-radius: 2px !important;
    }
	.search-box input:focus {
        background: #fff;
	}
	.search-box input::placeholder {
        font-style: italic;
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 6px 0;
    }
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
        position: relative;
        top: 2px;
    }
    table.table {
        table-layout: fixed;
        margin-top: 15px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:first-child {
        width: 60px;
    }
    table.table th:last-child {
        width: 120px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
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
	// Activate tooltips
	$('[data-toggle="tooltip"]').tooltip();
    
	// Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td:nth-child(2)").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){                
                $row.hide();
            } else{
                $row.show();
            }
        });
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
            <a class="nav-item nav-link" href="<?php echo base_url('user/user')?>">Home<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active ml-auto" href="<?php echo base_url('registrasi')?>">Registrasi</a>
            <a class="nav-item nav-link" href="<?php echo base_url('informasi')?>">Informasi</a>
            <a class="nav-item nav-link" href="<?php echo base_url('login/logout'); ?>">Logout</a>
        </div>
    </div>
    </nav>
	<div class="container">
        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
					<div class="col-sm-6">
						<h2>Reservation <b>Details</b></h2>
					</div>
                    <div class="col-sm-6">
                        <div class="search-box">
							<div class="input-group">								
								<input type="text" id="search" class="form-control" placeholder="Search by Patient Name">
                                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pasien</th>
                        <th style="width: 22%;">Rumah Sakit</th>
                        <th>Poli</th>
                        <th>Antrean</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
                    foreach($antrean as $u){
                ?>
                <tbody>
                    <tr>
                        <td> <?php echo $no++ ?> </td>
                        <td> <?php echo $u->nama_lengkap ?> </td>
                        <td> <?php echo $u->nama_rs ?> </td>
                        <td> <?php echo $u->poli ?> </td>
                        <td> <?php echo $u->no_antrean ?> </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>

        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
					<div class="col-sm-6">
						<h2>Reservation <b>Form</b></h2>
					</div>
                </div>
            </div>
            <form action="<?php echo site_url('registrasi/save_antrean');?>" method="post">>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Fullname">
                </div>
                <div class="form-group">
                    <label for="rumah_sakit">Rumah Sakit</label>
                    <select class="form-control" name="rumah_sakit" id="rumah_sakit" required>
                        <option value="">No Selected</option>
                        <?php foreach($rumah_sakit as $row):?>
                        <option value="<?php echo $row->nama_rs;?>"><?php echo $row->nama_rs;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="poli">Poli</label>
                    <select class="form-control" name="poli" id="poli" required>
                        <option value="">No Selected</option>
                        <?php foreach($poli as $row):?>
                        <option value="<?php echo $row->nama_poli;?>"><?php echo $row->nama_poli;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="antrean" class="col-sm-2 col-form-label">No Antrean</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control-plaintext" id="no_antrean" name="no_antrean">
                    </div>
                </div>
                <?php
                    if (empty($_POST["nama_lengkap"])) {
                        $pesanerror = "Semua field harus diisi";
                    }
                ?>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>  
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#rumah_sakit').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('informasi/get_sub_rs');?>",
                    method : "POST",
                    data : {id: id_rs},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_rs+'>'+data[i].nama_rs+'</option>';
                        }
                        $('#rumah_sakit').html(html);
                    }
                });
                return false;
            }); 
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#poli').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('informasi/get_sub_poli');?>",
                    method : "POST",
                    data : {id: id_poli},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].id_poli+'>'+data[i].nama_poli+'</option>';
                        }
                        $('#poli').html(html);
                    }
                });
                return false;
            }); 
        });
    </script>
    <?php include('template/footer.php')?>     
</body>
</html>                                		                                                        