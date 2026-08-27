<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--     <link rel="preconnect" href="https://fonts.googleapis.com" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin > -->
  <link rel="stylesheet" href="./css/style.css">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon.svg">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.svg">
  <link rel="icon" type="image/x-icon" href="/img/favicon-48x48.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.svg">
  <script>
    /*! modernizr 3.6.0 (Custom Build) | MIT *
     * https://modernizr.com/download/?-webp-setclasses !*/
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

  <title>Aliance Production</title>

</head>

<body class="front-page">



  <?php
  $color_arrow = "#fff"; // задаем цвет стрелок слайдера advant
  include_once('modal.php');
  include_once('mobile_menu.php')
  ?>

  <nav class="navbar">
    <a href="#" class="mobile-menu-toggle">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <a href="/" class="header-logo">
      <svg class="logo-svg logo-light">
        <use xlink:href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark">
        <use xlink:href="img/sprite.svg#logo"></use>
      </svg>
    </a>
    <ul class="header-nav">
      <li class="header-nav-item">
        <a href="about.php" class="header-nav-link">О компании</a>
      </li>
      <li class="header-nav-item">
        <a href="contract_product.php" class="header-nav-link">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a href="own_product.php" class="header-nav-link">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a href="news.php" class="header-nav-link">Новости</a>
      </li>
      <li class="header-nav-item">
        <a href="contact.php" class="header-nav-link">Контакты</a>
      </li>
    </ul>
    <div class="header-phone">
      <svg class="phone-svg">
        <use xlink:href="img/sprite.svg#phone"></use>
      </svg>
      <a href="tel:+74996861014" class="header-phone-link">+7 (499) 686-10-14</a>
    </div>
    <button class="navbar-button button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="phone-svg button-icon">
        <use xlink:href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
  </nav>

  <header class="header header-image">
    <div class="container">
      <div class="header-content">
        <div class="seporator"></div>
        <h1 class="header-title">
          Комплексное обеспечение товарами и расходными материалами бизнеса
        </h1>
        <p class="header-text">
          Высокий уровень вовлечения представителей целевой аудитории является
          четким доказательством простого факта: высококачественный прототип
          будущего проекта напрямую зависит от анализа существующих паттернов
          поведения.
        </p>
        <button class="button header-button" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
      </div>

      <!-- <div class="swiper swiper-slider">
        <ul class="swiper-wrapper header-features">
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#time"></use>
            </svg>
            <p class="header-features-text">Непрерывная работа c 2017 года</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#certificate"></use>
            </svg>
            <p class="header-features-text">Вся продукция сертифицирована</p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#control"></use>
            </svg>
            <p class="header-features-text">
              Контроль качества на всех этапах
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#delivery"></use>
            </svg>
            <p class="header-features-text">
              Возможны поставки по всей России
            </p>
          </li>
          <li class="swiper-slide header-features-item">
            <svg width="36" height="36">
              <use xlink:href="img/sprite.svg#speed"></use>
            </svg>
            <p class="header-features-text">Оперативное производство</p>
          </li>
        </ul>

        <div class="slider-buttons">
          <div class="slider-button-prev">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="slider-button-next">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div> -->
    </div>
    
    <?php include_once('advant-slider-block.php') ?>
  </header>


  <?php include_once('section-light.php') ?>
  <!-- <section class="section section-light">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title">схема работы</h2>

      <div class="swiper steps-slider">
        <ul class="swiper-wrapper steps">
          <li class="swiper-slide steps-item">
            <span class="steps-num">01</span>
            <h3 class="steps-title">Знакомство</h3>
            <p class="steps-text">
              Безусловно, сплочённость команды профессионалов позволяет
              оценить значение форм воздействия.
            </p>
            <a href="" class="button-link" data-toggle="modal" data-target="#feedback-modal"> Оставить заявку </a>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">02</span>
            <h3 class="steps-title">Заключение договора</h3>
            <p class="steps-text">
              Лишь интерактивные прототипы призваны к ответу.
            </p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">03</span>
            <h3 class="steps-title">Производство</h3>
            <p class="steps-text">
              А также стремящиеся вытеснить традиционное производство,
              нанотехнологии функционально разнесены на независимые элементы.
            </p>
          </li>
          <li class="swiper-slide steps-item">
            <span class="steps-num">04</span>
            <h3 class="steps-title">Доставка</h3>
            <p class="steps-text">
              В частности, экономическая повестка сегодняшнего дня говорит о
              возможностях приоритизации разума над эмоциями.
            </p>
          </li>
        </ul>
        <div class="steps-buttons primary-buttons-wraper">
          <div class="steps-button-prev primary-button-prev">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-prev"></use>
            </svg>
          </div>
          <div class="steps-button-next primary-button-next">
            <svg width="36" height="24">
              <use xlink:href="img/sprite.svg#arrow-next"></use>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <?php $block_title = "Контрактное производство";
  include_once('./template/contract_product-block.php') ?>
  <?php $block_title = "Собственные торговые марки";
  include_once('./template/trademark-block.php') ?>
  <?php include_once('founder.php') ?>
  <?php include_once('clients.php') ?>

  <section class="section blog">
    <div class="container">
      <div class="seporator"></div>
      <h2 class="section-title">Блог экспертов в области производства</h2>

      <div class="swiper blog-slider">

        <div class="swiper-wrapper">
          <!-- Slides -->
          <a href="blog.php" class="swiper-slide blog-card image-post">
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
          <a href="blog.php" class="swiper-slide blog-card image-photo">
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
          <a href="blog.php" class="swiper-slide blog-card image-post">
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
          <a href="blog.php" class="button-link">Весь блог</a>
          <div class="blog-buttons primary-buttons-wraper">
            <div class="blog-button-prev primary-button-prev">
              <svg width="36" height="24">
                <use xlink:href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="blog-button-next primary-button-next">
              <svg width="36" height="24">
                <use xlink:href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('cta.php') ?>
  <?php include_once('footer.php') ?>