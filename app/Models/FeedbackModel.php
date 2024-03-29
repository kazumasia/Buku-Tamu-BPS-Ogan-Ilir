<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table = 'feedback';
    protected $primaryKey = 'id'; // Ganti dengan primary key yang sesuai

    protected $allowedFields = ['rating', 'message', 'created_at'];
    public function getAllData()
    {
        return $this->findAll();
    }
    public function getPengunjungById($id)
    {
        return $this->find($id);
    }
}