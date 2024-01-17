<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'pengunjung';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;


    protected $allowedFields = ['nama', 'email', 'jenis_kelamin', 'no_telp', 'pekerjaan', 'keperluan', 'created_at', 'waktu_masuk', 'waktu_keluar'];

    // Add this method to fetch all data
    public function getAllData()
    {
        return $this->findAll();
    }

    public function insertData($data)
    {
        $this->db->table($this->table)->insert($data);
    }
    public function edit($id)
    {
        $data['pengunjung'] = $this->yourModel->find($id);

        // Load view untuk halaman edit
        return view('edit', $data);
    }
    public function getOngoingVisitors()
    {
        return $this->whereIn('status', ['ongoing', 'selesai'])->findAll();

    }
    public function update($id = null, $data = null): bool
    {
        if ($id === null || $data === null) {
            return false;
        }

        $builder = $this->db->table($this->table);
        $builder->where('id', $id);
        $builder->update($data);

        return $this->db->affectedRows() > 0;
    }

    // public function completeVisit($visitId)
    // {
    //     // Get the visit data by ID
    //     $visit = $this->find($visitId);

    //     if ($visit) {
    //         // Mark the visit as completed
    //         $data = [
    //             'status' => 'completed',
    //             'completed_at' => date('Y-m-d H:i:s'),
    //             'waktu_keluar' => date('Y-m-d H:i:s'),
    //         ];

    //         // Update the visit record
    //         $queryResult = $this->protect(false)->update($visitId, $data);
    //         $lastQuery = $this->getLastQuery();

    //         echo "Last Query: " . $lastQuery . "<br>";
    //         if ($queryResult) {
    //             return true; // Update successful
    //         } else {
    //             return false; // Update failed
    //         }
    //     }
    // }

    public function completeVisit($visitId)
    {
        // Get the visit data by ID
        $visit = $this->find($visitId);

        if ($visit && $visit['status'] === 'ongoing') {
            // Mark the visit as completed
            $data = [
                'status' => 'completed',
                'completed_at' => date('Y-m-d H:i:s'),
                'waktu_keluar' => date('Y-m-d H:i:s'),
            ];

            // Update the visit record
            $this->protect(false)->update($visitId, $data);

            return true; // Update successful
        } else {
            return false; // No data found for the given ID or already completed
        }
    }




    public function getOngoingVisitorsByDate($selectedDate)
    {
        return $this->whereIn('status', ['ongoing'])
            ->where('DATE(created_at)', $selectedDate)
            ->orderBy('created_at', 'asc')
            ->findAll();
    }

    // app/Models/PostModel.php

    public function getKeperluanStats($year = null)
    {
        $builder = $this->db->table('pengunjung');
        $builder->select('keperluan, COUNT(keperluan) as total');
        $builder->groupBy('keperluan');

        if ($year) {
            $builder->where("YEAR(waktu_masuk)", $year);
        }

        $query = $builder->get();
        return $query->getResultArray();
    }


    public function getGenderStats($year = null)
    {
        $builder = $this->db->table('pengunjung');
        $builder->select('jenis_kelamin, COUNT(jenis_kelamin) as total');
        $builder->groupBy('jenis_kelamin');
        if ($year) {
            $builder->where("YEAR(waktu_masuk)", $year);
        }

        $query = $builder->get();
        return $query->getResultArray();
    }
    public function getPekerjaanStats($year = null)
    {
        $builder = $this->db->table('pengunjung');
        $builder->select('pekerjaan, COUNT(pekerjaan) as total');
        $builder->groupBy('pekerjaan');
        if ($year) {
            $builder->where('YEAR(waktu_masuk)', $year);
        }
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function getPendidikanStats($year = null)
    {
        $builder = $this->db->table('pengunjung');
        $builder->select('pendidikan, COUNT(pendidikan) as total');
        $builder->groupBy('pendidikan');
        if ($year) {
            $builder->where('YEAR(waktu_masuk)', $year);
        }
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function getTanggalStats($year = null)
    {
        $builder = $this->db->table('pengunjung');
        $builder->select('DATE(waktu_masuk) as waktu_masuk, COUNT(waktu_masuk) as total');
        $builder->groupBy('DATE(waktu_masuk)');
        if ($year) {
            $builder->where('YEAR(created_at)', $year);
        }
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function getBulanStats($year = null)
    {
        $builder = $this->db->table('pengunjung');
        $builder->select('DATE_FORMAT(waktu_masuk, "%Y-%m") as waktu_masuk_month, COUNT(waktu_masuk) as total');
        $builder->groupBy('waktu_masuk_month');
        $builder->orderBy('waktu_masuk_month', 'ASC'); // Optional: Order by month ascending
        if ($year) {
            $builder->where('YEAR(waktu_masuk)', $year);
        }
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function getTahunStats($year = null)
    {
        $builder = $this->db->table('pengunjung');
        $builder->select('YEAR(waktu_masuk) as waktu_masuk_tahun, COUNT(waktu_masuk) as total');
        $builder->groupBy('waktu_masuk_tahun');
        $builder->orderBy('waktu_masuk_tahun', 'ASC'); // Optional: Order by month ascending
        if ($year) {
            $builder->where('YEAR(waktu_masuk)', $year);
        }
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function getFeedbackStats($year = null)
    {
        $builder = $this->db->table('feedback');
        $builder->select('rating, COUNT(rating) as total');
        $builder->groupBy('rating');
        if ($year) {
            $builder->where('YEAR(created_at)', $year);
        }
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function getJamStats($year = null)
    {
        $builder = $this->db->table('pengunjung');
        $builder->select('DATE(waktu_masuk) as tanggal, SUM(TIMESTAMPDIFF(SECOND, waktu_masuk, waktu_keluar)) / 3600 as total');
        $builder->select('COUNT(waktu_masuk) as jumlah_pengunjung');
        $builder->select('AVG(TIMESTAMPDIFF(SECOND, waktu_masuk, waktu_keluar)) / 3600 as rata_rata_jam');
        $builder->groupBy('tanggal');
        $builder->orderBy('tanggal', 'ASC');
        if ($year) {
            $builder->where('YEAR(waktu_masuk)', $year);
        }
        $query = $builder->get();

        return $query->getResultArray();
    }

    public function getVisitorsByDate($selected_date)
    {
        return $this->db->table('pengunjung')
            ->where('DATE(waktu_masuk)', $selected_date)
            ->get()
            ->getResultArray();
    }
    public function getRatingBydate($selected_date)
    {
        return $this->db->table('feedback')
            ->where('DATE(created_at)', $selected_date)
            ->get()
            ->getResultArray();
    }
    public function getAllVisitors($start_date = null, $end_date = null)
    {
        $builder = $this->db->table('pengunjung');

        if ($start_date && $end_date) {
            $builder->where('waktu_masuk >=', $start_date)
                ->where('waktu_keluar <=', $end_date);
        }

        return $builder->get()->getResultArray();
    }
    public function getAllRating($start_date = null)
    {
        $builder = $this->db->table('feedback');

        if ($start_date) {
            $builder->where('created_at >=', $start_date);
        }

        return $builder->get()->getResultArray();
    }
    public function searchVisitors($search_query)
    {
        return $this->db->table('pengunjung')
            ->like('nama', $search_query)
            ->orLike('email', $search_query)
            ->orLike('jenis_kelamin', $search_query)
            ->orLike('no_telp', $search_query)
            ->orLike('pekerjaan', $search_query)
            ->orLike('keperluan', $search_query)
            ->orLike('waktu_masuk', $search_query)
            ->orLike('waktu_keluar', $search_query)
            ->orLike('status', $search_query)
            // Add more fields as needed
            ->get()
            ->getResultArray();
    }
    public function searchRatings($search_query)
    {
        $query = $this->db->table('feedback');

        if ($search_query === 'puas' || $search_query === 'tidakpuas') {
            $query->where('rating', $search_query);
        } else {
            $query->like('rating', $search_query)
                ->orLike('message', $search_query)
                ->orLike('created_at', $search_query);
            // Add more fields as needed
        }

        return $query->get()->getResultArray();
    }


    public function cariVisitor($search_query)
    {
        return $this->db->table('pengunjung')
            ->like('nama', $search_query)
            ->orLike('email', $search_query)
            ->orLike('jenis_kelamin', $search_query)
            ->orLike('no_telp', $search_query)
            ->orLike('pekerjaan', $search_query)
            ->orLike('keperluan', $search_query)
            ->orLike('waktu_masuk', $search_query)
            ->orLike('waktu_keluar', $search_query)
            ->orLike('status', $search_query)
            // Add more fields as needed
            ->get()
            ->getResultArray();
    }


}