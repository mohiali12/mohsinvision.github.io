<?php
// Sample project data - in a real application, this would come from a database
$projects = [
    [
        'id' => 1,
        'title' => 'Plant Disease Detection System',
        'category' => 'web','ml',
        'image' => 'assets\images\Plant-Disease-Concept.jpg',
        'description' => 'The "Plant Disease Detection System using Deep Learning" is a web-based application that uses an EfficientNetV2 CNN model to automatically identify and classify diseases in leaves from uploaded images with high accuracy.
',
        'technologies' => ['Python','TensorFlow','Numpy','Pandas','Matplotlib','Scikit-learn','OpenCV','PyTorch','CNN (Convolutional Neural Network)', 'Image Preprocessing', 'HTML', 'CSS', 'JavaScript']
    ],
  
    [
        'id' => 3,
        'title' => 'ImunoNest',
        'category' => 'web',
        'image' => 'assets\images\Polio-drive1-1024x576.jpeg',
        'description' => 'ImunoNest is a web-based vaccination management system built with Laravel and MySQL that enables users to register with verification, schedule vaccinations, access digital vaccine cards, locate clinics, and receive automated reminders.
',
        'technologies' => ['HTML5','CSS3','JavaScript','Laravel (PHP Framework)', 'MySQL Database','NADRA Verification Integration','Email & SMS Notifications','Bootstrap Framework']
    ],
    [
        'id' => 4,
        'title' => 'Fake News Detection System',
        'category' => '',
        'image' => 'assets\images\concept-fake-news.jpg',
        'description' => 'An LSTM-based deep learning system that classifies news headlines as real or fake with high accuracy using natural language processing techniques',
        'technologies' => ['Python','Pandas','Numpy','TensorFlow','NLP','Neural Network Architecture','LSTM','scikit-learn']
    ],
    [
        'id' => 5,
        'title' => 'University Management System',
        'category' => 'web',
        'image' => 'assets\images\depositphotos_526437488-stock-photo-hand-white-line-graduation-cap.jpg',
        'description' => 'A modern, responsive web-based university management system built with HTML, CSS, JavaScript, PHP, and MySQL. This system provides authentication, student dashboard, and database management for Iqra University.',
        'technologies' => ['HTML5','CSS3','JavaScript','Laravel (PHP Framework)', 'MySQL Database','Bootstrap Framework']
    ]
];

// Display projects
foreach ($projects as $project) {
    echo '<div class="project-item" data-category="' . $project['category'] . '">';
    echo '<div class="project-image">';
    echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '">';
    echo '<div class="project-overlay">';
    echo '<div class="project-links">';
    // Add GitHub links for projects
    if ($project['id'] == 1) {
        echo '<a href="https://github.com/mohiali12/Plant_Disease_Detection" target="_blank" class="project-btn"><i class="fab fa-github"></i> Code</a>';
    } else if ($project['id'] == 3) {
        echo '<a href="https://github.com/mohiali12/Vaccine-management-system" target="_blank" class="project-btn"><i class="fab fa-github"></i> Code</a>';
    } else if ($project['id'] == 5) {
        echo '<a href="https://github.com/mohiali12/University-Management-System" target="_blank" class="project-btn"><i class="fab fa-github"></i> Code</a>';
    } else {
        echo '<a href="#" class="project-btn"><i class="fab fa-github"></i> Code</a>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="project-info">';
    echo '<h3>' . $project['title'] . '</h3>';
    echo '<p>' . $project['description'] . '</p>';
    echo '<div class="project-tech">';
    foreach ($project['technologies'] as $tech) {
        echo '<span class="tech-tag">' . $tech . '</span>';
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>