<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon.svg">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.svg">
  <link rel="icon" type="image/x-icon" href="/img/favicon-48x48.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.svg">
  <script>
    ! function(e, n, A) {
      function o(e) {
        var n = u.className,
          A = Modernizr._config.classPrefix || "";
        if (c && (n = n.baseVal), Modernizr._config.enableJSClass) {
          var o = new RegExp("(^|\\s)" + A + "no-js(\\s|$)");
          n = n.replace(o, "$1" + A + "js$2")
        }
        Modernizr._config.enableClasses && (n += " " + A + e.join(" " + A), c ? u.className.baseVal = n : u.className = n)
      }

      function t(e, n) {
        return typeof e === n
      }

      function a() {
        var e, n, A, o, a, i, l;
        for (var f in r)
          if (r.hasOwnProperty(f)) {
            if (e = [], n = r[f], n.name && (e.push(n.name.toLowerCase()), n.options && n.options.aliases && n.options.aliases.length))
              for (A = 0; A < n.options.aliases.length; A++) e.push(n.options.aliases[A].toLowerCase());
            for (o = t(n.fn, "function") ? n.fn() : n.fn, a = 0; a < e.length; a++) i = e[a], l = i.split("."), 1 === l.length ? Modernizr[l[0]] = o : (!Modernizr[l[0]] || Modernizr[l[0]] instanceof Boolean || (Modernizr[l[0]] = new Boolean(Modernizr[l[0]])), Modernizr[l[0]][l[1]] = o), s.push((o ? "" : "no-") + l.join("-"))
          }
      }

      function i(e, n) {
        if ("object" == typeof e)
          for (var A in e) f(e, A) && i(A, e[A]);
        else {
          e = e.toLowerCase();
          var t = e.split("."),
            a = Modernizr[t[0]];
          if (2 == t.length && (a = a[t[1]]), "undefined" != typeof a) return Modernizr;
          n = "function" == typeof n ? n() : n, 1 == t.length ? Modernizr[t[0]] = n : (!Modernizr[t[0]] || Modernizr[t[0]] instanceof Boolean || (Modernizr[t[0]] = new Boolean(Modernizr[t[0]])), Modernizr[t[0]][t[1]] = n), o([(n && 0 != n ? "" : "no-") + t.join("-")]), Modernizr._trigger(e, n)
        }
        return Modernizr
      }
      var s = [],
        r = [],
        l = {
          _version: "3.6.0",
          _config: {
            classPrefix: "",
            enableClasses: !0,
            enableJSClass: !0,
            usePrefixes: !0
          },
          _q: [],
          on: function(e, n) {
            var A = this;
            setTimeout(function() {
              n(A[e])
            }, 0)
          },
          addTest: function(e, n, A) {
            r.push({
              name: e,
              fn: n,
              options: A
            })
          },
          addAsyncTest: function(e) {
            r.push({
              name: null,
              fn: e
            })
          }
        },
        Modernizr = function() {};
      Modernizr.prototype = l, Modernizr = new Modernizr;
      var f, u = n.documentElement,
        c = "svg" === u.nodeName.toLowerCase();
      ! function() {
        var e = {}.hasOwnProperty;
        f = t(e, "undefined") || t(e.call, "undefined") ? function(e, n) {
          return n in e && t(e.constructor.prototype[n], "undefined")
        } : function(n, A) {
          return e.call(n, A)
        }
      }(), l._l = {}, l.on = function(e, n) {
        this._l[e] || (this._l[e] = []), this._l[e].push(n), Modernizr.hasOwnProperty(e) && setTimeout(function() {
          Modernizr._trigger(e, Modernizr[e])
        }, 0)
      }, l._trigger = function(e, n) {
        if (this._l[e]) {
          var A = this._l[e];
          setTimeout(function() {
            var e, o;
            for (e = 0; e < A.length; e++)(o = A[e])(n)
          }, 0), delete this._l[e]
        }
      }, Modernizr._q.push(function() {
        l.addTest = i
      }), Modernizr.addAsyncTest(function() {
        function e(e, n, A) {
          function o(n) {
            var o = n && "load" === n.type ? 1 == t.width : !1,
              a = "webp" === e;
            i(e, a && o ? new Boolean(o) : o), A && A(n)
          }
          var t = new Image;
          t.onerror = o, t.onload = o, t.src = n
        }
        var n = [{
            uri: "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",
            name: "webp"
          }, {
            uri: "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",
            name: "webp.alpha"
          }, {
            uri: "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",
            name: "webp.animation"
          }, {
            uri: "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",
            name: "webp.lossless"
          }],
          A = n.shift();
        e(A.name, A.uri, function(A) {
          if (A && "load" === A.type)
            for (var o = 0; o < n.length; o++) e(n[o].name, n[o].uri)
        })
      }), a(), o(s), delete l.addTest, delete l.addAsyncTest;
      for (var p = 0; p < Modernizr._q.length; p++) Modernizr._q[p]();
      e.Modernizr = Modernizr
    }(window, document);
  </script>

  <title><?php echo $page_title; ?> - Aliance Production</title>

</head>

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
include_once('navbar_light.php');
include_once('pagetitle-blog.php');
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
                    <h4>Подзаголовок статьи</h4>
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
                <a href="blog.php" class="swiper-slide blog-card image-post swiper-slide-active" role="group" aria-label="1 / 3" style="width: 705px; margin-right: 30px;">
                    <!-- <img src="./img/blog-photo.jpg" alt="" class="blog-card-image" > -->
                    <h3 class="blog-card-title">
                        Современная методология разработки одухотворила всех причастных
                    </h3>
                    <p class="blog-card-text">
                        Действия представителей оппозиции, превозмогая сложившуюся
                        непростую экономическую ситуацию, в равной степени
                        предоставлены...
                    </p>
                </a>
                <a href="blog.php" class="swiper-slide blog-card image-photo swiper-slide-next" role="group" aria-label="2 / 3" style="width: 705px; margin-right: 30px;">
                    <!-- <img src="./img/blog-post.jpg" alt="" class="blog-card-image" > -->
                    <h3 class="blog-card-title">
                        Сложно сказать, почему жизнь прекрасна
                    </h3>
                    <p class="blog-card-text">
                        Сложно сказать, почему элементы политического процесса
                        функционально разнесены на независимые элементы. Безусловно,
                        высокотехнологичная...
                    </p>
                </a>
                <a href="blog.php" class="swiper-slide blog-card image-post" role="group" aria-label="3 / 3" style="width: 705px; margin-right: 30px;">
                    <!-- <img src="./img/blog-photo.jpg" alt="" class="blog-card-image" > -->
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

            <div class="blogslider-footer">
                <a href="blog.php" class="button-link news-page-link">Весь блог</a>
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
include_once('modal.php');
include_once('mobile_menu.php');
include_once('cta.php');
include_once('footer.php');
?>