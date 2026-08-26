<?php
$page_title = "Блог";
$header_style = "page-title-bg-gray";
include_once('page-title.php');

// --- Начало логики каталога ---

// 1. Конфигурация пагинации
$items_per_page = 10; 

$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) $current_page = 1;

// 2. Генерация тестовых данных
$all_items = [];
for ($i = 1; $i <= 50; $i++) { 
    $all_items[] = [
        'id' => $i,
        'title' => "Заголовок записи №{$i}",
        'excerpt' => "Краткое описание для записи №{$i}.",
        'image' => "https://via.placeholder.com/300x200?text=Image+{$i}",
        'link' => "article.php?id={$i}"
    ];
}

$total_items = count($all_items);
$total_pages = ceil($total_items / $items_per_page);
$start_index = ($current_page - 1) * $items_per_page;
$current_items = array_slice($all_items, $start_index, $items_per_page);

// --- Конец логики каталога ---

// Вывод каталога
echo '<section class="catalog-section">';
echo '<div class="container">';

echo '<div class="catalog-wrap">';
echo '<div class="catalog-grid">';

if (!empty($current_items)) {
    // Используем list($index, $item) чтобы получить ключ (индекс) внутри цикла
    foreach ($current_items as $index => $item) {
        
        // Определяем путь к картинке в зависимости от четности индекса
        // Если индекс четный (0, 2, 4...) - blog-photo.jpg
        // Если индекс нечетный (1, 3, 5...) - blog-post.jpg
        $bg_image = ($index % 2 === 0) ? './img/blog-photo.jpg' : './img/blog-post.jpg';
        
        // Добавляем класс для стилизации (опционально, если нужно различать их в CSS)
        $image_class = ($index % 2 === 0) ? 'bg-type-1' : 'bg-type-2';

        echo '<div class="catalog-item">';
        
        // Вставляем картинку. 

        
        echo '<img src="' . htmlspecialchars($bg_image) . '" alt="' . htmlspecialchars($item['title']) . '" class="blog-card-image ' . $image_class . '">';
        
        echo '<div class="catalog-item-content">';
        echo '<h3><a href="' . htmlspecialchars($item['link']) . '">' . htmlspecialchars($item['title']) . '</a></h3>';
        echo '<p>' . htmlspecialchars($item['excerpt']) . '</p>';
        echo '<a href="' . htmlspecialchars($item['link']) . '" class="btn-read-more">Подробнее</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>Записи не найдены.</p>';
}

echo '</div>'; // catalog-grid

// Пагинация
if ($total_pages > 1) {
    echo '<div class="pagination">';
    for ($i = 1; $i <= $total_pages; $i++) {
        $active_class = ($i == $current_page) ? 'active' : '';
        if ($i == $current_page) {
            echo '<span class="pagination-link page-number ' . $active_class . '">' . $i . '</span>';
        } else {
            echo '<a href="?page=' . $i . '" class="pagination-link page-number ' . $active_class . '">' . $i . '</a>';
        }
    }
    echo '</div>'; 
}

echo '</div>'; // catalog-wrap
echo '</div>'; // container
echo '</section>';

include_once('modal.php');
include_once('mobile_menu.php');
include_once('navbar_light.php');
include_once('cta.php');
include_once('footer.php');
?>