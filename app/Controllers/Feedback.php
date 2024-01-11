<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class Feedback extends BaseController
{
    public function index()
    {
        return view('feedback_form');
    }

    public function submitFeedback()
    {
        $feedbackModel = new FeedbackModel();

        $data = [
            'rating' => $this->request->getPost('rating'),
            'message' => $this->request->getPost('message'),
        ];

        $feedbackModel->insert($data);

        // Tambahkan respons atau redireksi sesuai kebutuhan Anda
        return redirect()->to(base_url());
    }
}