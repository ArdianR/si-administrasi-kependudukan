<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('fpdf/fpdf');

		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(40,10,'Hello World!');
		$pdf->Output();
		//$this->load->view('welcome_message');
	}

	$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('template1.docx');

$templateProcessor->setValue('nama_kaling', 'meong');
$templateProcessor->setValue('tgl_surat_kelahiran', 'tgl meong');
$templateProcessor->setValue('no_kelahiran', 'no meong');

$templateProcessor->saveAs('hasil.docx');
}
