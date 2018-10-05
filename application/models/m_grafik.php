<?php
class M_grafik extends CI_Model{
  
   function statistik()
   {
    
    $sql= $this->db->query("
    
  SELECT
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=1)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Januari`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=2)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Februari`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=3)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Maret`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=4)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `April`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=5)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Mei`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=6)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Juni`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=7)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Juli`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=8)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Agustus`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=9)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `September`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=10)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Oktober`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=11)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `November`,
  ifnull((SELECT count(id_order) FROM (tabel_order)WHERE((Month(tanggal)=12)AND (YEAR(tanggal)=2018 AND 2019))),0) AS `Desember`
 from tabel_order GROUP BY YEAR(tanggal)
    
    ");
    
    return $sql;
    
   } 
}