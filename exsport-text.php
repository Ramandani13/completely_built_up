<?php
  error_reporting (0);
  header("content-disposition:attachment;filename=Data-Weighting.txt");
  
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

                          $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_va_input_cbu WHERE tgl = '$tanggal_ori'  ");
                          while($tampil = mysqli_fetch_array($ambildata)){  
                            $separator = "\r";
                                   echo $tampil['barcode'].$separator; 
                                   
                                  
                      }
                  ?> 