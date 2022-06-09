<?php 

	class C_hitung extends CI_Controller
	{
		function index()
		{
			$this->load->view('dashboard');
		}

		//Data Golongan
		function view_golongan()
		{
			$data['golongan'] = $this->m_hitung->ambil_golongan();
			$this->load->view('header');
			$this->load->view('golongan/dashboard', $data);
			$this->load->view('footer');
		}
		function tambah_golongan()
		{
			$this->load->view('header');
			$this->load->view('golongan/tambah_data');
			$this->load->view('footer');
		}
		
		function edit_data_golongan($golongan)
		{
			$data['golongan'] = $this->m_hitung->get_where_golongan($golongan);
			$this->load->view('header');
			$this->load->view('golongan/edit_data', $data);
			$this->load->view('footer');
		}
		function simpan_edit_golongan()
		{
			$oldgolongan = $this->input->post('oldgolongan');
			$golongan = $this->input->post('golongan');
			$gajipokok = $this->input->post('gajipokok');
			$tunjangan = $this->input->post('tunjangan');

			$this->m_hitung->simpan_edit_golongan($oldgolongan, $golongan, $gajipokok, $tunjangan);
			redirect('c_hitung/view_golongan');
		}
		function hapus_data_golongan($golongan)
		{
			$this->m_hitung->hapus_data_golongan($golongan);
			redirect('c_hitung/view_golongan');
		}

		//Data Karyawan
		function view_karyawan()
		{
			$data['karyawan'] = $this->m_hitung->ambil_karyawan();
			$this->load->view('header');
			$this->load->view('karyawan/dashboard', $data);
			$this->load->view('footer');
		}
		function tambah_karyawan()
		{
			$data['golongan'] = $this->m_hitung->golongan();
			$this->load->view('header');
			$this->load->view('karyawan/tambah_data', $data);
			$this->load->view('footer');
		}
		function simpan_data_karyawan()
		{
			$namakaryawan = $this->input->post('namakaryawan');
			$jeniskelamin = $this->input->post('jeniskelamin');
			$alamat = $this->input->post('alamat');
			$tgllahir = $this->input->post('tgllahir');
			$golongan = $this->input->post('golongan');
			$status = $this->input->post('status');

			$this->m_hitung->simpan_data_karyawan($namakaryawan, $jeniskelamin, $alamat, $tgllahir, $golongan, $status);
			redirect('c_hitung/view_karyawan');
		}
		function edit_data_karyawan($idkaryawan)
		{
			$data['karyawan'] = $this->m_hitung->get_where_karyawan($idkaryawan);
			$data['golongan'] = $this->m_hitung->golongan();
			$this->load->view('header');
			$this->load->view('karyawan/edit_data', $data);
			$this->load->view('footer');
		}
		function simpan_update_karyawan()
		{
			$idkaryawan = $this->input->post('idkaryawan');
			$namakaryawan = $this->input->post('namakaryawan');
			$jeniskelamin = $this->input->post('jeniskelamin');
			$alamat = $this->input->post('alamat');
			$tgllahir = $this->input->post('tgllahir');
			$golongan = $this->input->post('golongan');
			$status = $this->input->post('status');

			$this->m_hitung->simpan_edit_karyawan($idkaryawan, $namakaryawan, $jeniskelamin, $alamat, $tgllahir, $golongan, $status);
			redirect('c_hitung/view_karyawan');
		}
		function hapus_data_karyawan($idkaryawan)
		{
			$this->m_hitung->hapus_data_karyawan($idkaryawan);
			redirect('c_hitung/view_karyawan');
		}

		//Data Transaksi
		function view_transaksi()
		{
			$data['transaksi'] = $this->m_hitung->ambil_transaksi();
			$this->load->view('header');
			$this->load->view('transaksi/dashboard', $data);
			$this->load->view('footer');
		}

		function tambah_transaksi()
		{
			$data['karyawan'] = $this->m_hitung->idkaryawan();
			$this->load->view('header');
			$this->load->view('transaksi/tambah_data', $data);
			$this->load->view('footer');
		}

		function simpan_data_transaksi()
		{
			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
			$idkaryawan = $this->input->post('idkaryawan');
			$lembur = $this->input->post('lembur');
			$transport = $this->input->post('transport');

			$pokok_tunjangan = $this->m_hitung->gaji_pokok_tunjangan($idkaryawan);
			$gajitotal = $pokok_tunjangan['gajipokok'] + $pokok_tunjangan['tunjangan'] + $lembur + $transport;

			$this->m_hitung->simpan_data_transaksi($bulan, $tahun, $idkaryawan, $lembur, $transport, $gajitotal);
			redirect('c_hitung/view_transaksi');
		}
		function edit_data_transaksi($idtransaksi)
		{
			$data['transaksi'] = $this->m_hitung->get_where_transaksi($idtransaksi);
			$data['karyawan'] = $this->m_hitung->idkaryawan();
			$this->load->view('header');
			$this->load->view('transaksi/edit_data', $data);
			$this->load->view('footer');
		}
		function simpan_update_transaksi()
		{
			$idtransaksi = $this->input->post('idtransaksi');
			$bulan = $this->input->post('bulan');
			$tahun = $this->input->post('tahun');
			$idkaryawan = $this->input->post('idkaryawan');
			$lembur = $this->input->post('lembur');
			$transport = $this->input->post('transport');

			$pokok_tunjangan = $this->m_hitung->gaji_pokok_tunjangan($idkaryawan);
			$gajitotal = $pokok_tunjangan['gajipokok'] + $pokok_tunjangan['tunjangan'] + $lembur + $transport;

			$this->m_hitung->simpan_edit_transaksi($idtransaksi, $bulan, $tahun, $idkaryawan, $lembur, $transport, $gajitotal);
			redirect('c_hitung/view_transaksi');
		}
		function hapus_data_transaksi($idtransaksi)
		{
			$this->m_hitung->hapus_data_transaksi($idtransaksi);
			redirect('c_hitung/view_transaksi');
		}

	}

?>