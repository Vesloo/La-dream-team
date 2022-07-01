<?php
include_once 'model/product.model.php';

class PostController
{
    private $__post;

    public function getProducts()
    {
        $this->post = new ProductModel();
        $product = $this->post->getProducts();

        return $product;
    }

    public function getSpecificProduct($id)
    {
        $this->product = new ProductModel();
        $product = $this->product->getSpecificProduct($id);

        return $product;
    }

    public function addProduct()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];

        $this->post = new ProductModel();
        $this->post->addProduct($title, $content);
    }

    public function deletePost($id)
    {
        $this->post = new ProductModel();
        $this->post->deletePost($id);
    }
}