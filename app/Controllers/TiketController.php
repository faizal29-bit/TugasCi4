<?php

namespace App\Controllers;

use App\Models\TiketModel;
use CodeIgniter\Controller;

class TiketController extends Controller
{
    public function index()
    {
        $model = new TiketModel();
        $data['tiket'] = $model->findAll();
        return view('pages/index', $data);
    }

    public function create()
    {
        return view('pages/create');
    }

    public function store()
    {
        $model = new TiketModel();
        $data  = [
            'nama'    => $this->request->getPost('nama'),
            'asal'    => $this->request->getPost('asal'),
            'tujuan'  => $this->request->getPost('tujuan'),
            'harga'   => $this->request->getPost('harga')
        ];

        $model->insert($data);
        return redirect()->to('/pages');
    }

    public function edit($id)
    {
        $model = new TiketModel();
        $data['tiket'] = $model->find($id);
        return view('pages/edit', $data);
    }

    public function update($id)
    {
        $model = new TiketModel();
        $data  = [
            'nama'    => $this->request->getPost('nama'),
            'asal'    => $this->request->getPost('asal'),
            'tujuan'  => $this->request->getPost('tujuan'),
            'harga'   => $this->request->getPost('harga')
        ];

        $model->update($id, $data);
        return redirect()->to('/pages');
    }

    public function delete($id)
    {
        $model = new TiketModel();

        // Cek apakah data dengan ID tersebut ada
        $tiket = $model->find($id);
        if (!$tiket) {
            // Jika tidak ditemukan, tampilkan 404
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Tiket dengan ID $id tidak ditemukan.");
        }

        // Hapus data
        $model->delete($id);

        // Redirect dengan pesan sukses (opsional, jika pakai session flashdata)
        return redirect()->to('/pages')->with('message', 'Tiket berhasil dihapus.');
    }


    public function search()
    {
        $model = new TiketModel();
        $searchTerm = trim($this->request->getGet('search'));
        $data = [
            'tiket' => [],
            'message' => ''
        ];

        if (!empty($searchTerm)) {
            $data['tiket'] = $model->like('nama', $searchTerm)
                ->orLike('asal', $searchTerm)
                ->orLike('tujuan', $searchTerm)
                ->orLike('harga', $searchTerm)
                ->findAll();

            if (empty($data['tiket'])) {
                $data['message'] = 'Tiket tidak ditemukan.';
            }
        } else {
            $data['message'] = 'Masukkan kata kunci pencarian.';
        }

        return view('pages/searchResults', $data);
    }
}
