<?php
/**
 * Product
 * 
 * @Entity
 * @Table(name="product")
 */
class Product
{
    /**
     * @Id
     * @Column(type="integer", name="id")
     * @GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @Column(type="string", name="name")
     */
    protected $name;
    
    /**
     * @ManyToOne(targetEntity="Category")
     * @JoinColumn(name="categoryId", referencedColumnName="id")
     */
    protected $category;
    
    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    
    public function getCategory() {
        return $this->category;
    }
    public function setCategory($category) {
        $this->category = $category;
    }
}