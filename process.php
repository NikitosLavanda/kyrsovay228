<?php

// Класс, представляющий проект
class Project {
    private $name;
    private $startDate;
    private $endDate;
    
    public function __construct($name, $startDate, $endDate) {
        $this->name = $name;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function getStartDate() {
        return $this->startDate;
    }
    
    public function getEndDate() {
        return $this->endDate;
    }
}

// Класс, отвечающий за создание проектов
class ProjectManager {
    // Метод для создания нового проекта
    public function createProject($name, $startDate, $endDate) {
        // Логика создания проекта
        
        // Создание экземпляра класса Project
        $project = new Project($name, $startDate, $endDate);
        
        // Дополнительные действия, такие как сохранение проекта в базе данных, отправка уведомлений и т. д.
        
        // Возвращаем созданный проект
        return $project;
    }
}

// Пример использования

// Создаем экземпляр класса ProjectManager
$manager = new ProjectManager();

// Создаем новый проект
$project = $manager->createProject("Проект 1", "2022-01-01", "2022-12-31");

// Выводим информацию о проекте
echo "Название проекта: " . $project->getName() . "<br>";
echo "Дата начала проекта: " . $project->getStartDate() . "<br>";
echo "Дата окончания проекта: " . $project->getEndDate() . "<br>";

?>
