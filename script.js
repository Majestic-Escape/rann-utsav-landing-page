// Google Maps Initialization
function initMap() {
    const locations = [
        { lat: 23.8391, lng: 69.6905, title: "Dhordo Tent City" },
        { lat: 23.8998, lng: 69.6950, title: "White Desert View Point" },
        { lat: 23.9315, lng: 69.5504, title: "Kala Dungar (Black Hill)" },
        { lat: 23.9428, lng: 69.5337, title: "Kalo Dungar Magnetic Hill Point" },
        { lat: 22.8328, lng: 69.3467, title: "Mandvi Beach" },
        { lat: 23.2504, lng: 69.6668, title: "Bhuj (Aina Mahal)" },
        { lat: 23.7458, lng: 69.6889, title: "Hodka Village" },
        { lat: 23.7508, lng: 69.6993, title: "Ludiya Village" },
        { lat: 23.8892, lng: 70.2066, title: "Dholavira" },
        { lat: 23.9000, lng: 69.6833, title: "Kutch Desert Wildlife Sanctuary" },
        { lat: 23.70000, lng: 69.40000, title: "Banni Grasslands" },
        { lat: 23.676, lng: 68.5394, title: "Narayan Sarovar" },
        { lat: 23.67, lng: 68.54, title: "Koteshwar Temple" }
    ];

    const mapElement = document.getElementById("map");
    if (!mapElement) return;

    const map = new google.maps.Map(mapElement, {
        zoom: 9,
        center: locations[0]
    });

    locations.forEach(loc => {
        new google.maps.Marker({
            position: { lat: loc.lat, lng: loc.lng },
            map,
            title: loc.title
        });
    });
}

// Make initMap global so Google Maps API can call it
window.initMap = initMap;

document.addEventListener('DOMContentLoaded', () => {
    // 1. Populate UTM Source from URL query params
    const urlParams = new URLSearchParams(window.location.search);
    const utmSource = urlParams.get('utm_source') || 'direct';
    const sourceInput = document.getElementById('source');
    if (sourceInput) {
        sourceInput.value = utmSource;
    }

    // 2. Full Moon Countdown Logic
    const fullMoonDates = [
        new Date(2025, 10, 6),  // 2025-11-06
        new Date(2025, 11, 5),  // 2025-12-05
        new Date(2026, 0, 4),   // 2026-01-04
        new Date(2026, 0, 31),  // 2026-01-31
        new Date(2026, 1, 2),   // 2026-02-02
        new Date(2026, 2, 4)    // 2026-03-04
    ];

    const now = new Date();
    let nextFullMoonDate = new Date(2026, 4, 4); // Default: 2026-05-04

    for (const fullMoonDate of fullMoonDates) {
        if (now < fullMoonDate) {
            nextFullMoonDate = fullMoonDate;
            break;
        }
    }

    const bookingOfferEndDate = typeof serverBookingEndDate !== 'undefined'
        ? new Date(serverBookingEndDate + "T00:00:00").getTime()
        : nextFullMoonDate.getTime();
    const festivalDate = new Date("2025-10-24T00:00:00").getTime();

    function updateCountdown() {
        const currentTime = new Date().getTime();
        const distance = bookingOfferEndDate - currentTime;

        const days = Math.max(0, Math.floor(distance / (1000 * 60 * 60 * 24)));
        const hours = Math.max(0, Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
        const minutes = Math.max(0, Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)));
        const seconds = Math.max(0, Math.floor((distance % (1000 * 60)) / 1000));

        const daysEl = document.getElementById("days");
        const hoursEl = document.getElementById("hours");
        const minutesEl = document.getElementById("minutes");
        const secondsEl = document.getElementById("seconds");

        if (daysEl) daysEl.textContent = String(days).padStart(2, '0');
        if (hoursEl) hoursEl.textContent = String(hours).padStart(2, '0');
        if (minutesEl) minutesEl.textContent = String(minutes).padStart(2, '0');
        if (secondsEl) secondsEl.textContent = String(seconds).padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);

    // 3. Sticky Button Scroll Listener
    window.addEventListener('scroll', () => {
        const button = document.getElementById("book-now-button-div");
        if (button) {
            if (window.scrollY > window.innerHeight + 420) {
                button.classList.add('sticky-button');
            } else {
                button.classList.remove('sticky-button');
            }
        }
    });

    // 4. AJAX Form Submission for all booking forms
    const bookingForms = document.querySelectorAll(".booking-form");
    bookingForms.forEach((form) => {
        form.addEventListener("submit", async (e) => {
            e.preventDefault();

            // Track Lead event if Meta Pixel is loaded
            if (typeof fbq === 'function') {
                fbq('track', 'Lead');
            }

            const currentForm = e.target;
            const formData = new FormData(currentForm);
            const data = Object.fromEntries(formData.entries());

            const sendBtn = currentForm.querySelector('button[type="submit"]');
            if (sendBtn) sendBtn.disabled = true;

            currentForm.querySelectorAll(
                ".form-duplicate-div, .form-error-div, .form-failed-div"
            ).forEach(el => el.classList.add("d-none"));

            try {
                const res = await fetch("https://live-am.coderelix.com/webhook/rann-inquiry", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify(data)
                });

                const json = await res.json();
                console.log(json);

                if (json.status === "success") {
                    const successModalEl = document.getElementById('successModal');
                    if (successModalEl && typeof bootstrap !== 'undefined') {
                        const successModal = new bootstrap.Modal(successModalEl);
                        successModal.show();
                    }
                    currentForm.reset();
                } else if (json.status === "duplicate") {
                    const errorDiv = currentForm.querySelector('.form-duplicate-div');
                    if (errorDiv) errorDiv.classList.remove('d-none');
                    currentForm.reset();
                } else if (json.status === "error") {
                    const errorDiv = currentForm.querySelector('.form-error-div');
                    if (errorDiv) errorDiv.classList.remove('d-none');
                } else {
                    const errorDiv = currentForm.querySelector('.form-failed-div');
                    if (errorDiv) errorDiv.classList.remove('d-none');
                }
            } catch (err) {
                console.error(err);
                const errorDiv = currentForm.querySelector('.form-failed-div');
                if (errorDiv) errorDiv.classList.remove('d-none');
            }

            if (sendBtn) sendBtn.disabled = false;
        });
    });

    // 5. Stars Await Infinite Carousel Logic
    const initStarsCarousel = () => {
        const track = document.getElementById("stars-carousel-track");
        const prevBtn = document.getElementById("stars-carousel-prev");
        const nextBtn = document.getElementById("stars-carousel-next");
        if (!track || !prevBtn || !nextBtn) return;

        const originalCards = Array.from(track.children);
        const totalOriginal = originalCards.length;
        if (totalOriginal === 0) return;

        // Number of visible cards based on responsive breakpoints
        const getVisibleCardsCount = () => {
            const width = window.innerWidth;
            if (width >= 992) return 3; // Show 3 cards on desktop for centered-focus layout
            return 1; // Show 1 card on tablet/mobile
        };

        let visibleCards = getVisibleCardsCount();
        const cloneCount = 4; // Clone 4 cards to support infinite loop on all breakpoints

        // Clone cards: last 4 prepended, first 4 appended
        const prependClones = originalCards.slice(-cloneCount).map(card => card.cloneNode(true));
        const appendClones = originalCards.slice(0, cloneCount).map(card => card.cloneNode(true));

        // Mark clones so we can distinguish them if needed
        prependClones.forEach(clone => clone.classList.add("clone"));
        appendClones.forEach(clone => clone.classList.add("clone"));

        // Clear and rebuild track
        track.innerHTML = "";
        prependClones.forEach(clone => track.appendChild(clone));
        originalCards.forEach(card => track.appendChild(card));
        appendClones.forEach(clone => track.appendChild(clone));

        const cards = Array.from(track.children);
        let currentIndex = cloneCount; // Starts at first original card
        let isTransitioning = false;
        let slideInterval = null;

        // Set dimensions and position
        const updateCarousel = (animate = true) => {
            const containerWidth = track.parentElement.getBoundingClientRect().width;
            visibleCards = getVisibleCardsCount();
            const cardWidth = containerWidth / visibleCards;

            cards.forEach(card => {
                card.style.flex = `0 0 ${cardWidth}px`;
                card.style.width = `${cardWidth}px`;
                card.classList.remove("focused");
            });

            // Set the focused class on the center item (or the current item on single view)
            let focusedIndex = currentIndex;
            if (visibleCards === 3) {
                focusedIndex = currentIndex + 1;
            }
            if (cards[focusedIndex]) {
                cards[focusedIndex].classList.add("focused");
            }

            if (!animate) {
                track.style.transition = "none";
            } else {
                track.style.transition = "transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)";
            }

            // Force reflow to flush styles before setting transform
            track.offsetHeight;

            const translateX = -currentIndex * cardWidth;
            track.style.transform = `translate3d(${translateX}px, 0, 0)`;
        };

        const handleTransitionEnd = () => {
            isTransitioning = false;
            // Jump if at prepend clones boundary (currentIndex < cloneCount)
            if (currentIndex < cloneCount) {
                currentIndex = currentIndex + totalOriginal;
                updateCarousel(false);
            }
            // Jump if at append clones boundary (currentIndex >= cloneCount + totalOriginal)
            else if (currentIndex >= cloneCount + totalOriginal) {
                currentIndex = currentIndex - totalOriginal;
                updateCarousel(false);
            }
        };

        track.addEventListener("transitionend", handleTransitionEnd);

        const slideTo = (index) => {
            if (isTransitioning) return;

            const containerWidth = track.parentElement.getBoundingClientRect().width;
            const cardWidth = containerWidth / getVisibleCardsCount();
            const targetTranslateX = -index * cardWidth;

            // Get current translateX
            const currentTranslateX = getTranslateX();

            // If the change in position is negligible, do not trigger a transition to prevent locking
            if (Math.abs(currentTranslateX - targetTranslateX) < 1) {
                currentIndex = index;
                track.style.transition = "transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)";
                track.style.transform = `translate3d(${targetTranslateX}px, 0, 0)`;
                return;
            }

            isTransitioning = true;
            currentIndex = index;
            updateCarousel(true);
        };

        const slideNext = () => {
            slideTo(currentIndex + 1);
        };

        const slidePrev = () => {
            slideTo(currentIndex - 1);
        };

        // Navigation button listeners
        nextBtn.addEventListener("click", () => {
            slideNext();
            resetAutoPlay();
        });

        prevBtn.addEventListener("click", () => {
            slidePrev();
            resetAutoPlay();
        });

        // Swipe & Drag support
        let startX = 0;
        let startY = 0;
        let currentTranslate = 0;
        let isDragging = false;
        let isHorizontalSwipe = false;
        let touchDiffX = 0;

        const getTranslateX = () => {
            const style = window.getComputedStyle(track);
            const transform = style.transform || style.webkitTransform;
            if (transform && transform !== 'none') {
                const parts = transform.split(',');
                if (parts.length >= 6) {
                    return parseFloat(parts[4]);
                }
            }
            return 0;
        };

        const touchStart = (e) => {
            if (isTransitioning) return;
            const touch = e.touches[0];
            startX = touch.clientX;
            startY = touch.clientY;
            currentTranslate = getTranslateX();
            isDragging = true;
            isHorizontalSwipe = false;
            touchDiffX = 0;
            track.style.transition = "none";
            stopAutoPlay();
        };

        const touchMove = (e) => {
            if (!isDragging) return;
            const touch = e.touches[0];
            const diffX = touch.clientX - startX;
            const diffY = touch.clientY - startY;
            touchDiffX = diffX;

            // Determine if it is a horizontal swipe or vertical page scroll
            if (!isHorizontalSwipe) {
                if (Math.abs(diffX) > Math.abs(diffY)) {
                    isHorizontalSwipe = true;
                }
            }

            if (isHorizontalSwipe) {
                // Prevent vertical scroll only if swiping horizontally
                if (e.cancelable) e.preventDefault();
                track.style.transform = `translate3d(${currentTranslate + diffX}px, 0, 0)`;
            }
        };

        const touchEnd = () => {
            if (!isDragging) return;
            isDragging = false;
            track.style.transition = "transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)";

            if (isHorizontalSwipe) {
                const containerWidth = track.parentElement.getBoundingClientRect().width;
                const cardWidth = containerWidth / visibleCards;
                const threshold = cardWidth * 0.2; // 20% of card width

                if (touchDiffX < -threshold) {
                    // Swipe left -> next
                    slideTo(currentIndex + 1);
                } else if (touchDiffX > threshold) {
                    // Swipe right -> prev
                    slideTo(currentIndex - 1);
                } else {
                    // Snap back
                    slideTo(currentIndex);
                }
            } else {
                // Snap back if no movement
                slideTo(currentIndex);
            }
            startAutoPlay();
        };

        track.addEventListener("touchstart", touchStart, { passive: false });
        track.addEventListener("touchmove", touchMove, { passive: false });
        track.addEventListener("touchend", touchEnd);

        // Auto-play Setup
        const startAutoPlay = () => {
            stopAutoPlay();
            slideInterval = setInterval(slideNext, 4000);
        };

        const stopAutoPlay = () => {
            if (slideInterval) {
                clearInterval(slideInterval);
                slideInterval = null;
            }
        };

        const resetAutoPlay = () => {
            stopAutoPlay();
            startAutoPlay();
        };

        // Pause auto-play on hover (desktop)
        const container = track.closest(".stars-carousel-container");
        if (container) {
            container.addEventListener("mouseenter", stopAutoPlay);
            container.addEventListener("mouseleave", startAutoPlay);
        }

        // Handle window resize
        let resizeTimeout;
        window.addEventListener("resize", () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                updateCarousel(false);
            }, 100);
        });

        // Initial setup
        updateCarousel(false);
        startAutoPlay();
    };

    // 6. Gallery Infinite Carousel Logic
    const initGalleryCarousel = () => {
        const track = document.getElementById("gallery-carousel-track");
        const prevBtn = document.getElementById("gallery-carousel-prev");
        const nextBtn = document.getElementById("gallery-carousel-next");
        if (!track || !prevBtn || !nextBtn) return;

        const originalCards = Array.from(track.children);
        const totalOriginal = originalCards.length;
        if (totalOriginal === 0) return;

        // Number of visible cards based on responsive breakpoints
        const getVisibleCardsCount = () => {
            const width = window.innerWidth;
            if (width >= 1024) return 4;
            if (width >= 768) return 2;
            return 1;
        };

        let visibleCards = getVisibleCardsCount();
        const cloneCount = 4; // Clone 4 cards to support infinite loop on all breakpoints

        // Clone cards: last 4 prepended, first 4 appended
        const prependClones = originalCards.slice(-cloneCount).map(card => card.cloneNode(true));
        const appendClones = originalCards.slice(0, cloneCount).map(card => card.cloneNode(true));

        // Mark clones so we can distinguish them if needed
        prependClones.forEach(clone => clone.classList.add("clone"));
        appendClones.forEach(clone => clone.classList.add("clone"));

        // Clear and rebuild track
        track.innerHTML = "";
        prependClones.forEach(clone => track.appendChild(clone));
        originalCards.forEach(card => track.appendChild(card));
        appendClones.forEach(clone => track.appendChild(clone));

        const cards = Array.from(track.children);
        let currentIndex = cloneCount; // Starts at first original card
        let isTransitioning = false;
        let slideInterval = null;

        // Set dimensions and position
        const updateCarousel = (animate = true) => {
            const containerWidth = track.parentElement.getBoundingClientRect().width;
            visibleCards = getVisibleCardsCount();
            const cardWidth = containerWidth / visibleCards;

            cards.forEach(card => {
                card.style.flex = `0 0 ${cardWidth}px`;
                card.style.width = `${cardWidth}px`;
            });

            if (!animate) {
                track.style.transition = "none";
            } else {
                track.style.transition = "transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)";
            }

            // Force reflow to flush styles before setting transform
            track.offsetHeight;

            const translateX = -currentIndex * cardWidth;
            track.style.transform = `translate3d(${translateX}px, 0, 0)`;
        };

        const handleTransitionEnd = () => {
            isTransitioning = false;
            // Jump if at prepend clones boundary (currentIndex < cloneCount)
            if (currentIndex < cloneCount) {
                currentIndex = currentIndex + totalOriginal;
                updateCarousel(false);
            }
            // Jump if at append clones boundary (currentIndex >= cloneCount + totalOriginal)
            else if (currentIndex >= cloneCount + totalOriginal) {
                currentIndex = currentIndex - totalOriginal;
                updateCarousel(false);
            }
        };

        track.addEventListener("transitionend", handleTransitionEnd);

        const slideTo = (index) => {
            if (isTransitioning) return;

            const containerWidth = track.parentElement.getBoundingClientRect().width;
            const cardWidth = containerWidth / getVisibleCardsCount();
            const targetTranslateX = -index * cardWidth;

            // Get current translateX
            const currentTranslateX = getTranslateX();

            // If the change in position is negligible, do not trigger a transition to prevent locking
            if (Math.abs(currentTranslateX - targetTranslateX) < 1) {
                currentIndex = index;
                track.style.transition = "transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)";
                track.style.transform = `translate3d(${targetTranslateX}px, 0, 0)`;
                return;
            }

            isTransitioning = true;
            currentIndex = index;
            updateCarousel(true);
        };

        const slideNext = () => {
            slideTo(currentIndex + 1);
        };

        const slidePrev = () => {
            slideTo(currentIndex - 1);
        };

        // Navigation button listeners
        nextBtn.addEventListener("click", () => {
            slideNext();
            resetAutoPlay();
        });

        prevBtn.addEventListener("click", () => {
            slidePrev();
            resetAutoPlay();
        });

        // Swipe & Drag support
        let startX = 0;
        let startY = 0;
        let currentTranslate = 0;
        let isDragging = false;
        let isHorizontalSwipe = false;
        let touchDiffX = 0;

        const getTranslateX = () => {
            const style = window.getComputedStyle(track);
            const transform = style.transform || style.webkitTransform;
            if (transform && transform !== 'none') {
                const parts = transform.split(',');
                if (parts.length >= 6) {
                    return parseFloat(parts[4]);
                }
            }
            return 0;
        };

        const touchStart = (e) => {
            if (isTransitioning) return;
            const touch = e.touches[0];
            startX = touch.clientX;
            startY = touch.clientY;
            currentTranslate = getTranslateX();
            isDragging = true;
            isHorizontalSwipe = false;
            touchDiffX = 0;
            track.style.transition = "none";
            stopAutoPlay();
        };

        const touchMove = (e) => {
            if (!isDragging) return;
            const touch = e.touches[0];
            const diffX = touch.clientX - startX;
            const diffY = touch.clientY - startY;
            touchDiffX = diffX;

            // Determine if it is a horizontal swipe or vertical page scroll
            if (!isHorizontalSwipe) {
                if (Math.abs(diffX) > Math.abs(diffY)) {
                    isHorizontalSwipe = true;
                }
            }

            if (isHorizontalSwipe) {
                // Prevent vertical scroll only if swiping horizontally
                if (e.cancelable) e.preventDefault();
                track.style.transform = `translate3d(${currentTranslate + diffX}px, 0, 0)`;
            }
        };

        const touchEnd = () => {
            if (!isDragging) return;
            isDragging = false;
            track.style.transition = "transform 0.6s cubic-bezier(0.16, 1, 0.3, 1)";

            if (isHorizontalSwipe) {
                const containerWidth = track.parentElement.getBoundingClientRect().width;
                const cardWidth = containerWidth / visibleCards;
                const threshold = cardWidth * 0.2; // 20% of card width

                if (touchDiffX < -threshold) {
                    // Swipe left -> next
                    slideTo(currentIndex + 1);
                } else if (touchDiffX > threshold) {
                    // Swipe right -> prev
                    slideTo(currentIndex - 1);
                } else {
                    // Snap back
                    slideTo(currentIndex);
                }
            } else {
                // Snap back if no movement
                slideTo(currentIndex);
            }
            startAutoPlay();
        };

        track.addEventListener("touchstart", touchStart, { passive: false });
        track.addEventListener("touchmove", touchMove, { passive: false });
        track.addEventListener("touchend", touchEnd);

        // Auto-play Setup
        const startAutoPlay = () => {
            stopAutoPlay();
            slideInterval = setInterval(slideNext, 4000);
        };

        const stopAutoPlay = () => {
            if (slideInterval) {
                clearInterval(slideInterval);
                slideInterval = null;
            }
        };

        const resetAutoPlay = () => {
            stopAutoPlay();
            startAutoPlay();
        };

        // Pause auto-play on hover (desktop)
        const container = track.closest(".gallery-carousel-container");
        if (container) {
            container.addEventListener("mouseenter", stopAutoPlay);
            container.addEventListener("mouseleave", startAutoPlay);
        }

        // Handle window resize
        let resizeTimeout;
        window.addEventListener("resize", () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                updateCarousel(false);
            }, 100);
        });

        // Initial setup
        updateCarousel(false);
        startAutoPlay();
    };

    // 7. Lightbox Modal Logic
    const initLightbox = () => {
        // Create lightbox HTML dynamically if it doesn't exist
        if (!document.getElementById("custom-lightbox")) {
            const lightboxDiv = document.createElement("div");
            lightboxDiv.id = "custom-lightbox";
            lightboxDiv.className = "custom-lightbox";
            lightboxDiv.setAttribute("aria-hidden", "true");
            lightboxDiv.innerHTML = `
                <button class="lightbox-close" id="lightbox-close" aria-label="Close lightbox">
                    <i class="bi bi-x-lg"></i>
                </button>
                <div class="lightbox-content">
                    <img id="lightbox-img" src="" alt="Enlarged view">
                </div>
            `;
            document.body.appendChild(lightboxDiv);
        }

        const lightbox = document.getElementById("custom-lightbox");
        const lightboxImg = document.getElementById("lightbox-img");
        const closeBtn = document.getElementById("lightbox-close");

        let touchStartX = 0;
        let touchStartY = 0;
        let isTouchMovement = false;

        const openLightbox = (src) => {
            if (!src) return;
            lightboxImg.src = src;
            lightbox.classList.add("active");
            lightbox.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden"; // Prevent background scrolling
        };

        const closeLightbox = () => {
            lightbox.classList.remove("active");
            lightbox.setAttribute("aria-hidden", "true");
            document.body.style.overflow = ""; // Restore scrolling
            setTimeout(() => {
                if (!lightbox.classList.contains("active")) {
                    lightboxImg.src = "";
                }
            }, 400);
        };

        // Event listeners for closing
        closeBtn.addEventListener("click", closeLightbox);
        lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox || e.target === closeBtn) {
                closeLightbox();
            }
        });

        // Close on Escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && lightbox.classList.contains("active")) {
                closeLightbox();
            }
        });

        // Helper to detect if a swipe happened instead of a click
        const markTouchStart = (e) => {
            touchStartX = e.touches[0].clientX;
            touchStartY = e.touches[0].clientY;
            isTouchMovement = false;
        };

        const checkTouchMove = (e) => {
            const diffX = Math.abs(e.touches[0].clientX - touchStartX);
            const diffY = Math.abs(e.touches[0].clientY - touchStartY);
            if (diffX > 10 || diffY > 10) {
                isTouchMovement = true;
            }
        };

        const resetClickFlag = () => {
            isTouchMovement = false;
        };

        // 1. Stars Await Carousel or static grid
        const starsTrack = document.getElementById("stars-carousel-track");
        if (starsTrack) {
            starsTrack.addEventListener("touchstart", markTouchStart, { passive: true });
            starsTrack.addEventListener("touchmove", checkTouchMove, { passive: true });
            starsTrack.addEventListener("mousedown", resetClickFlag, { passive: true });
            starsTrack.addEventListener("click", (e) => {
                if (isTouchMovement) return;
                const card = e.target.closest(".stars-carousel-card");
                if (card) {
                    const img = card.querySelector("img");
                    if (img) {
                        openLightbox(img.src);
                    }
                }
            });
        } else {
            const artisanGrid = document.querySelector(".artisan-grid");
            if (artisanGrid) {
                artisanGrid.addEventListener("click", (e) => {
                    const card = e.target.closest(".artisan-card-wrapper");
                    if (card) {
                        const img = card.querySelector("img");
                        if (img) {
                            openLightbox(img.src);
                        }
                    }
                });
            }
        }

        // 2. Gallery Carousel
        const galleryTrack = document.getElementById("gallery-carousel-track");
        if (galleryTrack) {
            galleryTrack.addEventListener("touchstart", markTouchStart, { passive: true });
            galleryTrack.addEventListener("touchmove", checkTouchMove, { passive: true });
            galleryTrack.addEventListener("mousedown", resetClickFlag, { passive: true });
            galleryTrack.addEventListener("click", (e) => {
                if (isTouchMovement) return;
                const card = e.target.closest(".gallery-carousel-card");
                if (card) {
                    const img = card.querySelector("img");
                    if (img) {
                        openLightbox(img.src);
                    }
                }
            });
        }

        // 3. Activities Carousel (marquee track) or static grid
        const activitiesTrack = document.querySelector(".activity-track");
        if (activitiesTrack) {
            activitiesTrack.addEventListener("touchstart", markTouchStart, { passive: true });
            activitiesTrack.addEventListener("touchmove", checkTouchMove, { passive: true });
            activitiesTrack.addEventListener("mousedown", resetClickFlag, { passive: true });
            activitiesTrack.addEventListener("click", (e) => {
                if (isTouchMovement) return;
                const activityDiv = e.target.closest(".activity");
                if (activityDiv) {
                    const bgStyle = window.getComputedStyle(activityDiv).backgroundImage;
                    if (bgStyle && bgStyle !== "none") {
                        const urlMatch = bgStyle.match(/url\(["']?([^"']+)["']?\)/);
                        if (urlMatch && urlMatch[1]) {
                            openLightbox(urlMatch[1]);
                        }
                    }
                }
            });
        } else {
            const activitiesGrid = document.querySelector(".activities-grid");
            if (activitiesGrid) {
                activitiesGrid.addEventListener("click", (e) => {
                    const card = e.target.closest(".activity-card-new");
                    if (card) {
                        const bgStyle = window.getComputedStyle(card).backgroundImage;
                        if (bgStyle && bgStyle !== "none") {
                            const urlMatch = bgStyle.match(/url\(["']?([^"']+)["']?\)/);
                            if (urlMatch && urlMatch[1]) {
                                let cleanUrl = urlMatch[1].replace(/^['"]|['"]$/g, '');
                                openLightbox(cleanUrl);
                            }
                        }
                    }
                });
            }
        }

    };

    // 4. Tents Showcase Carousel
    function initTentsCarousel() {
        const tentsCarousel = document.getElementById("tentsCarousel");
        if (tentsCarousel) {
            tentsCarousel.addEventListener("slide.bs.carousel", function (event) {
                const activeIndex = event.to + 1;
                const totalSlides = event.target.querySelectorAll(".carousel-item").length;
                const counter = document.getElementById("tents-carousel-counter");
                if (counter) {
                    counter.textContent = `${activeIndex} / ${totalSlides}`;
                }
            });
        }
    }

    initStarsCarousel();
    initGalleryCarousel();
    initLightbox();
    initTentsCarousel();
    initGuestTestimonialsCarousel();

    // 5. Guest Testimonials Carousel & Lightbox Logic
    function initGuestTestimonialsCarousel() {
        const testimonialsData = [
            {
                title: "Rann Utsav Dhordo — Wonderful Experience",
                text: "“Had a wonderful experience at Rann Utsav and Tent City!\nThe travel arrangements were perfectly managed — smooth transfers, comfortable stay, and excellent coordination throughout the trip.\n\nEverything was well-organized, allowing us to truly enjoy the beauty of the White Rann without any stress.\n\nHighly recommend their services for a hassle-free and memorable trip!”",
                author: "Siddhesh Kesarkar & Family",
                badge: "Booked via Majestic Escape 🤍",
                photos: [
                    "./assets/testimonials/testimonial1-1.jpg"
                ]
            },
            {
                title: "Luxury in the Middle of the Desert — Tent City",
                text: "“From cultural vibes to peaceful sunsets, every moment at Tent City was picture-perfect.\n\nSimple moments, unforgettable experience. Luxury in the middle of the desert — Tent City at Rann of Kutch exceeded all expectations.\n\nGreat experience from start to finish. Super simple process and excellent service.”",
                author: "Manvi & Family",
                badge: "Booked via Majestic Escape 💛",
                photos: [
                    "./assets/testimonials/testimonial2-1.jpg",
                    "./assets/testimonials/testimonial2-2.jpg",
                    "./assets/testimonials/testimonial2-3.jpg",
                    "./assets/testimonials/testimonial2-4.jpg",
                    "./assets/testimonials/testimonial2-5.jpg",
                    "./assets/testimonials/testimonial2-6.jpg",
                    "./assets/testimonials/testimonial2-7.jpg"
                ]
            },
            {
                title: "Amazing Experience & Outstanding Hospitality",
                text: "“Just an amazing experience at Rann Utsav, Dhordo.\n\nThe hospitality and management were outstanding — everything went exactly the way we planned.\n\nFood was amazing and the tents were very well equipped.”",
                author: "Maitri Kalola & Family",
                badge: "Booked via Majestic Escape 🤍",
                photos: [
                    "./assets/testimonials/testimonial3-1.jpg",
                    "./assets/testimonials/testimonial3-2.jpg",
                    "./assets/testimonials/testimonial3-3.jpg",
                    "./assets/testimonials/testimonial3-4.jpg",
                    "./assets/testimonials/testimonial3-5.jpg"
                ]
            },
            {
                title: "Ancient Feel with Ultimate Modern Comfort",
                text: "“It was amazing 🤩 Enjoyed a lot — totally worth it!\n\nThe tents gave an ancient feel, as if we were taken back in time… yet they were extremely comfortable.”",
                author: "Ujala Sahu & Family",
                badge: "Booked via Majestic Escape",
                photos: [
                    "./assets/testimonials/testimonial4-1.jpg",
                    "./assets/testimonials/testimonial4-2.jpg",
                    "./assets/testimonials/testimonial4-3.jpg",
                    "./assets/testimonials/testimonial4-4.jpg",
                    "./assets/testimonials/testimonial4-5.jpg",
                    "./assets/testimonials/testimonial4-6.jpg"
                ]
            },
            {
                title: "Seamless & Delightful New Year Trip",
                text: "“Majestic Escape planned our New Year trip to Rann, and it was a truly seamless and delightful experience. Their team was prompt, extremely well-organized, and transparent, which made the entire process completely hassle-free.\n\nFrom planning to execution, they provided constant assistance and hand-holding, ensuring everything flowed smoothly without any stress for us.”",
                author: "Jagpreet Kaur & Family",
                badge: "Booked via Majestic Escape ✨",
                photos: [
                    "./assets/testimonials/testimonial5-1.jpg",
                    "./assets/testimonials/testimonial5-2.jpg"
                ]
            },
            {
                title: "Exquisite Dining & Peaceful Retreat",
                text: "“Dhordo Tent City was beautifully managed from the moment we stepped inside — the dining experience and food quality were truly exquisite.\n\nDholavira offered a peaceful and memorable retreat where our family bonded effortlessly. Both kids and my Family loved the entire experience booked through Majestic Escape.”",
                author: "Rahul Ranade & Family",
                badge: "Booked via Majestic Escape 🤍",
                photos: [
                    "./assets/testimonials/testimonial6-1.jpg",
                    "./assets/testimonials/testimonial6-2.jpg"
                ]
            },
            {
                title: "Dholavira Tent City — Perfect Blend of Comfort & History",
                text: "“Dholavira Tent City was a perfect blend of comfort and history. Staying so close to the Harappan site made the experience truly special. Peaceful stay at Tent City, great hospitality, clean tents and warm service – a memorable stay for our family!”",
                author: "Deepa & Family",
                badge: "Booked via Majestic Escape 🤍",
                photos: [
                    "./assets/testimonials/testimonial7-1.jpg",
                    "./assets/testimonials/testimonial7-2.jpg",
                    "./assets/testimonials/testimonial7-3.jpg",
                    "./assets/testimonials/testimonial7-4.jpg",
                    "./assets/testimonials/testimonial7-5.jpg",
                    "./assets/testimonials/testimonial7-6.jpg",
                    "./assets/testimonials/testimonial7-7.jpg",
                    "./assets/testimonials/testimonial7-8.jpg",
                    "./assets/testimonials/testimonial7-9.jpg"
                ]
            },
            {
                title: "Mesmerizing Experience & Scrumptious Meals",
                text: "“The experience with Majestic Escape and Gujarat Tourism was truly mesmerizing. Everything was very smooth — right from arriving at Bhuj station, check-in at both properties, to sightseeing tours.\n\nSpecial mention to the smooth booking process, the right guidance, the warm hospitality, and the wide & scrumptious meals. Everything was just perfect! We will definitely recommend others. Cannot thank you enough!”",
                author: "Vanshika Garg & Family",
                badge: "Booked via Majestic Escape 🤍",
                photos: [
                    "./assets/testimonials/testimonial8-1.jpg",
                    "./assets/testimonials/testimonial8-2.jpg",
                    "./assets/testimonials/testimonial8-3.jpg"
                ]
            }
        ];

        let currentIndex = 0;
        let autoplayInterval = null;
        let isAnimating = false;

        const card = document.getElementById("testimonial-card");
        const titleEl = document.getElementById("testimonial-title");
        const textEl = document.getElementById("testimonial-text");
        const photosEl = document.getElementById("testimonial-photos");
        const prevBtn = document.getElementById("testimonial-prev-btn");
        const nextBtn = document.getElementById("testimonial-next-btn");
        const dotsContainer = document.getElementById("testimonial-dots");
        const cardOuter = document.getElementById("testimonial-card-outer");

        const lightbox = document.getElementById("testimonial-lightbox");
        const lightboxImg = document.getElementById("testimonial-lightbox-img");
        const lightboxCloseBtn = document.getElementById("lightbox-close-btn");
        const lightboxBackdrop = document.getElementById("lightbox-backdrop");

        if (!card || !titleEl || !textEl || !photosEl) return;

        // Render Pagination Dots
        function renderDots() {
            if (!dotsContainer) return;
            dotsContainer.innerHTML = "";
            testimonialsData.forEach((_, idx) => {
                const dot = document.createElement("button");
                dot.className = `testimonial-dot ${idx === currentIndex ? 'active' : ''}`;
                dot.setAttribute("aria-label", `Go to slide ${idx + 1}`);
                dot.addEventListener("click", () => {
                    if (idx !== currentIndex) {
                        goToSlide(idx);
                        resetAutoplay();
                    }
                });
                dotsContainer.appendChild(dot);
            });
        }

        // Render Testimonial Card Content
        function renderCard(index) {
            const data = testimonialsData[index];
            titleEl.textContent = data.title;

            // Format Review Text (Lead quote vs Body text)
            textEl.innerHTML = "";
            const rawText = data.text || "";
            const parts = rawText.split("\n\n").filter(p => p.trim().length > 0);
            if (parts.length > 0) {
                const leadP = document.createElement("p");
                leadP.className = "testimonial-quote-lead";
                leadP.textContent = parts[0];
                textEl.appendChild(leadP);

                for (let i = 1; i < parts.length; i++) {
                    const bodyP = document.createElement("p");
                    bodyP.className = "testimonial-quote-body";
                    bodyP.textContent = parts[i];
                    textEl.appendChild(bodyP);
                }
            } else {
                textEl.textContent = rawText;
            }

            // Populate Special Author & Badge Section
            const authorEl = document.getElementById("testimonial-author");
            const badgeEl = document.getElementById("testimonial-badge");
            const wrapperEl = document.getElementById("testimonial-author-wrapper");

            if (authorEl) authorEl.textContent = data.author ? `— ${data.author}` : "";
            if (badgeEl) {
                if (data.badge) {
                    const cleanBadge = data.badge.replace(/[🤍💛✨]/g, '').trim();
                    badgeEl.innerHTML = `<span class="badge-dot">•</span> ${cleanBadge}`;
                    badgeEl.style.display = "inline-flex";
                } else {
                    badgeEl.style.display = "none";
                }
            }
            if (wrapperEl) {
                wrapperEl.style.display = (data.author || data.badge) ? "block" : "none";
            }

            // Featured Main Photo & Thumbnails
            const featuredImg = document.getElementById("testimonial-featured-img");
            const featuredWrapper = document.getElementById("testimonial-featured-wrapper");
            photosEl.innerHTML = "";
            const photosList = data.photos || [];
            const totalPhotos = photosList.length;

            let selectedPhotoIndex = 0;

            const updateFeaturedImage = (idx) => {
                if (featuredImg && photosList[idx]) {
                    featuredImg.src = photosList[idx];
                    featuredImg.alt = `${data.title} Featured Photo ${idx + 1}`;
                }
                const thumbs = photosEl.querySelectorAll(".guest-thumb-wrapper");
                thumbs.forEach((thumb, tIdx) => {
                    if (tIdx === idx) {
                        thumb.classList.add("active-thumb");
                    } else {
                        thumb.classList.remove("active-thumb");
                    }
                });
            };

            if (featuredImg) {
                if (totalPhotos > 0) {
                    featuredImg.src = photosList[0];
                    if (featuredWrapper) featuredWrapper.style.display = "block";

                    const newFeaturedImg = featuredImg.cloneNode(true);
                    featuredImg.parentNode.replaceChild(newFeaturedImg, featuredImg);

                    newFeaturedImg.addEventListener("click", () => {
                        openTestimonialLightbox(photosList, selectedPhotoIndex);
                    });
                } else {
                    if (featuredWrapper) featuredWrapper.style.display = "none";
                }
            }

            // Render Thumbnails (Max 4 visible, 4th has "+N Photos" overlay if total > 4)
            if (totalPhotos > 0) {
                const maxVisible = 4;
                const showOverlay = totalPhotos > maxVisible;
                const visibleCount = showOverlay ? maxVisible : totalPhotos;

                for (let i = 0; i < visibleCount; i++) {
                    const wrapper = document.createElement("div");
                    wrapper.className = `guest-thumb-wrapper ${i === 0 ? 'active-thumb' : ''}`;

                    const img = document.createElement("img");
                    img.src = photosList[i];
                    img.alt = `${data.title} Thumbnail ${i + 1}`;
                    img.className = "guest-thumb-img";
                    wrapper.appendChild(img);

                    // Check if 4th item needs +N overlay
                    if (showOverlay && i === maxVisible - 1) {
                        const remainingCount = totalPhotos - 3;
                        const overlay = document.createElement("div");
                        overlay.className = "guest-photo-overlay";
                        overlay.innerHTML = `+${remainingCount}<br><span style="font-size:0.75rem;font-weight:600;">Photos</span>`;
                        wrapper.appendChild(overlay);
                    }

                    wrapper.addEventListener("click", (e) => {
                        e.stopPropagation();
                        selectedPhotoIndex = i;
                        updateFeaturedImage(i);
                        if (showOverlay && i === maxVisible - 1) {
                            openTestimonialLightbox(photosList, i);
                        }
                    });

                    photosEl.appendChild(wrapper);
                }
            }

            // Update active dot
            if (dotsContainer) {
                const dots = dotsContainer.querySelectorAll(".testimonial-dot");
                dots.forEach((dot, idx) => {
                    if (idx === index) {
                        dot.classList.add("active");
                    } else {
                        dot.classList.remove("active");
                    }
                });
            }
        }

        // Transition to specific slide
        function goToSlide(newIndex, direction = "next") {
            if (isAnimating) return;
            isAnimating = true;

            card.classList.remove("animating-in");
            card.classList.add("animating-out");

            setTimeout(() => {
                currentIndex = newIndex;
                renderCard(currentIndex);

                card.classList.remove("animating-out");
                card.classList.add("animating-in");

                setTimeout(() => {
                    card.classList.remove("animating-in");
                    isAnimating = false;
                }, 380);
            }, 300);
        }

        function nextSlide() {
            const nextIdx = (currentIndex + 1) % testimonialsData.length;
            goToSlide(nextIdx, "next");
        }

        function prevSlide() {
            const prevIdx = (currentIndex - 1 + testimonialsData.length) % testimonialsData.length;
            goToSlide(prevIdx, "prev");
        }

        // Event Listeners for Navigation
        if (prevBtn) prevBtn.addEventListener("click", () => { prevSlide(); resetAutoplay(); });
        if (nextBtn) nextBtn.addEventListener("click", () => { nextSlide(); resetAutoplay(); });

        // Autoplay logic (every 7 seconds)
        function startAutoplay() {
            stopAutoplay();
            autoplayInterval = setInterval(nextSlide, 7000);
        }

        function stopAutoplay() {
            if (autoplayInterval) {
                clearInterval(autoplayInterval);
                autoplayInterval = null;
            }
        }

        function resetAutoplay() {
            startAutoplay();
        }

        // Pause autoplay on hover over card
        if (cardOuter) {
            cardOuter.addEventListener("mouseenter", stopAutoplay);
            cardOuter.addEventListener("mouseleave", startAutoplay);
        }

        // Mobile Touch Swipe Logic
        let touchStartX = 0;
        let touchEndX = 0;

        if (cardOuter) {
            cardOuter.addEventListener("touchstart", (e) => {
                touchStartX = e.changedTouches[0].screenX;
            }, { passive: true });

            cardOuter.addEventListener("touchend", (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, { passive: true });
        }

        function handleSwipe() {
            const swipeThreshold = 40;
            if (touchEndX < touchStartX - swipeThreshold) {
                nextSlide();
                resetAutoplay();
            } else if (touchEndX > touchStartX + swipeThreshold) {
                prevSlide();
                resetAutoplay();
            }
        }

        // Lightbox Functions & Photo Carousel Navigation
        let activePhotoIndex = 0;
        let activePhotosList = [];

        const lightboxPrevBtn = document.getElementById("testimonial-lightbox-prev");
        const lightboxNextBtn = document.getElementById("testimonial-lightbox-next");
        const lightboxCounter = document.getElementById("testimonial-lightbox-counter");

        function updateLightboxPhoto(index) {
            if (!activePhotosList || activePhotosList.length === 0) return;
            activePhotoIndex = (index + activePhotosList.length) % activePhotosList.length;
            lightboxImg.src = activePhotosList[activePhotoIndex];
            if (lightboxCounter) {
                lightboxCounter.textContent = `${activePhotoIndex + 1} / ${activePhotosList.length}`;
            }
            if (lightboxPrevBtn) {
                lightboxPrevBtn.style.display = activePhotosList.length > 1 ? "flex" : "none";
            }
            if (lightboxNextBtn) {
                lightboxNextBtn.style.display = activePhotosList.length > 1 ? "flex" : "none";
            }
        }

        function openTestimonialLightbox(photosArray, startIndex = 0) {
            if (!lightbox || !lightboxImg) return;
            activePhotosList = Array.isArray(photosArray) ? photosArray : [photosArray];
            updateLightboxPhoto(startIndex);
            lightbox.classList.add("active");
            document.body.style.overflow = "hidden";
        }

        function closeTestimonialLightbox() {
            if (!lightbox) return;
            lightbox.classList.remove("active");
            document.body.style.overflow = "";
        }

        if (lightboxPrevBtn) {
            lightboxPrevBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                updateLightboxPhoto(activePhotoIndex - 1);
            });
        }
        if (lightboxNextBtn) {
            lightboxNextBtn.addEventListener("click", (e) => {
                e.stopPropagation();
                updateLightboxPhoto(activePhotoIndex + 1);
            });
        }

        if (lightboxCloseBtn) lightboxCloseBtn.addEventListener("click", closeTestimonialLightbox);
        if (lightboxBackdrop) lightboxBackdrop.addEventListener("click", closeTestimonialLightbox);

        document.addEventListener("keydown", (e) => {
            if (lightbox && lightbox.classList.contains("active")) {
                if (e.key === "Escape") {
                    closeTestimonialLightbox();
                } else if (e.key === "ArrowLeft" && activePhotosList.length > 1) {
                    updateLightboxPhoto(activePhotoIndex - 1);
                } else if (e.key === "ArrowRight" && activePhotosList.length > 1) {
                    updateLightboxPhoto(activePhotoIndex + 1);
                }
            }
        });

        // Initialize carousel
        renderDots();
        renderCard(currentIndex);
        startAutoplay();
    }
});

// Global function to change tent details image from thumbnail
window.changeTentImage = function(tentId, imgSrc, thumbElement) {
    const mainImg = document.getElementById(tentId + "-main-img");
    if (mainImg) {
        mainImg.src = imgSrc;
    }
    const parentRow = thumbElement.closest(".tent-thumbnails");
    if (parentRow) {
        const thumbs = parentRow.querySelectorAll("img");
        thumbs.forEach(t => t.classList.remove("active-thumb"));
    }
    thumbElement.classList.add("active-thumb");
};
