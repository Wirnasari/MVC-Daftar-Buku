<?php 
include_once'book.php';

class model 
{ 
public function getData() 
{ 
return array
( 
new book('1','Buku Sakti HTML, CSS & Javascript','Adam Saputra, S.Si','Start Up','270 pages','2019'), 
new book('2','Aplikasi Kuitansi, Stok Barang, & Penggajian dengan Ms Excel','Yudhy Wicaksono','Elex Media Komputindo','280 pages','2021'), 
new book('3','Pemrograman Web dengan Menggunakan PHP dan Framework Codeigniter','Supono dan Vidiandry Putratama','Deepublish','219 pages','2018'), 
new book('4','Buku Ajar Konsep Dasar Pemrograman Website Deangan PHP','Elgamar','Ahlimedia Book','82 pages','2020'), 
new book('5','Pemrograman Web Berbasis HTML5, PHP, Dan JavaScript','Edy Winarno ST, M.Eng, Ali Zaki & SmitDev Community','Elex Media Komputindo','248 pages','2014'),
);
} 
}
?>