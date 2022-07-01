<?php
include_once 'db.php';

class ProductModel
{
    private $__db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function getProducts()
    {
        $connexion = $this->db->connexion();
        $result = $connexion->query("SELECT * FROM products");
        $products = $result->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    public function getProductsBySize($size)
    {

        $connexion = $this->db->connexion();
        $result = $connexion->query("SELECT * FROM products WHERE size = $size");
        $products = $result->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
    public function getProductsByCategory($category)
    {

        $connexion = $this->db->connexion();
        $result = $connexion->query("SELECT * FROM products WHERE category = '$category'");
        $products = $result->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }
    public function getProductsByColor($color)
    {

        $connexion = $this->db->connexion();
        $result = $connexion->query("SELECT * FROM products WHERE color = $color");
        $products = $result->fetchAll(PDO::FETCH_ASSOC);
        return $products;
    }

    public function addProduct($name, $description, $price, $size, $category, $color)
    {
        $connexion = $this->db->connexion();
        $connexion->query("INSERT INTO post (name, description, price, size,category,color) VALUES ('$name', '$description', '$price', '$size','$category','$color')");
    }

    public function getSpecificProduct($id)
    {
        $connexion = $this->db->connexion();
        $result = $connexion->query("SELECT * FROM products WHERE id = " . $id);
        $product = $result->fetch(PDO::FETCH_ASSOC);
        return $product;
    }

    public function deleteProduct($id)
    {
        $connexion = $this->db->connexion();
        $connexion->query("DELETE FROM products WHERE id = " . $id);
    }
}