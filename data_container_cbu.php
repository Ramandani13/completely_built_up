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

	<title>Result-CBU</title>
    <meta http-equiv="refresh" content="15" />
	<link href="css/app.css" rel="stylesheet">
</head>

<?php  
  
// $url = $_SERVER['REQUEST_URI'];  
  
header("Refresh: 300; ");  
  
?> 

   
<body>



		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg" style="padding:10px;">
         
				<a class="sidebar-toggle d-flex">
          <i class=" align-self-center" ></i>
          <span class="align-middle" style="position:relative;top:-10px;right:10px;"><img src="gambar/200.gif"  width="130" height="45"></span>
          <span class="align-middle" style="position:relative;top:-6px;right:134px;"><img src="gambar/gil.jpg"  width="119" height="38"></span>
          <span class="align-middle" style="position:relative;top:17px;right:242px;"><img src="gambar/score.png" style="border-radius:5px;" width="100" height="8"></span>
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
        
   <style type="text/css">
#gradient3 {
    background-image: linear-gradient(to bottom right, #483D8B, #000000);
}


.scroll2{
display:block;
border: 1px solid white;
padding:10px;
margin-top:5px;

width:100%;
height:300px;
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

    <h1 class="card-title mb-0" style="font-size:30px;text-align:center;"><b>CBU PRODUCTION EXPORT</b></h1>
<h2>DATA CONTAINER</h2>
<div class="scroll2">
<table class="table table-hover my-0">

<thead>

                       <tr>
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO</center></th>                       
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>CONTAINER</center></th>                       
                            <!-- <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DESTINATION</center></th>                       
                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>DOK</center></th>                        -->
                         </th>     
                        </tr>
                    </thead> 
                    <?php
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
                      include "koneksi.php";
                      $no=1;
                      $ambildata = mysqli_query($koneksi,"SELECT DISTINCT container FROM tb_va_input_cbu WHERE jamm >='07:00:00' and tgl ='$tanggal_ori'  ");
                          while($tampil = mysqli_fetch_array($ambildata)){
                          ?>
                         
                          <tr>
                                  <!-- <td>$no</td> -->
   
                                  <td><center><?php echo $no++; ?></center></td>
                                  
                                  <td><center><?php echo $tampil['container']; ?></center></td>
                             
                                
                            
                              </tr>
                          <?php    
                      }
                  ?><br><br>

</table>
            
            </div>  
            <a href="index.php"><img src="back.png"  style="width:45px; height:45px; position:relative;left:1600px;top:-370px;"></a>
                       
         <!-- ======================================= untuk input plan container ====================================== -->
  
<?php
// include database connection file
include "koneksi.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['updater']))
{       
    $total_plan=$_POST['total_plan'];
    $result = mysqli_query($koneksi, "UPDATE tb_va_total_container_cbu SET total_plan='$total_plan'");
}
?>
<?php
$result = mysqli_query($koneksi, "SELECT * FROM tb_va_total_container_cbu");
while($user_data = mysqli_fetch_array($result))
{
    $total_plan=$user_data['total_plan'];
}
?>
<html>
<head>    
</head>

<body>
    <form name="" method="post" action="">
        <table border="0">            
            <tr> 
                <td style="position:relative;top:-410px;left:1200px;">Total Plan Container</td>
                <td style="position:relative;top:-410px;left:1200px;"><input type="text" name="total_plan" value="<?= $total_plan;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" hidden name="updater" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<br>
<!-- ====================================================== untuk input container CBU ======================================== -->
 
<?php
// include database connection file
include "koneksi.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['updatecbu']))
{    
    $no_cont_cbu=$_POST['no_cont_cbu'];
    $resultcbu = mysqli_query($koneksi, "UPDATE tb_va_total_container_cbu SET no_cont_cbu='$no_cont_cbu'");
}
?>
<?php
$resultcbu = mysqli_query($koneksi, "SELECT * FROM tb_va_total_container_cbu");
while($user_data = mysqli_fetch_array($resultcbu))
{
    $no_cont_cbu=$user_data['no_cont_cbu'];
}
?>
<html>
<head>    
</head>
 
<body>
    <form name="" method="post" action="">
        <table border="0">
            <tr> 
                <td style="position:relative;top:-420px;left:1200px;">Nomor Container CBU</td>
                <td style="position:relative;top:-420px;left:1200px;"><input type="text" name="no_cont_cbu" value="<?= $no_cont_cbu;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" hidden name="updatecbu" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html><br>

<!-- ====================================================== untuk input NO DO ======================================== -->
 
<?php
// include database connection file
include "koneksi.php";
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['updatecbudo']))
{    
    $no_do_cbu=$_POST['no_do_cbu'];
    $resultcbudo = mysqli_query($koneksi, "UPDATE tb_va_total_container_cbu SET no_do_cbu='$no_do_cbu'");
}
?>
<?php
$resultcbudo = mysqli_query($koneksi, "SELECT * FROM tb_va_total_container_cbu");
while($user_data = mysqli_fetch_array($resultcbudo))
{
    $no_do_cbu=$user_data['no_do_cbu'];
}
?>
<html>
<head>    
</head>
 
<body>
    <form name="" method="post" action="">
        <table border="0">
            <tr> 
                <td style="position:relative;top:-420px;left:1200px;">Nomor DO CBU</td>
                <td style="position:relative;top:-420px;left:1200px;"><input type="text" name="no_do_cbu" value="<?= $no_do_cbu;?>"></td>
            </tr>
            <tr>
                <td><input type="submit" hidden name="updatecbudo" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>




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
                            <marquee class="info" direction="center" scrollamount="10">PATUHI PROTOKOL KESEHATAN COVID-19 DEGAN MELAKUKAN 3M DAN HINDARI 3K</marquee>
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
