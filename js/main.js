const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const button = document.querySelector(".navbar-button");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");
let modalTimeout;
const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};

const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
};

const openMenu = (event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden";
  lightModeOn();
};

const closeMenu = (event) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "";
  if (isFront) {
    window.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
};

// --- ЛОГИКА МАСКИ ТЕЛЕФОНА ---
// Используем готовую библиотеку IMask для надежности, если она не подключена,
// то используем улучшенную ручную реализацию ниже.

// Проверка, есть ли библиотека IMask
if (typeof IMask === "undefined") {
    // Ручная реализация маски
    const phoneInputs = document.querySelectorAll('[name="userphone"]');

    phoneInputs.forEach((input) => {
        input.addEventListener("input", (e) => {
            const el = e.target;
            const val = el.value.replace(/\D+/g, ""); // Получаем только цифры

            if (val.length === 0) {
                el.value = "";
                return;
            }

            // Форматируем номер
            let formatted = "+7";
            if (val.length > 1) {
                formatted += " (" + val.slice(1, 4);
            }
            if (val.length > 4) {
                formatted += ") " + val.slice(4, 7);
            }
            if (val.length > 7) {
                formatted += "-" + val.slice(7, 9);
            }
            if (val.length > 9) {
                formatted += "-" + val.slice(9, 11);
            }

            // Обновляем значение
            if (el.value !== formatted) {
                el.value = formatted;
            }
        });
    });
} else {
    // Если IMask подключен, инициализируем его
    const phoneInputs = document.querySelectorAll('[name="userphone"]');
    phoneInputs.forEach((input) => {
        IMask(input, {
            mask: '+7 (000) 000-00-00',
            min: '+7 (000) 000-00-00',
            max: '+7 (999) 999-99-99',
            lazy: true
        });
    });
}


// --- ЛОГИКА ВАЛИДАЦИИ ФОРМ ---
const forms = document.querySelectorAll("form");

forms.forEach((form) => {
  if (typeof JustValidate === "undefined") {
    console.error("JustValidate is not loaded!");
    return;
  }

  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });

  validation
    .addField('[name="username"]', [
      {
        rule: "required",
        errorMessage: "Укажите имя",
      },
      {
        rule: "minLength",
        value: 2,
        errorMessage: "Имя должно содержать минимум 2 символа.",
      },
      {
        rule: "maxLength",
        value: 50,
        errorMessage: "Имя должно содержать максимум 50 символов.",
      },
    ])
    .addField('[name="userphone"]', [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
      {
        // Проверка на полный формат номера
        validator: (value) => {
          const regex = /^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/;
          return regex.test(value);
        },
        errorMessage:
          "Введите номер в формате: +7 (XXX) XXX-XX-XX",
      },
    ])

    .onSuccess((event) => {
      const thisForm = event.target;
      const formData = new FormData(thisForm);

      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData,
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            // --- Успешная отправка ---
            if (currentModal) {
              currentModal.classList.remove("is-open");
            }
            if (alertModal) {
              alertModal.classList.add("is-open");
            }
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            currentModal.addEventListener("click", (event) => {
              if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open");
              } 
            });

// Очищаем предыдущий таймер, если он был (на случай повторного открытия)
  clearTimeout(modalTimeout);

  // Запускаем новый таймер на 5 секунд
  modalTimeout = setTimeout(() => {
    // Проверяем, что модалка всё ещё открыта, прежде чем закрывать
    if (currentModal.classList.contains("is-open")) {
      currentModal.classList.remove("is-open");
    }
  }, 5000);

          } else {
            // --- Ошибка отправки ---
            const errorDiv = document.createElement("div");
            errorDiv.className = "message error";
            errorDiv.innerHTML = `
              <h2>Ошибка</h2>
              <p>${data.message}</p>
              <br>
              <button onclick="location.reload()" class="button cta-form-button">Попробовать снова</button>
            `;
            thisForm.parentElement.replaceChild(errorDiv, thisForm);
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          alert("Произошла сетевая ошибка.");
        });
    });
});

window.addEventListener("scroll", () => {
  if (window.scrollY > 1) {
    button.classList.add("navbar-button-s");
    button.classList.remove("navbar-button");
  } else {
    button.classList.add("navbar-button");
    button.classList.remove("navbar-button-s");
  }
});

window.addEventListener("scroll", () => {
  window.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
  if (isFront) {
    window.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});

let currentModal;
let modalDialog;
const alertModal = document.querySelector("#alert-modal");

const modalButtons = document.querySelectorAll("[data-toggle=modal]");
modalButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);
    currentModal.classList.toggle("is-open");
    modalDialog = currentModal.querySelector(".modal-dialog");
    currentModal.addEventListener("click", (event) => {
      if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("is-open");
      }
    });
  });
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

window.dispatchEvent(new Event("scroll"));

const swiperObserver = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (!window.Swiper) {
          const script = document.createElement("script");
          script.src = "./js/swiper-bundle.min.js";
          script.onload = () => {
            initSliders();
          };
          document.body.appendChild(script);
        } else {
          initSliders();
        }
        observer.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.1 },
);

document
  .querySelectorAll(
    ".swiper-slider, .steps-slider, .blog-slider, .advant-slider, .center-slider",
  )
  .forEach((el) => {
    swiperObserver.observe(el);
  });

function initSliders() {
    if (!window.Swiper) return;

    new Swiper(".swiper-slider", {
      loop: true,
      speed: 400,
      slidesPerView: 5,
      navigation: {
        nextEl: ".slider-button-next",
        prevEl: ".slider-button-prev",
      },
      breakpoints: {
        320: { slidesPerView: 2 },
        576: { slidesPerView: 2 },
        820: { slidesPerView: 3 },
        1160: { slidesPerView: 4 },
        1360: { slidesPerView: 5 },
      },
    });

    new Swiper(".steps-slider", {
      speed: 400,
      slidesPerView: 4,
      navigation: {
        nextEl: ".steps-button-next",
        prevEl: ".steps-button-prev",
      },
      breakpoints: {
        320: { slidesPerView: 1 },
        576: { slidesPerView: 2 },
        820: { slidesPerView: 3 },
        1360: { slidesPerView: 4 },
      },
    });

    new Swiper(".blog-slider", {
      speed: 400,
      spaceBetween: 30,
      slidesPerView: 2,
      navigation: {
        nextEl: ".blog-button-next",
        prevEl: ".blog-button-prev",
      },
      breakpoints: {
        320: { slidesPerView: 1 },
        576: { slidesPerView: 1 },
        820: { slidesPerView: 1 },
        1160: { slidesPerView: 2 },
        1360: { slidesPerView: 2 },
      },
    });

    new Swiper(".center-slider", {
      speed: 400,
      spaceBetween: 30,
      slidesOffsetBefore: 30,
      slidesOffsetAfter: 30,
      centeredSlides: false,
      slidesPerView: "auto",
      initialSlide: 0,
      navigation: {
        nextEl: ".center-button-next",
        prevEl: ".center-button-prev",
      },
      breakpoints: {
        320: { slidesPerView: "auto", spaceBetween: 20, slidesOffsetBefore: 20, slidesOffsetAfter: 20 },
        576: { slidesPerView: "auto", spaceBetween: 20, slidesOffsetBefore: 20, slidesOffsetAfter: 20 },
        820: { slidesPerView: "auto", spaceBetween: 30, slidesOffsetBefore: 30, slidesOffsetAfter: 30 },
        1160: { slidesPerView: "auto", spaceBetween: 30, slidesOffsetBefore: 30, slidesOffsetAfter: 30 },
      },
    });

    new Swiper(".advant-slider", {
      speed: 400,
      slidesPerView: 1,
      navigation: {
        nextEl: ".advant-button-next",
        prevEl: ".advant-button-prev",
      },
      breakpoints: {
        320: { slidesPerView: 2 },
        576: { slidesPerView: 2, centeredSlides: true, slidesOffsetBefore: -170 },
        820: { slidesPerView: 3 },
        1160: { slidesPerView: 4 },
        1360: { slidesPerView: 5 },
      },
    });
}