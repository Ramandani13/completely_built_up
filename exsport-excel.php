<?php
header("content-type:application/vdn-ms-excel");
// header("content-type:application/csv");
header("content-disposition:attachment;filename=Data-Vanningcbu.xls");
// header("content-disposition:attachment;filename=Data-Weighting.txt");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="icon.png" />

	<title>Input-Exim</title>
    <meta http-equiv="refresh" content="15" />
	<link href="css/app.css" rel="stylesheet">
</head>

<?php  
  
// $url = $_SERVER['REQUEST_URI'];  
  
header("Refresh: 30; ");  
  
?> 
<body>



		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg" style="padding:10px;">
         
				<a class="sidebar-toggle d-flex">
          <i class=" align-self-center" ></i>
         
          <!-- <span class="align-middle"><img src="icon.png"  width="30" height="30"></span>
          <h1 style="font-family: sans-serif;color:white;position:relative;top:0px;right:-5px;font-size:24px;"><b> PACKING</b></h1> -->
 		  <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:-1060px;font-size:19px;" id="jam"><b></b></h1> 
        </a>


				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">

                    <?php

setlocale(LC_TIME, 'id_ID.utf8');

$hariIni = new DateTime();

# lokalisasi tidak berpengaruh
echo $hariIni->format('l F Y') . '<br>';

?>	
						
				</div>
			</nav>
    <main>
 
       <!-- --------------------------------- hasil scann ------------------------------------- -->
      

    <h1 class="card-title mb-0" style="font-size:30px;text-align:center;"><b>CONTROL SHEET VANNING CBU</b></h1>

    <!-- <h3 style="margin-left:1150px;margin-top:-30px;color:red;" ><b>DOK 1</b></h3><h1 style="margin-left:1260px;color:blue;margin-top:-40px;" >/&nbsp;<span style="color:black;">case</span>&nbsp;&nbsp;</h1> -->
   

<!-- <span></span><img src="../static/img/icons/4.png"  size="100%">&nbsp;</span> -->
<div id="wrapper">  
    <div id="blue">
     <div id="tanggal"></div>				 
   </div>

   <style type="text/css">
#gradient3 {
    background-image: linear-gradient(to bottom right, #483D8B, #000000);
}

.scroll2{
display:block;
border: 1px solid white;
padding:10px;
margin-top:70px;

width:100%;
height:400px;
overflow:auto;
}
.scroll3{
display:block;
border: 1px solid white;
padding:10px;
margin-top:5px;

width:100%;
height:300px;
overflow:auto;
}
.resultvaning{
    position:relative;
    top:-60px;
    right:10px;
}

</style>
<form id="in-bar" method="get" action="" class="fill-barcode">
			<p style="margin-left: 2%;margin-top:50px;">
			
				<div id="toggle" onclick="showHide();"></div>
			</p>
			
            
<div class="scroll2">
<table class="table table-hover my-0">

<thead>
    <?php
    include "koneksi.php";
    // error_reporting(0);
$cekcont = mysqli_query($koneksi,"SELECT (no_cont_cbu) AS contt FROM tb_va_total_container_cbu ");
while($hasilcont = mysqli_fetch_array($cekcont)){
     $dokcont = $hasilcont['contt'];
 }
    ?>
<center><b style="background-color:red;font-size:40px;color:white;">DOK 1</b>&nbsp;No Cont :<b style="font-size:30px;color:red;"><?= $dokcont ?></b></center>
<!-- <a style="font-weight: bold;" href="importan/form.php">IMPORT ALL </a>
<button style="position:relative;margin-left:20px;"><a href="exsport-txt1.php"><h style="color:red;">Download Text</h></a></button>
<button style="position:relative;margin-left:20px;"><a href="exsport-excel.php"><h style="color:red;">Download Excel</h></a></button>
&nbsp;<a style="color:green;" href="result_vaning.php">Result Vaning?</a>
&nbsp;<a style="color:blue;" href="result_vaning.php">Trace Bucket?</a> -->
<!-- <a style="color:red; font-weight: bold;position:relative;margin-left:1000px;" href="delete_dok1.php" >DELETE DOK 1</a> -->
                        <tr>
                        <th class="d-none d-md-table-cell" style="color:white; background-color:black"><center>NO</center></th>
                        <th class="d-none d-md-table-cell" style="color:white; background-color:blue" ><center>TANGGAL</center></th>
                            <th class="d-none d-md-table-cell" style="color:white; background-color:blue" ><center>JAM</center></th>
                            <th class="d-none d-md-table-cell" style="color:white; background-color:blue" ><center>BARCODE</center></th>
                            <th class="d-none d-md-table-cell" style="color:white; background-color:blue" ><center>CONTAINER</center></th>
                            <th class="d-none d-md-table-cell" style="color:white; background-color:blue" ><center>DO CBU</center></th>
    
                        </th>     
                        </tr>
                    </thead> 
                    <?php
                      include "koneksi.php";
                      $set_jam = '60'; 
                      $set_menit = '04'; ///untuk setting selisih 4 menit 
                      $waktu_indonesia = time() + (60 * 60 * 7) ;
                      $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
                      $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
                      $jam_ori = gmdate('H:i:s', $waktu_indonesia);
                      $tj = gmdate('Y-m-d H:i:s', $waktu_indonesia);
                      $jam_oriw = gmdate('H:i', $waktu_indonesia);
                      $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
                      $nama_tahun = gmdate('Y', $waktu_indonesia);
                      $hari=gmdate('D', $waktu_indonesia);
                      $nama_bulan = gmdate('M-Y', $waktu_indonesia);
                      $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
                      $nama_hari=gmdate('D', $waktu_indonesia);
                      $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
                      $bulan_nama2 = gmdate('M', $waktu_indonesia);
                       $jam_ori1 = gmdate('H:i', $waktu_indonesia);
                      $no=1;
                      $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_va_input_cbu WHERE jamm >='07:00:00' and tgl ='$tanggal_ori' ");
                          while($tampil = mysqli_fetch_array($ambildata)){
                          ?>
                         
                          <tr>

                                  <td><center><?php echo $no++ ?></center></td>
                                  <td><center><?php echo $tampil['tgl']; ?></center></td>
                                  <td><center><?php echo $tampil['jamm']; ?></center></td>
                                  <td><center><?php echo $tampil['barcode']; ?></center></td>
                                  <td><center><?php echo $tampil['container']; ?></center></td>
                                  <td><center><?php echo $tampil['do_cbu']; ?></center></td>
                  
                            
                              </tr>
                          <?php    
                      }
                  ?><br><br>

</table>
            
            </div>            
                  
<style type="text/css">
#tampil_modal{
    padding-top:10em;
    background-color:rgba(0,0,0,0.8);
    position:fixed;
    top:0;
    bottom:0;
    left:0;
    right:0;
    z-index:10;
    display:block;
}
#modal{
    padding:15px;
    font-size:20px;
    text-align:center;
    background:#ff1493;
    color:#fff;
    width:480px;
    border-radius:15px;
    margin:0 auto;
    margin-bottom:20px;
    padding-bottom:50px;
    z-index:9;   
}
#modal_atas{
    width:100%;
    background:#ff00ff;
    text-align:left;
    padding :15px;
    margin-left:-15px;
    font-size:15px;
    margin-top:-15px;
    border-top-left-radius:15px;
    border-top-right-radius:15px;
    color:yellow;
}
#oke{
    background:#c0392b;
    border:none;
    float:right;
    width:80px;
    height:auto;
    color:#fff;
    margin-right:5px;
    cursor:pointer;
}
.info{
    position:relative;
    font-family: stock;
    font-size: 30px;
    color: blue;
    background-color:white;
    font-style:italic;
    border:1px solid white;
    width:1690px;
    height:50px;
    top:10px;
    left:-27px;

}
.imga{
    background-image: url(bg-kuning.jfif);
    background-position:center;
    background-size:cover;

}
    </style>



                  <?php
// include database connection file
include "koneksi.php";
$set_jam = '60'; 
 $set_menit = '04'; ///untuk setting selisih 4 menit 
 $waktu_indonesia = time() + (60 * 60 * 7) ;
 $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
 $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
 $jam_ori = gmdate('H:i:s', $waktu_indonesia);
 $jam_oriw = gmdate('H:i', $waktu_indonesia);
 $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
 $nama_tahun = gmdate('Y', $waktu_indonesia);
 $hari=gmdate('D', $waktu_indonesia);
 $nama_bulan = gmdate('M-Y', $waktu_indonesia);
 $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
 $nama_hari=gmdate('D', $waktu_indonesia);
 $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
 $bulan_nama2 = gmdate('M', $waktu_indonesia);
  $jam_ori1 = gmdate('H:i:s', $waktu_indonesia);


$contcbu = mysqli_query($koneksi, "SELECT * FROM tb_va_total_container_cbu");
while($user_data = mysqli_fetch_array($contcbu))
{
    $nocontcbu=$user_data['no_cont_cbu'];
    $nodocbu=$user_data['no_do_cbu'];
}
// error_reporting(0);
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_GET['kirim1']))

{    
    $cekk = $_GET['dani'] ;  
    $nama1  = substr($cekk,0,12); 
            include "koneksi.php";
            
            $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM tb_va_input_cbu WHERE barcode ='$nama1' "));
           
             if($cek == '0'){
                $result = mysqli_query($koneksi, "INSERT INTO tb_va_input_cbu(tgl,jamm,barcode,container,do_cbu) VALUES('$tanggal_ori','$jam_ori1','$nama1','$nocontcbu','$nodocbu')");
                 '<audio src="OK.mp3" controls autoplay></audio>';
              
             }else{
                 echo $result="CASE TIDAK BOLEH SAMA ";       
        }
          
}

?>
</form>
<?php

include "koneksi.php";
$set_jam = '60'; 
 $set_menit = '04'; ///untuk setting selisih 4 menit 
 $waktu_indonesia = time() + (60 * 60 * 7) ;
 $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
 $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
 $jam_ori = gmdate('H:i:s', $waktu_indonesia);
 $jam_oriw = gmdate('H:i', $waktu_indonesia);
 $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
 $nama_tahun = gmdate('Y', $waktu_indonesia);
 $hari=gmdate('D', $waktu_indonesia);
 $nama_bulan = gmdate('M-Y', $waktu_indonesia);
 $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
 $nama_hari=gmdate('D', $waktu_indonesia);
 $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
 $bulan_nama2 = gmdate('M', $waktu_indonesia);
  $jam_ori1 = gmdate('H:i', $waktu_indonesia);



$no=1;
$ambildata = mysqli_query($koneksi,"SELECT COUNT(DISTINCT container) AS jmlh_container FROM tb_va_input_cbu where jamm >= '07:00:00' and  tgl ='$tanggal_ori' ");

    while($row = mysqli_fetch_array($ambildata,MYSQLI_ASSOC)){
      $hasil =  $row['jmlh_container']  ;
            
    ?> 
    <?php    
}
?>

<!-- ==================== untuk menentukan total container cbu ========================== -->
<?php

$ambildata = mysqli_query($koneksi,"SELECT COUNT(DISTINCT cont) AS jmlh_container FROM tb_va_input_exim_all WHERE jam_dami >='07:00:00'  and tgll ='$tanggal_ori' ");

    while($row = mysqli_fetch_array($ambildata,MYSQLI_ASSOC)){
      $no_cont_exim =  $row['jmlh_container']  ;
            
    ?> 
    <?php    
}
?>

<!-- ======================== jumlah cont exim dan cbu ============================== -->
<!-- ==================== untuk menentukan total plan EXIM ========================== -->
<?php

$resultexim = mysqli_query($koneksi, "SELECT * FROM tb_va_total_container ");
 
while($user_dataexim = mysqli_fetch_array($resultexim))
{
    $total_plan_containerexim=$user_dataexim['total_plan'];

}
?>


<!-- ==================== untuk menentukan total plan ========================== -->
<?php

$result = mysqli_query($koneksi, "SELECT * FROM tb_va_total_container_cbu ");
 
while($user_data = mysqli_fetch_array($result))
{
    $total_plan_container=$user_data['total_plan'];

}
?>
      
	        </main>        
			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
                            <a href="#" class="text-muted">&copy; <strong ><b>2022 <i style="color:blue;">Ramandani Gilang S [19968]</i> YIMM-WJF.</b></strong></a>	 
							</p>
						</div>
                        <div>
                          
                        </div>						
					</div>
				</div>
			</footer>
		</div>
	</div>

	<?php
 $set_jam = '60'; 
 $set_menit = '04'; ///untuk setting selisih 4 menit 
 $waktu_indonesia = time() + (60 * 60 * 7) ;
 $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
 $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
 $jam_ori = gmdate('H:i:s', $waktu_indonesia);
 $jam_oriw = gmdate('H:i', $waktu_indonesia);
 $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
 $nama_tahun = gmdate('Y', $waktu_indonesia);
 $hari=gmdate('D', $waktu_indonesia);
 $nama_bulan = gmdate('M-Y', $waktu_indonesia);
 $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
 $nama_hari=gmdate('D', $waktu_indonesia);
 $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
 $bulan_nama2 = gmdate('M', $waktu_indonesia);
  $jam_ori1 = gmdate('H:i', $waktu_indonesia);

include "koneksi.php";

?>


<script src="js/app.js"></script>
	
<script type="text/javascript">
 window.onload = function() { jam(); }

function jam() {
 var e = document.getElementById('jam'),
 d = new Date(), h, m, s;
 h = d.getHours();
 m = set(d.getMinutes());
 s = set(d.getSeconds());

 e.innerHTML = h +':'+ m +':'+ s;

 setTimeout('jam()', 1000);
}

function set(e) {
 e = e < 10 ? '0'+ e : e;
 return e;
}
$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        if (!$next.length) {
       $next = $('[tabIndex=1]');        }
        $next.focus() .click();
    }
});

    </script>

</body>

</html>