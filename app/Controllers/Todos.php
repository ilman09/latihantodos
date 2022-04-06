<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\todosModel;

class Todos extends ResourceController
{
    public function __construct() {
        $this->todosModel = new todosModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $todos = $this->todosModel->findAll();

        $payload = [
            "todos" => $todos
        ];

        echo view('todos/index', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('todos/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $payload = [
            "title" => $this->request->getPost('title'),
            "description" => $this->request->getPost('description'),
            "finished_at" => $this->request->getPost('finished_at'),
        ];


        $this->TodoModel->insert($payload);
        return redirect()->to('/todos');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $todo = $this->TodoModel->find($id);
        
        if (!$todo) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('todos/edit', ["data" => $todos]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $payload = [
            "title" => $this->request->getPost('title'),
            "description" => $this->request->getPost('description'),
            "finished_at" => $this->request->getPost('finished_at'),
            "deleted_at" => $this->request->getPost('deleted_at'),
            "updated_at" => $this->request->getPost('updated_at'),
            "created_at" => $this->request->getPost('created_at'),
        ];

        $this->TodosModel->update($id, $payload);
        return redirect()->to('/todos');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->todosModel->delete($id);
        return redirect()->to('/todos');
    }
}
