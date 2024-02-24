<?php

include_once'model.php'; 

class controller 
{ 
function invoke() 
{ 
$model_data = new model(); 
$row_data = $model_data->getData(); 
$data ="<table border=1>
<h1>DAFTAR PESANAN BUKU</h1>
<tr>
<th>NO.</th>
<th>JUDUL</th>
<th>PENGARANG</th>
<th>PENERBIT</th>
<th>HALAMAN</TH>
<th>TAHUN</th>
</tr>"; 
foreach 
($row_data as $key => $value) { 
$data .="
<tr>
<td>".$value->no."</td>
<td>".$value->judul."</td>
<td>".$value->pengarang."</td>
<td>".$value->penerbit."</td>
<td>".$value->halaman."</td>
<td>".$value->tahun."</td>
</tr>"; 
} $data .="</table>
<h2>by Toko Wirnas.my.id</h1>"; 
include('view.php'); 
} 
}
?>