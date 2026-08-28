<?php
// 1. Получаем ID из адресной строки (например, blog_more.php?id=10)
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
// 2. Валидация: если ID не задан или не является числом, перенаправляем на главную или блог
if ($id <= 0) {
    header("Location: blog.php");
    exit;
}

// 3. (Опционально) Проверка существования записи в базе данных или массиве
// Для примера с тестовыми данными:
$all_items = [];
for ($i = 1; $i <= 50; $i++) { 
    $all_items[$i] = [
        'title' => "Заголовок записи №{$i}",
        'excerpt' => "Краткое описание для записи №{$i}.",
        // здесь можно добавить полный текст статьи
    ];
}

// Если запись не найдена, тоже можно перенаправить или показать 404
if (!isset($all_items[$id])) {
    header("Location: blog.php");
    exit;
}

// Теперь можно использовать данные
$page_title = $all_items[$id]['title']; // Устанавливаем правильный заголовок
$article_content = $all_items[$id]['excerpt']; // Или полный контент

$header_style = "blog-title-image";
include_once('pagetitle-blog.php');
include_once('navbar_light.php');
include_once('modal.php');
include_once('mobile_menu.php');
?>

<section>
    <div class="container">
        <div class="news-content">
            <div class="social-icons">
                <!-- Соцсети -->
                 <a href="#" class="footer-social-link">
                    <svg class="footer-social-svg" width="24" height="24">
                        <use xlink:href="img/sprite.svg#vk"></use>
                    </svg>
                </a>
                <a href="#" class="footer-social-link">
                    <svg class="footer-social-svg" width="24" height="24">
                        <use xlink:href="img/sprite.svg#inst"></use>
                    </svg>
                </a>
            </div>
            <div class="news-column">
                <div class="news-title">
                    <!-- Используем динамический заголовок из массива -->
                    <h2><?= htmlspecialchars($all_items[$id]['title']) ?></h2>
                    <p><?= htmlspecialchars($all_items[$id]['excerpt']) ?></p>
                </div>
                <!-- Остальной контент -->
                <img class="news-img" src="./img/slide-research_2.png" alt="">
                <div class="news-title">
                    <h3>Подзаголовок статьи</h3>
                    <p>Текст статьи...</p>
                </div>
            </div>

            <div class="share">
                <p class="share-item">Поделиться:</p>
                <div class="social-icons-share">
                     <a href="#" class="footer-social-link">
                        <svg class="footer-social-svg" width="24" height="24">
                            <use xlink:href="img/sprite.svg#vk"></use>
                        </svg>
                    </a>
                    <a href="#" class="footer-social-link">
                        <svg class="footer-social-svg" width="24" height="24">
                            <use xlink:href="img/sprite.svg#inst"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section blog">
    <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Так же вас может заинтересовать:</h2>

        <div class="swiper blog-slider swiper-initialized swiper-horizontal swiper-backface-hidden">

            <div class="swiper-wrapper" id="swiper-wrapper-95c14df083716f5f" aria-live="polite">
                <!-- Slides -->
                <div class="swiper-slide blog-card image-post swiper-slide-active" role="group" aria-label="1 / 3" style="width: 705px; margin-right: 30px;">
                    <!-- <img src="./img/blog-photo.jpg" alt="" class="blog-card-image" > -->
                    <a href="blog.php">
                        <h3 class="blog-card-title">
                            Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card-text">
                            Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени
                            предоставлены...
                        </p>
                    </a>
                </div>
                <div class="swiper-slide blog-card image-photo swiper-slide-next" role="group" aria-label="2 / 3" style="width: 705px; margin-right: 30px;">
                    <!-- <img src="./img/blog-post.jpg" alt="" class="blog-card-image" > -->
                    <a href="blog.php">
                        <h3 class="blog-card-title">
                            Сложно сказать, почему жизнь прекрасна
                        </h3>
                        <p class="blog-card-text">
                            Сложно сказать, почему элементы политического процесса
                            функционально разнесены на независимые элементы. Безусловно,
                            высокотехнологичная...
                        </p>
                    </a>
                </div>
                <div class="swiper-slide blog-card image-post" role="group" aria-label="3 / 3" style="width: 705px; margin-right: 30px;">
                    <!-- <img src="./img/blog-photo.jpg" alt="" class="blog-card-image" > -->
                    <a href="blog.php">
                        <h3 class="blog-card-title">
                            Современная методология разработки одухотворила всех причастных
                        </h3>
                        <p class="blog-card-text">
                            Действия представителей оппозиции, превозмогая сложившуюся
                            непростую экономическую ситуацию, в равной степени
                            предоставлены...
                        </p>
                    </a>
                </div>
            </div>

            <div class="blogslider-footer">
                <div class="button-link news-page-link">Весь блог</div>
                <div class="blog-buttons primary-buttons-wraper">
                    <div class="button-fill blog-button-prev primary-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true">
                        <svg width="36" height="24">
                            <use xlink:href="img/sprite.svg#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="button-fill blog-button-next primary-button-next" tabindex="0" role="button" aria-label="Next slide">
                        <svg width="36" height="24">
                            <use xlink:href="img/sprite.svg#arrow-next"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('cta.php');
include_once('footer.php');
?>