const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const button = document.querySelector(".navbar-button");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
const isFront = document.body.classList.contains("front-page");

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
        rule: "minLength",
        value: 11,
        errorMessage: "Номер телефона слишком короткий.",
      },
      {
        validator: (value) =>
          /^\+?[87]\s?\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/.test(value),
        errorMessage:
          "Введите корректный номер телефона (например, +7 (999) 123-45-67).",
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

            // 1. Закрываем текущее модальное окно
            if (currentModal) {
              currentModal.classList.remove("is-open");
            }

            // 2. Открываем окно подтверждения (alertModal)
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
          } else {
            // --- Ошибка отправки ---
            // Показываем сообщение об ошибке внутри формы или текущего окна
            const errorDiv = document.createElement("div");
            errorDiv.className = "message error";
            errorDiv.innerHTML = `
              <h2>Ошибка</h2>
              <p>${data.message}</p>
              <br>
              <button onclick="location.reload()" class="button cta-form-button">Попробовать снова</button>
            `;

            // Заменяем форму на сообщение об ошибке внутри родительского контейнера
            thisForm.parentElement.replaceChild(errorDiv, thisForm);
          }
        })
        .catch((error) => {
          console.error("Error:", error);
          alert("Произошла сетевая ошибка.");
        });
    });

  /* Создаем префикс +7, даже если вводят 8 или 9 */
  const prefixNumber = (str) => {
    /* если вводят семерку, добавляем ей скобку */
    if (str === "7") {
      return "7 (";
    }
    /* если вводят восьмерку, ставим вместо нее +7 ( */
    if (str === "8") {
      return "+7 (";
    }
    /* если пишут девятку, заменяем на +7 (9   */
    if (str === "9") {
      return "7 (9";
    }
    /* в других случаях просто 7 (   */
    return "7 (";
  }; /* профикс в любом раскладе будет +7 () */

  /* Ловим события ввода в любом поле */
  document.addEventListener("input", (e) => {
    /* Проверяем, что это поле имеет класс phone-mask */
    if (e.target.classList.contains("phone-mask")) {
      /* поле с телефоном помещаем в переменную input */
      const input = e.target;
      /* вставляем плюс в начале номера */
      const value = input.value.replace(/\D+/g, "");
      /* длинна номера 11 символов */
      const numberLength = 11;

      /* Создаем переменную, куда будем записывать номер */
      let result;
      /* Если пользователь ввел 8... */
      if (input.value.includes("+8") || input.value[0] === "8") {
        /* Стираем восьмерку */
        result = "";
      } else {
        /* Оставляем плюсик в поле */
        result = "+";
      }

      /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
      for (let i = 0; i < value.length && i < numberLength; i++) {
        switch (i) {
          case 0:
            /* в самом начале ставим префикс +7 ( */
            result += prefixNumber(value[i]);
            continue;
          case 4:
            /* добавляем после "+7 (" круглую скобку ")" */
            result += ") ";
            break;
          case 7:
            /* дефис после 7 символа */
            result += "-";
            break;
          case 9:
            /* еще дефис  */
            result += "-";
            break;
          default:
            break;
        }
        /* на каждом шаге цикла добавляем новую цифру к номеру */
        result += value[i];
      }
      /* итог: номер в формате +7 (999) 123-45-67 */
      input.value = result;
    }
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
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
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
            new Swiper(".swiper-slider", {
              speed: 400,
              slidesPerView: 1,
              navigation: {
                nextEl: ".slider-button-next",
                prevEl: ".slider-button-prev",
              },
              breakpoints: {
                320: {
                  slidesPerView: 2,
                },
                576: {
                  slidesPerView: 2,
                  centeredSlides: true,
                  slidesOffsetBefore: -170,
                },

                820: {
                  slidesPerView: 3,
                },

                1160: {
                  slidesPerView: 4,
                },
                1360: {
                  slidesPerView: 5,
                },
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
                320: {
                  slidesPerView: 1,
                },
                576: {
                  slidesPerView: 2,
                },
                820: {
                  slidesPerView: 3,
                },
                1360: {
                  slidesPerView: 4,
                },
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
                320: {
                  slidesPerView: 1,
                },
                576: {
                  slidesPerView: 1,
                },

                820: {
                  slidesPerView: 1,
                },

                1160: {
                  slidesPerView: 2,
                },
                1360: {
                  slidesPerView: 2,
                },
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
                320: {
                  slidesPerView: "auto",
                  spaceBetween: 20,
                  slidesOffsetBefore: 20,
                  slidesOffsetAfter: 20,
                },
                576: {
                  slidesPerView: "auto",
                  spaceBetween: 20,
                  slidesOffsetBefore: 20,
                  slidesOffsetAfter: 20,
                },
                820: {
                  slidesPerView: "auto",
                  spaceBetween: 30,
                  slidesOffsetBefore: 30,
                  slidesOffsetAfter: 30,
                },
                1160: {
                  slidesPerView: "auto",
                  spaceBetween: 30,
                  slidesOffsetBefore: 30,
                  slidesOffsetAfter: 30,
                },
              },
            });

            new Swiper(".advant-slider", {
              speed: 400,
              /* spaceBetween: 30, */
              slidesPerView: 1,
              navigation: {
                nextEl: ".advant-button-next",
                prevEl: ".advant-button-prev",
              },
              breakpoints: {
                320: {
                  slidesPerView: 2,
                },
                576: {
                  slidesPerView: 2,
                  centeredSlides: true,
                  slidesOffsetBefore: -170,
                },

                820: {
                  slidesPerView: 3,
                },

                1160: {
                  slidesPerView: 4,
                },
                1360: {
                  slidesPerView: 5,
                },
              },
            });
          };
          document.body.appendChild(script);
        } else {
          new Swiper(".swiper-slider", {
            speed: 400,
            slidesPerView: 1,
            navigation: {
              nextEl: ".slider-button-next",
              prevEl: ".slider-button-prev",
            },
            breakpoints: {
              320: {
                slidesPerView: 2,
              },
              576: {
                slidesPerView: 2,
                centeredSlides: true,
                slidesOffsetBefore: -170,
              },

              820: {
                slidesPerView: 3,
              },

              1160: {
                slidesPerView: 4,
              },
              1360: {
                slidesPerView: 5,
              },
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
              320: {
                slidesPerView: 1,
              },
              576: {
                slidesPerView: 2,
              },
              820: {
                slidesPerView: 3,
              },
              1360: {
                slidesPerView: 4,
              },
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
              320: {
                slidesPerView: 1,
              },
              576: {
                slidesPerView: 1,
              },

              820: {
                slidesPerView: 1,
              },

              1160: {
                slidesPerView: 2,
              },
              1360: {
                slidesPerView: 2,
              },
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
              320: {
                slidesPerView: "auto",
                spaceBetween: 20,
                slidesOffsetBefore: 20,
                slidesOffsetAfter: 20,
              },
              576: {
                slidesPerView: "auto",
                spaceBetween: 20,
                slidesOffsetBefore: 20,
                slidesOffsetAfter: 20,
              },
              820: {
                slidesPerView: "auto",
                spaceBetween: 30,
                slidesOffsetBefore: 30,
                slidesOffsetAfter: 30,
              },
              1160: {
                slidesPerView: "auto",
                spaceBetween: 30,
                slidesOffsetBefore: 30,
                slidesOffsetAfter: 30,
              },
            },
          });

          new Swiper(".advant-slider", {
            speed: 400,
            /*   spaceBetween: 30, */
            slidesPerView: 1,
            navigation: {
              nextEl: ".advant-button-next",
              prevEl: ".advant-button-prev",
            },
            breakpoints: {
              320: {
                slidesPerView: 2,
              },
              576: {
                slidesPerView: 2,
              },

              820: {
                slidesPerView: 3,
              },

              1160: {
                slidesPerView: 4,
              },
              1360: {
                slidesPerView: 5,
              },
            },
          });
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
