<?php

namespace App\Controllers;

use App\Models\FeedbackModel;
use App\Models\PostModel;
use CodeIgniter\API\ResponseTrait;
use App\Models\ExportModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;



class PostController extends BaseController
{
    protected $PostModel; // Tambahkan properti model
    protected $FeedbackModel; // Add this property to hold an instance of FeedbackModel

    public function __construct()
    {
        $this->PostModel = new PostModel(); // Muat model di konstruktor
        $this->FeedbackModel = new FeedbackModel(); // Muat model di konstruktor

    }
    public function exportFeedbackToExcel()
    {
        // Fetch data from your model (adjust the following line based on your actual implementation)
        $data = $this->FeedbackModel->getAllData();

        // Generate Excel file
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Add data to the sheet (adjust the following lines based on your actual data structure)
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Rating');
        $sheet->setCellValue('C1', 'Alasan');
        $sheet->setCellValue('D1', 'Tanggal');

        $row = 2;
        foreach ($data as $item) {
            $rating = isset($item['rating']) ? $item['rating'] : '';
            $alasan = isset($item['alasan']) ? $item['message'] : '';
            $tanggal = isset($item['tanggal']) ? $item['created_at'] : '';

            $sheet->setCellValue('A' . $row, $row - 1);
            $sheet->setCellValue('B' . $row, $rating);
            $sheet->setCellValue('C' . $row, $alasan);
            $sheet->setCellValue('D' . $row, $tanggal);
            $row++;
        }

        // Create Excel file
        $filename = 'FeedbackData.xlsx';
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($filename);

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        readfile($filename);

        // Remove the file after sending
        unlink($filename);
        exit();
    }

    public function exportFeedback()
    {
        $data = $this->FeedbackModel->getAllData();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Table Feedback');

        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Rating');
        $sheet->setCellValue('C1', 'Alasan');
        $sheet->setCellValue('D1', 'Tanggal');

        $i = 2;
        foreach ($data as $row) {
            $sheet->setCellValue('A' . $i, $i - 1);
            $sheet->setCellValue('B' . $i, $row['rating']);
            $sheet->setCellValue('C' . $i, $row['message']);
            $sheet->setCellValue('D' . $i, $row['created_at']);
            $i++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'List-Feedback_BPS-Ogan-ilir.xlsx';
        $writer->save($fileName);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . basename($fileName) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($fileName));
        readfile($fileName);
        exit;
    }

    public function exportToExcel()
    {
        // Fetch data from your model (adjust the following line based on your actual implementation)
        $data = $this->PostModel->getAllData();

        // Generate Excel file
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Add data to the sheet (adjust the following lines based on your actual data structure)
        $sheet->setCellValue('A1', 'Keperluan');
        $sheet->setCellValue('B1', 'Total');

        $row = 2;
        foreach ($data as $item) {
            $keperluan = isset($item['keperluan']) ? $item['keperluan'] : '';
            $total = isset($item['total']) ? $item['total'] : '';

            $sheet->setCellValue('A' . $row, $keperluan);
            $sheet->setCellValue('B' . $row, $total);
            $row++;
        }

        // Create Excel file
        $filename = 'KeperluanData.xlsx';
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xlsx');
        $writer->save($filename);

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-Control: max-age=0');
        readfile($filename);

        // Remove the file after sending
        unlink($filename);
        exit();
    }



    public function export()
    {
        $data = $this->PostModel->getAllData();

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Table pengunjung');

        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama');
        $sheet->setCellValue('C1', 'Jenis Kelamin');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'No. Telepon');
        $sheet->setCellValue('F1', 'Pekerjaan');
        $sheet->setCellValue('G1', 'Keperluan');
        $sheet->setCellValue('H1', 'Waktu Masuk');
        $sheet->setCellValue('I1', 'Waktu Keluar');
        $sheet->setCellValue('J1', 'Status');

        $i = 2;
        foreach ($data as $row) {
            $sheet->setCellValue('A' . $i, $i - 1);
            $sheet->setCellValue('B' . $i, $row['nama']);
            $sheet->setCellValue('C' . $i, $row['jenis_kelamin']);
            $sheet->setCellValue('D' . $i, $row['email']);
            $sheet->setCellValue('E' . $i, $row['no_telp']);
            $sheet->setCellValue('F' . $i, $row['pekerjaan']);
            $sheet->setCellValue('G' . $i, $row['keperluan']);
            $sheet->setCellValue('H' . $i, $row['waktu_masuk']);
            $sheet->setCellValue('I' . $i, $row['waktu_keluar']);
            $sheet->setCellValue('J' . $i, $row['status']);
            $i++;
        }

        $writer = new Xlsx($spreadsheet);
        $fileName = 'List-Tamu_BPS-Ogan-ilir.xlsx';
        $writer->save($fileName);

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="' . basename($fileName) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($fileName));
        readfile($fileName);
        exit;
    }
    public function store()
    {
        // Load the model using the service() method
        $postModel = new PostModel();
        helper('custom_helper');


        // Get current timestamp
        $timestamp = date('Y-m-d H:i:s');

        // Get form data
        // $data = [
        //     'nama' => $this->request->getPost('nama'),
        //     'email' => $this->request->getPost('email'),
        //     'no_telp' => $this->request->getPost('no_telp'),
        //     'pekerjaan' => $this->request->getPost('pekerjaan'),
        //     'keperluan' => $this->request->getPost('keperluan'),
        //     'jenis_data' => $this->request->getPost('jenis_data'),
        //     'created_at' => $timestamp, // Add the timestamp field
        // Add more fields as needed
        $pekerjaan_lainnya = $this->request->getPost('pekerjaan_lainnya');
        $combinedPekerjaan = $pekerjaan_lainnya ? $pekerjaan_lainnya : $this->request->getPost('pekerjaan');


        $keperluan_lainnya = $this->request->getPost('keperluan_lainnya');
        $combinedKeperluan = $keperluan_lainnya ? $keperluan_lainnya : $this->request->getPost('keperluan');


        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'pendidikan' => $this->request->getPost('pendidikan'),
            'no_telp' => $this->request->getPost('no_telp'),
            'pekerjaan' => $combinedPekerjaan,
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'keperluan' => $combinedKeperluan,
            'created_at' => $timestamp,
            'status' => 'ongoing',
            'waktu_masuk' => $timestamp,
        ];





        // Call the model method to insert data into the database


        // Call the model method to insert data into the database
        $postModel->insertData($data);


        $data['pengunjung'] = $postModel->getAllData();
        $keperluan = $this->request->getPost('keperluan');

        $start_time = microtime(true);
        // Perform some operations or calculations here
        $execution_time = elapsed_time($start_time);


        // Periksa nilai keperluan
        if ($keperluan === 'PST') {
            // Jika keperluan adalah PST, arahkan ke halaman "Silahkan Ke PST"
            return redirect()->to('user/wait');
        } else {
            // Jika bukan PST, arahkan ke halaman "Silahkan Menunggu di Ruang Tunggu"
            return redirect()->to('user/bps');
        }


        // You can redirect to another page or load a view here



    }


    public function pst()
    {
        // Tampilkan halaman "Silahkan Ke PST"
        $data['title'] = 'Silahkan Ke PST';
        return view('pst_page', $data);
    }

    public function ruangtunggu()
    {
        // Tampilkan halaman "Silahkan Menunggu di Ruang Tunggu"
        $data['title'] = 'Silahkan Menunggu di Ruang Tunggu';
        return view('ruangtunggu_page', $data);
    }
    public function edit($id)
    {
        // Ambil data pengunjung berdasarkan ID (sesuaikan dengan nama model dan database Anda)
        $data['pengunjung'] = $this->PostModel->find($id);

        // Load view untuk halaman edit
        return view('edit_view', $data);
    }

    public function update()
    {
        // Proses pembaruan data
        $dataToUpdate = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_telp' => $this->request->getPost('no_telp'),
            'pekerjaan' => $this->request->getPost('pekerjaan'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'keperluan' => $this->request->getPost('keperluan'),
            // ... tambahkan kolom lainnya
        ];

        // Panggil method model untuk melakukan update
        $this->PostModel->update($this->request->getPost('id'), $dataToUpdate);

        // Redirect ke halaman index atau halaman lain setelah update
        return redirect()->to('admin/list');
    }
    // PostController.php
    use ResponseTrait;

    // PostController.php
    // public function completeVisit($visitId)
    // {
    //     // Memanggil model
    //     $postModel = new PostModel();

    //     // Memanggil fungsi completeVisit dari model
    //     $success = $postModel->completeVisit($visitId);

    //     if ($success) {
    //         // Update berhasil
    //         echo "Update berhasil!";
    //     } else {
    //         // Update gagal
    //         echo "Update gagal!";
    //     }

    //     // Redirect kembali ke halaman sebelumnya
    //     return redirect()->back();
    // }

    public function completeVisit($visitId)
    {
        // Memanggil model
        $postModel = new PostModel();

        // Memanggil fungsi completeVisit dari model
        $success = $postModel->completeVisit($visitId);

        if ($success) {
            // Update berhasil
            echo "Update berhasil!";
        } else {
            // Update gagal
            echo "Update gagal!";
        }

        // Redirect kembali ke halaman sebelumnya
        return redirect()->back();
    }

    // public function finish_visit($id)
    // {
    //     $start_time = microtime(true);

    //     $postModel = new PostModel();
    //     $postModel->update($id, ['waktu_keluar' => date('Y-m-d H:i:s'), 'status' => 'selesai']);

    //     $end_time = microtime(true);
    //     $execution_time = $end_time - $start_time;

    //     return json_encode(['status' => 'success', 'execution_time' => $execution_time]);
    // }
    public function finish_visit($id)
    {
        echo "ID yang diterima: " . $id; // Tambahkan baris ini untuk memeriksa apakah ID yang diterima valid

        $start_time = microtime(true);

        $postModel = new PostModel();
        $postModel->update($id, ['waktu_keluar' => date('Y-m-d H:i:s'), 'status' => 'selesai']);

        $end_time = microtime(true);
        $execution_time = $end_time - $start_time;

        return json_encode(['status' => 'success', 'execution_time' => $execution_time]);
    }

    public function tanggal()
    {
        $postModel = new PostModel();

        // Use getGet() to retrieve the value of selectedDate
        $selected_date = $this->request->getGet('selected_date');

        // If no date is selected, default to today's date
        $selected_date = $selected_date ? $selected_date : date('Y-m-d');

        // Get ongoing visitors for the selected date
        $data['ongoingVisitors'] = $postModel->getVisitorsByDate($selected_date);
        $data['selected_date'] = $selected_date;

        // Pass the first ongoing visitor to the view
        $data['visitor'] = !empty($data['ongoingVisitors']) ? $data['ongoingVisitors'][0] : null;

        return view('user/index', $data);
    }

    public function filterStats()
    {
        $year = $this->request->getGet('year');
        $data = [
            'keperluanStats' => $this->PostModel->getKeperluanStats($year),
            'genderStats' => $this->PostModel->getGenderStats($year),
            'pekerjaanStats' => $this->PostModel->getPekerjaanStats($year),
            'pendidikanStats' => $this->PostModel->getPendidikanStats($year),
            'jamStats' => $this->PostModel->getJamStats($year),
            'feedbackStats' => $this->PostModel->getFeedbackStats($year),
        ];
        return $this->respond($data);
    }
    public function getKeperluanStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getKeperluanStats($year);
        return $this->response->setJSON($data);
    }


    public function getGenderStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getGenderStats($year);
        return $this->response->setJSON($data);
    }
    public function getPekerjaanStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getPekerjaanStats($year);
        return $this->response->setJSON($data);
    }
    public function getPendidikanStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getPendidikanStats($year);
        return $this->response->setJSON($data);
    }
    public function getTanggalStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getTanggalStats($year);
        return $this->response->setJSON($data);
    }
    public function getBulanStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getBulanStats($year);
        return $this->response->setJSON($data);
    }

    public function getTahunStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getTahunStats($year);
        return $this->response->setJSON($data);
    }
    public function getFeedbackStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getFeedbackStats($year);
        return $this->response->setJSON($data);
    }
    public function getJamStats()
    {
        $year = $this->request->getGet('year'); // Assuming 'year' is the parameter name from the user input
        $data = $this->PostModel->getJamStats($year);
        return $this->response->setJSON($data);
    }


    public function filter()
    {
        $selected_date = $this->request->getPost('selected_date');

        $data['pengunjung'] = $this->PostModel->getVisitorsByDate($selected_date);

        return view('admin/list', $data);
    }
    public function filterRating()
    {
        $selected_date = $this->request->getPost('selected_date');

        $data['pengunjung'] = $this->PostModel->getRatingBydate($selected_date);

        return view('admin/puas', $data);
    }
    public function filterTanggal()
    {
        $selected_date = $this->request->getPost('selected_date');

        $data['ongoingVisitors'] = $this->PostModel->getVisitorsByDate($selected_date);

        return view('user/index', $data);
    }
    public function search()
    {
        $search_query = $this->request->getPost('search_query');

        if ($search_query) {
            $data['pengunjung'] = $this->PostModel->searchVisitors($search_query);
        } else {
            // Load all visitors if no search query is provided
            $data['pengunjung'] = $this->PostModel->getAllVisitors();
        }

        return view('admin/list', $data);
    }
    public function Ratings()
    {
        $search_query = $this->request->getPost('search_query');

        if ($search_query) {
            $data['pengunjung'] = $this->PostModel->searchRatings($search_query);
        } else {
            // Load all visitors if no search query is provided
            $data['pengunjung'] = $this->PostModel->getAllRating();
        }

        return view('admin/puas', $data);
    }

    public function cari()
    {
        $search_query = $this->request->getPost('search_query');

        if ($search_query) {
            $data['ongoingVisitors'] = $this->PostModel->cariVisitor($search_query);
        } else {
            // Load all visitors if no search query is provided
            $data['ongoingVisitors'] = $this->PostModel->getAllVisitors();
        }

        return view('user/index', $data);
    }




}
