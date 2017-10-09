<?php
/**
 *
 * @Entity
 * @Table(name="category")
 */
class Category
{
    /**
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     * @Column(type="integer", name="id")
     */
    protected $id;
 
    /**
     * @Column(type="string", name="name")
     */
    protected $name;
 
    public function getId()
    {
        return $this->id;
    }
 
    public function getName()
    {
        return $this->name;
    }
 
    public function setName($name)
    {
        $this->name = $name;
    }
 
}
