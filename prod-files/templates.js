document.addEventListener("DOMContentLoaded", function() {

    // Additional services block

    const priceBtn = document.querySelector(".additional-services__btn");

    if (priceBtn) {
        priceBtn.onclick = () => {
            priceBtn.classList.toggle("active");
        };
    }

    // Gallery Block

    $(".portfolio-item").magnificPopup({
        type: "image",
        gallery: {
            enabled: true,
        },
    });

    $(".room-type-prices__item-img").magnificPopup({
        type: "image",
    });

    const filterButtons = document.querySelectorAll(".krismas-filter-button");
    const portfolioItems = document.querySelectorAll(".portfolio-item");

    filterButtons.forEach((button) => {
        button.addEventListener("click", function () {

            const category = this.getAttribute("data-category");
            
            // Remove 'active' class from all buttons
            filterButtons.forEach((btn) => btn.classList.remove("active"));
            // Add 'active' class to clicked button
            this.classList.add("active");

            // Show/hide portfolio items based on category
            portfolioItems.forEach((item) => {
                if (
                    category === "all" ||
                    item.getAttribute("data-category") === category
                ) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        });
    });

    // Ceiling types

    const categoryButtons = document.querySelectorAll(".ceiling-types__cat-btn");
    const typeItems = document.querySelectorAll(".ceiling-types__type-item");
    const prevButton = document.querySelector(".ceiling-types__prev");
    const nextButton = document.querySelector(".ceiling-types__next");
  
    let currentCategoryIndex = 0;
  
    // Function to show type items for the current category index
    function showTypeItems() {
      const currentCategory = categoryButtons[currentCategoryIndex].dataset.category;
      typeItems.forEach(function (item) {
        if (item.dataset.category === currentCategory) {
          item.classList.add("active");
        } else {
          item.classList.remove("active");
        }
      });
    }
  
    // Function to update active category button
    function updateActiveCategoryButton() {
      // Remove active class from all category buttons
      categoryButtons.forEach(function (btn) {
        btn.classList.remove("active");
      });
      // Add active class to the category button corresponding to currentCategoryIndex
      categoryButtons[currentCategoryIndex].classList.add("active");
    }
  
    // Initial display of type items
    showTypeItems();
  
    // Event listener for previous button
    prevButton.addEventListener("click", function () {
      currentCategoryIndex = (currentCategoryIndex - 1 + categoryButtons.length) % categoryButtons.length;
      showTypeItems();
      updateActiveCategoryButton();
    });
  
    // Event listener for next button
    nextButton.addEventListener("click", function () {
      currentCategoryIndex = (currentCategoryIndex + 1) % categoryButtons.length;
      showTypeItems();
      updateActiveCategoryButton();
    });
  
    // Event listeners for category buttons
    categoryButtons.forEach(function (button, index) {
      button.addEventListener("click", function () {
        currentCategoryIndex = index;
        showTypeItems();
        updateActiveCategoryButton();
      });
    });


    // Ceilin types section
    var ceilingTypesSlider = new Swiper('.ceiling-types__type-gallery.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        
        // If you need pagination
        pagination: {
            el: '.swiper-pagination',
        },
        
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Room type prices
    const typesCategoryButtons = document.querySelectorAll('.room-type-prices__buttons button');
    const items = document.querySelectorAll('.room-type-prices__item');

    typesCategoryButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const category = this.dataset.category;

             // Remove 'active' class from all buttons
             typesCategoryButtons.forEach(function(btn) {
                btn.classList.remove('active');
            });

            // Add 'active' class to clicked button
            this.classList.add('active');

            items.forEach(function(item) {
                const itemCategory = item.dataset.category;

                if (category === 'all' || category === itemCategory) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // FAQ section

    const faqLabels = document.querySelectorAll('.faq__label');

    faqLabels.forEach(function(label) {
        label.addEventListener('click', function() {
            const isActive = label.classList.contains('active');

            // Close all content items
            faqLabels.forEach(function(item) {
                item.classList.remove('active');
            });

            // Toggle active class on clicked item
            if (!isActive) {
                label.classList.add('active');
            }
        });
    });

    // lights slider
    var lightsSlider = new Swiper('#lightsSlider', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 15,
        navigation: {
            prevEl: '.lights-slider__prev',
            nextEl: '.lights-slider__next',
        },
        breakpoints: {
            500: {
                slidesPerView: 2,
            },
            800: {
                slidesPerView: 3,
            },
            980: {
                slidesPerView: 4,
            },

        }
    });

});

  
