<?php
include_once 'model/product.model.php';

class ProductController
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
    public function getProductsBySize($id)
    {
        $this->product = new ProductModel();
        $product = $this->product->getProductsBySize($id);

        return $product;
    }

    public function getProductsByCategory($id)
    {
        $this->product = new ProductModel();
        $product = $this->product->getProductsByCategory($id);

        return $product;
    }
    public function getProductsByColor($id)
    {
        $this->product = new ProductModel();
        $product = $this->product->getProductsByColor($id);

        return $product;
    }

    public function addProduct()
    {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $size = $_POST['size'];
        $category = $_POST['category'];
        $color = $_POST['color'];

        $this->post = new ProductModel();
        $this->post->addProduct($name, $description, $price, $size, $category, $color);
    }

    public function deleteProduct($id)
    {
        $this->post = new ProductModel();
        $this->post->deleteProduct($id);
    }
}