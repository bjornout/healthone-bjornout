<?php
class Review
{
    public $id;
    public $name;
    public $product_id;
    public $content;
    public $rating;
    public $submit_date;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->product_id, 'integer');
        settype($this->rating, 'integer');
        settype($this->submit_date, 'integer');
    }
}