<?php

class book { 

public $no;
public $judul; 
public $pengarang; 
public $penerbit;
public $halaman;  
public $tahun; 

public function __construct($no,$title,$author,$publisher,$pages,$year) { $this->judul = $title;
$this->no = $no; 
$this->pengarang = $author; 
$this->pengarang = $author; 
$this->penerbit = $publisher;
$this->halaman = $pages;
$this->tahun = $year; } }
?>