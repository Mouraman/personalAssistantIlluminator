<?php

namespace App\Core\Model;

class ChatbotModel
{

    private $id;
    private $name;
    private $description;

    public function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * Obtém o ID do chatbot.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Define o ID do chatbot.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Obtém o nome do chatbot.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Define o nome do chatbot.
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Obtém a descrição do chatbot.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Define a descrição do chatbot.
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

}