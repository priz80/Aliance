<?php
$page_title = "Блог";
$header_style = "page-title-bg-gray";
include_once('page-title.php');

// --- Начало логики каталога ---

// 1. Конфигурация пагинации
// Вы просили: два блока в ряд, максимум пять рядов.
// Итого на странице: 2 * 5 = 10 блоков.
$items_per_page = 10; 

$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) $current_page = 1;

// 2. Генерация тестовых данных (В реальности замените на запрос к БД)
$all_items = [];
// Увеличим количество тестовых данных для демонстрации пагинации
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

// 3. Вычисляем начальный индекс
$start_index = ($current_page - 1) * $items_per_page;

// 4. Получаем срез данных
$current_items = array_slice($all_items, $start_index, $items_per_page);

// --- Конец логики каталога ---

// Вывод каталога
echo '<section class="catalog-section">';
echo '<div class="container">';
/* echo '<h2 class="catalog-title">Каталог</h2>'; */

// Обертка для сетки и пагинации, чтобы они были в одной линии
echo '<div class="catalog-wrap">';
echo '<div class="catalog-grid">';

if (!empty($current_items)) {
    foreach ($current_items as $item) {
        echo '<div class="catalog-item">';
        echo '<img src="' . htmlspecialchars($item['image']) . '" alt="' . htmlspecialchars($item['title']) . '">';
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

echo '</div>'; // Закрытие catalog-grid

// Пагинация
if ($total_pages > 1) {
    echo '<div class="pagination">';
    // Номера страниц
    for ($i = 1; $i <= $total_pages; $i++) {
        $active_class = ($i == $current_page) ? 'active' : '';
        if ($i == $current_page) {
            // Небольшое отступаем друг от друга для эффекта "квадратиков"
            echo '<span class="pagination-link page-number ' . $active_class . '">' . $i . '</span>';
        } else {
            echo '<a href="?page=' . $i . '" class="pagination-link page-number ' . $active_class . '">' . $i . '</a>';
        }
    }
    echo '</div>'; // Закрытие pagination
}

echo '</div>'; // Закрытие catalog-wrap
echo '</div>'; // Закрытие container
echo '</section>';

include_once('modal.php');
include_once('mobile_menu.php');
include_once('navbar_light.php');
include_once('cta.php');
include_once('footer.php');
?>