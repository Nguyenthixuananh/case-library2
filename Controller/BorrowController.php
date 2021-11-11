<?php

include_once "Model/BorrowModel.php";

class BorrowController
{
    private $borrowModel;

    public function __construct()
    {
        $this->borrowModel = new BorrowModel();
    }

    public function index()
    {
        $borrowes = $this->borrowModel->getAll();
        include_once "View/borrow/list.php";
    }

    public function showDetail($id)
    {
        $borrow = $this->borrowModel->getById($id);
        include_once "View/home/detail.php";
    }


    public function showFormCreate()
    {
        // lay het types
        $borrowes = $this->borrowModel->getAll();
        include_once "View/borrow/create.php";
    }

    public function create($data)
    {
        $data2 = [
            "book_id" => $data['book_id'],
            "dateStart" => $data['dateStart'],
            "datFinish" => $data['datFinish'],
        ];

        $this->borrowModel->create($data2);

        header("location:index.php?page=borrow-list");
    }

//    public function create($data)
//    {
//        $data2 = [
//            "name" => $data['name']
//        ];
//        $this->categoryModel->create($data2);
//        header("location:index.php?page=category-list");
//    }
//
//    public function deleteCategory($id)
//    {
//        if ($this->categoryModel->getById($id) !== null) {
//            $this->categoryModel->delete($id);
//            header("location:index.php?page=category-list");
//        }
//    }
//
//    public function showDetail($id)
//    {
//        $book = $this->categoryModel->getById($id);
//        include_once "View/category/detail.php";
//    }
//
//    public function showFormUpdate()
//    {
//        $id = $_REQUEST["id"];
//        $category = $this->categoryModel->getById($id);
//        include_once "View/category/update.php";
//    }
//
//    public function editCategory($id, $request)
//    {
//        $category = $this->categoryModel->getById($id);
//        $data = [
//            "name" => $request['name'],
//            "id" => $id
//        ];
//        $this->categoryModel->edit($data);
//        header("location:index.php?page=category-list");
//    }
//

    }
