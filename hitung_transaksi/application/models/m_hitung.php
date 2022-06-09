<?php 

	class M_hitung extends CI_Model
	{
		function ambil_golongan()
		{
			return $this->db->get('data_golongan')->result();
		}
		function simpan_data_golongan($golongan, $gajipokok, $tunjangan)
		{
			$data = array('golongan' => $golongan, 
							'gajipokok' => $gajipokok,
							'tunjangan' => $tunjangan
					);
			$this->db->insert('data_golongan', $data);
		}
		function get_where_golongan($golongan)
		{
			$this->db->where(array('golongan' => $golongan));
			return $this->db->get('data_golongan')->result();
		}
		function simpan_edit_golongan($oldgolongan, $golongan, $gajipokok, $tunjangan)
		{
			$data = array('golongan' => $golongan, 
							'gajipokok' => $gajipokok,
							'tunjangan' => $tunjangan
					);
			$this->db->where(array('golongan' => $oldgolongan));
			$this->db->update('data_golongan', $data);
		}
		function hapus_data_golongan($golongan)
		{
			$this->db->where(array('golongan' => $golongan));
			$this->db->delete('data_golongan');
		}

		function ambil_karyawan()
		{
			return $this->db->get('data_karyawan')->result();
		}
		function golongan()
		{
			return $this->db->get('data_golongan')->result();
		}
		function simpan_data_karyawan($namakaryawan, $jeniskelamin, $alamat, $tgllahir, $golongan, $status)
		{
			$data = array('namakaryawan' => $namakaryawan, 
							'jeniskelamin' => $jeniskelamin,
							'alamat' => $alamat,
							'tgllahir' => $tgllahir,
							'golongan' => $golongan,
							'status' => $status
					);
			$this->db->insert('data_karyawan', $data);
		}
		function get_where_karyawan($idkaryawan)
		{
			$this->db->where(array('idkaryawan' => $idkaryawan));
			return $this->db->get('data_karyawan')->result();
		}
		function simpan_edit_karyawan($idkaryawan, $namakaryawan, $jeniskelamin, $alamat, $tgllahir, $golongan, $status)
		{
			$data = array('namakaryawan' => $namakaryawan, 
							'jeniskelamin' => $jeniskelamin,
							'alamat' => $alamat,
							'tgllahir' => $tgllahir,
							'golongan' => $golongan,
							'status' => $status
					);
			$this->db->where(array('idkaryawan' => $idkaryawan));
			$this->db->update('data_karyawan', $data);
		}
		function hapus_data_karyawan($idkaryawan)
		{
			$this->db->where(array('idkaryawan' => $idkaryawan));
			$this->db->delete('data_karyawan');
		}
		
		function ambil_transaksi()
		{
			$this->db->select('*');
			$this->db->from('data_transaksi');
			$this->db->join('data_karyawan', 'data_karyawan.idkaryawan = data_transaksi.idkaryawan');
			$this->db->join('data_golongan', 'data_golongan.golongan = data_karyawan.golongan');
			return $this->db->get()->result();
		}

		function idkaryawan()
		{
			$hasil = $this->db->get('data_karyawan');
			return $hasil->result();
		}

		function gaji_pokok_tunjangan($idkaryawan)
		{
			$this->db->select('*');
			$this->db->from('data_karyawan');
			$this->db->join('data_golongan', 'data_golongan.golongan = data_karyawan.golongan');
			$where = $this->db->where('idkaryawan', $idkaryawan);
			$hasil = $this->db->get_where('');
			return $hasil->row_array();
		}

		function simpan_data_transaksi($bulan, $tahun, $idkaryawan, $lembur, $transport, $gajitotal)
		{
			$data = array('bulan' => $bulan, 
							'tahun' => $tahun,
							'idkaryawan' => $idkaryawan,
							'transport' => $transport,
							'lembur' => $lembur,
							'gajitotal' => $gajitotal
					);
			$this->db->insert('data_transaksi', $data);
		}
		function get_where_transaksi($idtransaksi)
		{
			$this->db->where(array('idtransaksi' => $idtransaksi));
			return $this->db->get('data_transaksi')->result();
		}
		function simpan_edit_transaksi($idtransaksi, $bulan, $tahun, $idkaryawan, $lembur, $transport, $gajitotal)
		{
			$data = array('bulan' => $bulan, 
							'tahun' => $tahun,
							'idkaryawan' => $idkaryawan,
							'transport' => $transport,
							'lembur' => $lembur,
							'gajitotal' => $gajitotal
					);
			$this->db->where(array('idtransaksi' => $idtransaksi));
			$this->db->update('data_transaksi', $data);
		}
		function hapus_data_transaksi($idtransaksi) 
		{
			$this->db->where(array('idtransaksi' => $idtransaksi));
			$this->db->delete('data_transaksi');
		}
	}

?>