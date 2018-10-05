<?php
 
class M_beli extends CI_Model
	{
    function get_data(){     
        // return $this->db->get('tabel_pembeli')->result();
        $query = $this->db->query("SELECT tabel_pembeli.*, tabel_status.*, tabel_detail_order.*, tabel_barang.nama_barang, GROUP_CONCAT(tabel_detail_order.id_barang) AS 'id_barang2', GROUP_CONCAT(tabel_barang.nama_barang SEPARATOR ', \r\n#') AS 'nama_barang2', GROUP_CONCAT(tabel_detail_order.qty SEPARATOR ', ') AS 'qty2', GROUP_CONCAT(tabel_detail_order.harga SEPARATOR ', #') AS 'harga2', GROUP_CONCAT(tabel_detail_order.total SEPARATOR ', #') AS 'total2', SUM(tabel_detail_order.total) AS 'total_sum', COUNT(*) AS 'total_belanja' FROM tabel_pembeli INNER JOIN tabel_status ON tabel_pembeli.id_beli = tabel_status.id_beli INNER JOIN tabel_detail_order ON tabel_pembeli.id_beli = tabel_detail_order.id_beli INNER JOIN tabel_barang ON tabel_detail_order.id_barang = tabel_barang.id_barang GROUP by tabel_detail_order.id_beli DESC");
        return $query->result();
    }
    function print(){     
        // return $this->db->get('tabel_pembeli')->result();
        $query = $this->db->query("SELECT tabel_pembeli.*, tabel_detail_order.*, tabel_status.*, tabel_barang.nama_barang, tabel_detail_order.id_beli AS idbel FROM tabel_pembeli INNER JOIN tabel_detail_order ON tabel_pembeli.id_beli = tabel_detail_order.id_beli INNER JOIN tabel_barang ON tabel_barang.id_barang = tabel_detail_order.id_barang INNER JOIN tabel_status ON tabel_pembeli.id_beli = tabel_status.id_beli where status='Selesai' AND tabel_pembeli.created_at  Order by tabel_pembeli.id_beli DESC");
        return $query->result();
    }  
     function print2($idbel){     

        $this->db->from('tabel_pembeli');
        $this->db->join('tabel_detail_order','tabel_pembeli.id_beli = tabel_detail_order.id_beli','inner');
        $this->db->join('tabel_barang','tabel_barang.id_barang = tabel_detail_order.id_barang','INNER');
        $this->db->join('tabel_status','tabel_pembeli.id_beli = tabel_status.id_beli','INNER');
        $this->db->where('tabel_status.status','Selesai');
        $this->db->where('tabel_pembeli.id_beli',$idbel);
        $this->db->order_by('tabel_pembeli.id_beli','DESC');

        return $this->db->get();
    }  
     function simpan_beli($id_beli,$nip,$nama,$email,$alamat,$telp,$jns_transaksi){
        $hasil=$this->db->query("INSERT INTO tabel_pembeli (id_beli,nip,nama,email,alamat,telp,jns_transaksi) VALUES ('$id_beli','$nip','$nama','$email','$alamat','$telp','$jns_transaksi')");
        return $hasil;
    } 
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function ubah_beli($data,$id_beli){
    $this->db->where('id_beli',$id_beli);
    $this->db->update('tabel_pembeli', $data);
    return TRUE;
	}
	function terima_beli($id_status,$status){
    $this->db->where('id_status',$id_status);
    $this->db->set('status',$status);
    $this->db->update('tabel_status');
    return TRUE;
	}
	function jumlah_beli(){
		return $this->db->query('SELECT * FROM tabel_order');;
		
	}
	function laporan_order($awal,$akhir){
	$this->session->unset_userdata('tgl_awal');
	$this->session->unset_userdata('tgl_akhir');
		// $query = $this->db->query("SELECT tabel_pembeli.*, tabel_detail_order.*, tabel_status.*, tabel_barang.nama_barang FROM tabel_pembeli INNER JOIN tabel_detail_order ON tabel_pembeli.id_beli = tabel_detail_order.id_beli INNER JOIN tabel_barang ON tabel_barang.id_barang = tabel_detail_order.id_barang INNER JOIN tabel_status ON tabel_pembeli.id_beli = tabel_status.id_beli where status='Selesai' AND tabel_pembeli.created_at Between '$awal' AND '$akhir' Order by tabel_pembeli.id_beli DESC");
		$query = $this->db->query("SELECT tabel_pembeli.*, tabel_status.*, tabel_detail_order.*, tabel_barang.nama_barang, GROUP_CONCAT(tabel_detail_order.id_barang) AS 'id_barang2', GROUP_CONCAT(tabel_barang.nama_barang SEPARATOR ', \r\n#') AS 'nama_barang2', GROUP_CONCAT(tabel_detail_order.qty SEPARATOR ', ') AS 'qty2', SUM(tabel_detail_order.harga) AS 'harga', SUM(tabel_detail_order.total) AS 'total', COUNT(*) AS 'total_belanja' FROM tabel_pembeli INNER JOIN tabel_status ON tabel_pembeli.id_beli = tabel_status.id_beli INNER JOIN tabel_detail_order ON tabel_pembeli.id_beli = tabel_detail_order.id_beli INNER JOIN tabel_barang ON tabel_detail_order.id_barang = tabel_barang.id_barang where status='Selesai' AND tabel_pembeli.jns_transaksi='Potong Gaji' AND tabel_pembeli.created_at Between '$awal' AND '$akhir' GROUP by tabel_pembeli.nip DESC");
		return $query->result();
		// var_dump($query);
	}
    function notif(){
    	date_default_timezone_set('Asia/Makassar');
		$day = date('Y-m-d');
		return $this->db->query("SELECT * from tabel_order where tanggal='$day'")->num_rows();
	}
	function notif2(){
		date_default_timezone_set('Asia/Makassar');
		$day = date('Y-m-d');
		return $this->db->query("SELECT * from tabel_status where tanggal='$day' AND notif='1'")->num_rows();
	}
	function status_ubah(){
	$notif1='0';
	$id = 1;
	// $this->db->where('id_status');
	$this->db->set('notif',$notif1);
    $this->db->update('tabel_status');
    return TRUE;
	}

}