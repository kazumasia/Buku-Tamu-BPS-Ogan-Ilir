<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = 'visitors';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'jenis_kelamin', 'pekerjaan', 'lainnyaDataPekerjaan', 'email', 'keperluan', 'lainnyaDataKeperluan', 'no_telp', 'status', 'created_at'];

    public function getOngoingVisitors()
    {
        return $this->where('status', 'ongoing')->findAll();
    }

    public function completeVisit($visitId)
    {
        return $this->update($visitId, ['status' => 'completed']);
    }
}