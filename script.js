// =================== UNIVERSAL IMAGE WEBP FALLBACK ===================
document.addEventListener('error', function (e) {
    if (e.target && e.target.tagName === 'IMG') {
        const img = e.target;
        if (!img.dataset.fallbackTried && img.src && img.src.indexOf('.webp') !== -1) {
            img.dataset.fallbackTried = '1';
            const originalSrc = img.src;
            const pngSrc = originalSrc.replace(/\.webp($|\?)/i, '.png$1');
            const testImg = new Image();
            testImg.onload = function () { img.src = pngSrc; };
            testImg.onerror = function () {
                const jpgSrc = originalSrc.replace(/\.webp($|\?)/i, '.jpg$1');
                const testJpg = new Image();
                testJpg.onload = function () { img.src = jpgSrc; };
                testJpg.onerror = function () {
                    img.src = originalSrc.replace(/\.webp($|\?)/i, '.jpeg$1');
                };
                testJpg.src = jpgSrc;
            };
            testImg.src = pngSrc;
        }
    }
}, true);

// =================== PAGE LOADER ===================
window.addEventListener('load', () => {
    const pageLoader = document.getElementById('page-loader');
    if (pageLoader) {
        pageLoader.classList.add('hidden');
    }

    const bgVideo = document.getElementById('hero-bg-video');
    if (bgVideo) {
        // Ensure video is ready before playing to avoid stuttering
        bgVideo.load();

        // Use canplay event for smooth initial play
        const playVideo = () => {
            bgVideo.play().catch(() => {
                // Autoplay blocked — silently fail, static bg remains
            });
        };

        if (bgVideo.readyState >= 3) {
            playVideo();
        } else {
            bgVideo.addEventListener('canplay', playVideo, { once: true });
        }

        // Pause video when not visible to save GPU resources
        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    bgVideo.play().catch(() => {});
                } else {
                    bgVideo.pause();
                }
            },
            { threshold: 0.1 }
        );
        observer.observe(bgVideo.closest('#hero') || bgVideo);
    }
});


// =================== HEADER SCROLL / MOBILE MENU / SCROLL TO TOP ===================
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.querySelector('.hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeBtn = document.getElementById('mobile-menu-close-btn');
    const header = document.getElementById('header');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.add('active');
            mobileMenu.classList.add('open');
            document.body.style.overflow = 'hidden';
            hamburger.setAttribute('aria-expanded', 'true');
        });
    }

    if (closeBtn && mobileMenu && hamburger) {
        closeBtn.addEventListener('click', () => {
            hamburger.classList.remove('active');
            mobileMenu.classList.remove('open');
            document.body.style.overflow = '';
            hamburger.setAttribute('aria-expanded', 'false');
        });
    }

    // Mobile dropdown toggles
    const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            const submenu = toggle.nextElementSibling;
            if (submenu && submenu.classList.contains('mobile-submenu')) {
                const isOpen = submenu.classList.contains('open');
                submenu.classList.toggle('open');
                toggle.setAttribute('aria-expanded', !isOpen);
            }
        });
    });

    // Header scroll
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }, { passive: true });
        // Trigger once on load
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        }
    }
});
// ==================================================================================

// =================== SCROLL REVEAL ===================
const revealEls = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('visible');
            revealObserver.unobserve(e.target);
        }
    });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
revealEls.forEach(el => revealObserver.observe(el));

// =================== SCROLL TO TOP ===================
// NOTE: Handled by components.js (button lives inside shared footer.html)

// =================== TESTIMONIALS SLIDER ===================
const track = document.getElementById('testimonialsTrack');
if (track) {
    const cards = track.querySelectorAll('.testimonial-card');
    const dotsContainer = document.getElementById('tDots');
    let currentIndex = 0;
    let cardsPerView = 1;
    let totalSlides = 0;

    const getCardsPerView = () => {
        const w = window.innerWidth;
        if (w >= 1024) return 3;
        if (w >= 768) return 2;
        return 1;
    };

    const buildDots = () => {
        dotsContainer.innerHTML = '';
        for (let i = 0; i < totalSlides; i++) {
            const dot = document.createElement('button');
            dot.className = 'tctrl-dot' + (i === 0 ? ' active' : '');
            dot.setAttribute('role', 'tab');
            dot.setAttribute('aria-label', `Go to slide ${i + 1}`);
            dot.setAttribute('aria-selected', i === 0 ? 'true' : 'false');
            dot.addEventListener('click', () => goTo(i));
            dotsContainer.appendChild(dot);
        }
    };

    const updateSlider = () => {
        cardsPerView = getCardsPerView();
        totalSlides = Math.ceil(cards.length / cardsPerView);
        currentIndex = Math.min(currentIndex, totalSlides - 1);
        buildDots();
        updatePosition();
    };

    const updatePosition = () => {
        const cardW = cards[0].getBoundingClientRect().width + 24;
        track.style.transform = `translateX(-${currentIndex * cardsPerView * cardW}px)`;
        dotsContainer.querySelectorAll('.tctrl-dot').forEach((d, i) => {
            d.classList.toggle('active', i === currentIndex);
            d.setAttribute('aria-selected', i === currentIndex ? 'true' : 'false');
        });
    };

    const goTo = (idx) => {
        currentIndex = Math.max(0, Math.min(idx, totalSlides - 1));
        updatePosition();
    };

    const tPrevBtn = document.getElementById('tPrev');
    const tNextBtn = document.getElementById('tNext');
    if (tPrevBtn) tPrevBtn.addEventListener('click', () => goTo(currentIndex - 1));
    if (tNextBtn) tNextBtn.addEventListener('click', () => goTo(currentIndex + 1));

    // Auto-advance
    let autoSlide = setInterval(() => goTo((currentIndex + 1) % totalSlides), 5000);
    track.addEventListener('mouseenter', () => clearInterval(autoSlide));
    track.addEventListener('mouseleave', () => {
        clearInterval(autoSlide);
        autoSlide = setInterval(() => goTo((currentIndex + 1) % totalSlides), 5000);
    });

    window.addEventListener('resize', updateSlider, { passive: true });
    updateSlider();
}

// =================== SMOOTH SCROLL FOR NAV ===================
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        const href = a.getAttribute('href');
        if (href && href !== '#' && href.startsWith('#')) {
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                const offset = target.getBoundingClientRect().top + window.scrollY - 80;
                window.scrollTo({ top: offset, behavior: 'smooth' });
            }
        }
    });
});

// =================== MOUSE PARALLAX (BACKGROUND ORBS) ===================
const heroSection = document.getElementById('hero');
const ambientOrbs = document.querySelectorAll('.orb');

if (heroSection && ambientOrbs.length > 0) {
    heroSection.addEventListener('mousemove', (e) => {
        const { width, height, left, top } = heroSection.getBoundingClientRect();

        // Calculate mouse relative coordinates from the center of the hero section (-1 to 1)
        const mouseX = ((e.clientX - left) - width / 2) / (width / 2);
        const mouseY = ((e.clientY - top) - height / 2) / (height / 2);

        ambientOrbs.forEach((orb, index) => {
            // Give different speeds to different orbs for high-end parallax depth
            const speed = (index + 1) * 15;
            const transX = mouseX * speed;
            const transY = mouseY * speed;

            orb.style.transform = `translate3d(${transX}px, ${transY}px, 0)`;
        });
    });

    // Reset smoothly when cursor leaves the hero section
    heroSection.addEventListener('mouseleave', () => {
        ambientOrbs.forEach(orb => {
            orb.style.transition = 'transform 1.0s cubic-bezier(0.16, 1, 0.3, 1)';
            orb.style.transform = `translate3d(0, 0, 0)`;

            setTimeout(() => {
                orb.style.transition = '';
            }, 1000);
        });
    });
}

// =================== VIEWPORT-AWARE PLAYBACK ===================
const heroVideo = document.getElementById('hero-bg-video');
if (heroVideo) {
    const videoObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                heroVideo.play().catch(err => {
                    console.log('Video autoplay interrupted or deferred:', err);
                });
            } else {
                heroVideo.pause();
            }
        });
    }, { threshold: 0.05 });
    videoObserver.observe(heroVideo);
}

// =================== FAQ ACCORDION INTERACTION ===================
document.querySelectorAll('.faq-trigger').forEach(trigger => {
    trigger.addEventListener('click', () => {
        const item = trigger.closest('.faq-item');
        const content = item.querySelector('.faq-content');
        const isOpen = item.classList.contains('active');

        // Close all other open items
        document.querySelectorAll('.faq-item.active').forEach(openItem => {
            if (openItem !== item) {
                openItem.classList.remove('active');
                openItem.querySelector('.faq-trigger').setAttribute('aria-expanded', 'false');
                openItem.querySelector('.faq-content').style.maxHeight = null;
                openItem.querySelector('.faq-content').setAttribute('aria-hidden', 'true');
            }
        });

        // Toggle the clicked item
        if (isOpen) {
            item.classList.remove('active');
            trigger.setAttribute('aria-expanded', 'false');
            content.style.maxHeight = null;
            content.setAttribute('aria-hidden', 'true');
        } else {
            item.classList.add('active');
            trigger.setAttribute('aria-expanded', 'true');
            content.style.maxHeight = content.scrollHeight + 'px';
            content.setAttribute('aria-hidden', 'false');
        }
    });
});

// =================== CONTACT FORM SUBMISSION ===================
const contactForm = document.getElementById('contact-form-submit');
if (contactForm) {
    const catSelect = document.getElementById('contact-category');
    const otherInput = document.getElementById('contact-category-other');
    const cancelBtn = document.getElementById('cancel-other-btn');

    if (catSelect && otherInput && cancelBtn) {
        catSelect.addEventListener('change', () => {
            if (catSelect.value === 'other') {
                catSelect.style.display = 'none';
                otherInput.style.display = 'block';
                cancelBtn.style.display = 'block';
                otherInput.setAttribute('required', '');
                otherInput.focus();
            }
        });

        cancelBtn.addEventListener('click', () => {
            otherInput.style.display = 'none';
            cancelBtn.style.display = 'none';
            catSelect.style.display = 'block';
            catSelect.value = '';
            otherInput.removeAttribute('required');
            otherInput.value = '';
            catSelect.focus();
        });
    }

    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // Clear existing errors
        contactForm.querySelectorAll('.error-msg').forEach(el => el.remove());
        contactForm.querySelectorAll('.form-input').forEach(el => el.classList.remove('error'));

        let isValid = true;

        const showError = (input, msg) => {
            input.classList.add('error');
            const formGroup = input.closest('.form-group');
            // Only add one error message per form-group to avoid duplicates
            if (formGroup && !formGroup.querySelector('.error-msg')) {
                const errorSpan = document.createElement('span');
                errorSpan.className = 'error-msg';
                errorSpan.innerText = msg;
                formGroup.appendChild(errorSpan);
            }
            isValid = false;
        };

        const nameInput = document.getElementById('contact-name');
        const companyInput = document.getElementById('contact-company');
        const emailInput = document.getElementById('contact-email');
        const phoneInput = document.getElementById('contact-phone');
        const locInput = document.getElementById('contact-location');
        const messageInput = document.getElementById('contact-message');

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phoneRegex = /^[0-9\s\-\+\(\)]{7,20}$/;

        if (!nameInput.value.trim() || nameInput.value.trim().length < 2) {
            showError(nameInput, 'Please enter a valid full name.');
        }
        if (!companyInput.value.trim()) {
            showError(companyInput, 'Please enter your company name.');
        }
        if (!emailRegex.test(emailInput.value.trim())) {
            showError(emailInput, 'Please enter a valid email address.');
        }
        if (!phoneRegex.test(phoneInput.value.trim())) {
            showError(phoneInput, 'Please enter a valid mobile number.');
        }
        if (!locInput.value.trim()) {
            showError(locInput, 'Please enter your location.');
        }
        if (catSelect && !catSelect.value) {
            showError(catSelect, 'Please select a screen type.');
        }
        if (catSelect && catSelect.value === 'other' && otherInput && !otherInput.value.trim()) {
            showError(otherInput, 'Please specify your screen type.');
        }
        if (!messageInput.value.trim() || messageInput.value.trim().length < 10) {
            showError(messageInput, 'Please provide more details about your inquiry (min 10 chars).');
        }

        if (!isValid) return;

        const nameVal = nameInput.value.trim();
        const emailVal = emailInput.value.trim();
        const companyVal = companyInput.value.trim();
        const phoneVal = phoneInput.value.trim();
        const locVal = locInput.value.trim();
        const messageVal = messageInput.value.trim();
        
        const countryInput = document.getElementById('contact-country-code');
        const countryVal = countryInput ? countryInput.value.trim() : '';
        const fullPhone = countryVal + ' ' + phoneVal;
        
        let catVal = catSelect ? catSelect.options[catSelect.selectedIndex].text : '';
        if (catSelect && catSelect.value === 'other' && otherInput && otherInput.value.trim() !== '') {
            catVal = otherInput.value.trim();
        }

        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span>Submitting...</span>';
        submitBtn.disabled = true;

        const formData = new FormData();
        formData.append('name', nameVal);
        formData.append('company', companyVal);
        formData.append('email', emailVal);
        formData.append('phone', fullPhone);
        formData.append('country', locVal);
        formData.append('service', catVal);
        formData.append('message', messageVal);
        formData.append('page', window.location.href);

        if (uploadedFiles && uploadedFiles.length > 0) {
            formData.append('attachment', uploadedFiles[0]);
        }

        fetch('submit_lead.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;

            const container = contactForm.parentNode;
            const oldNotify = container.querySelector('.form-notification');
            if (oldNotify) {
                oldNotify.remove();
            }

            const notification = document.createElement('div');
            notification.className = 'form-notification';
            
            if (data.success) {
                window.location.href = 'thankyou.php?redirect=' + encodeURIComponent(window.location.pathname + window.location.search);
            } else {
                notification.style.background = 'rgba(239, 68, 68, 0.1)';
                notification.style.border = '1px solid rgba(239, 68, 68, 0.2)';
                notification.innerHTML = `
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="flex-shrink:0; color: #ef4444;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                    <span>Error: ${data.message}</span>
                `;
            }

            container.insertBefore(notification, container.firstChild);
            notification.scrollIntoView({ behavior: 'smooth', block: 'center' });
        })
        .catch(error => {
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
            console.error('Error submitting form:', error);
            showCustomErrorAlert('An error occurred while submitting the form. Please try again.');
        });
    });

    // Custom Country Select Logic
    const customSelectWrapper = document.getElementById('custom-country-select-wrapper');
    const selectTrigger = document.getElementById('country-select-trigger');
    const selectDropdown = document.getElementById('country-select-dropdown');
    const selectValueContainer = document.getElementById('country-select-value');
    const hiddenInput = document.getElementById('contact-country-code');

    if (customSelectWrapper && selectTrigger && selectDropdown && hiddenInput && typeof countryList !== 'undefined') {
        // Populate dropdown
        selectDropdown.innerHTML = '';
        
        // Define default country
        const defaultCode = "+971";
        
        countryList.forEach(country => {
            const isSelected = country.code === defaultCode;
            const optionHTML = `
                <div class="country-option ${isSelected ? 'selected' : ''}" data-value="${country.code}" data-flag="${country.flag}">
                    <span class="country-check">✓</span>
                    <span class="country-flag">${country.flag}</span>
                    <span class="country-code" style="opacity: 0.8; font-size: 14px;">${country.code}</span>
                </div>
            `;
            selectDropdown.insertAdjacentHTML('beforeend', optionHTML);
        });

        const options = selectDropdown.querySelectorAll('.country-option');

        selectTrigger.addEventListener('click', (e) => {
            e.stopPropagation();
            customSelectWrapper.classList.toggle('open');
            
            // Scroll selected item into view
            if (customSelectWrapper.classList.contains('open')) {
                const selected = selectDropdown.querySelector('.country-option.selected');
                if (selected) {
                    // Small delay to ensure display:block is applied before scrolling
                    setTimeout(() => {
                        selected.scrollIntoView({ block: 'nearest' });
                    }, 10);
                }
            }
        });

        options.forEach(option => {
            option.addEventListener('click', (e) => {
                e.stopPropagation();
                // Remove selected class from all
                options.forEach(opt => opt.classList.remove('selected'));
                
                // Add selected class to clicked
                option.classList.add('selected');

                // Update hidden input
                const val = option.getAttribute('data-value');
                const flag = option.getAttribute('data-flag');
                hiddenInput.value = val;

                // Update trigger text (just flag and code as before)
                selectValueContainer.innerHTML = `
                    <span class="country-flag">${flag}</span>
                    <span class="country-code">${val}</span>
                `;

                // Close dropdown
                customSelectWrapper.classList.remove('open');
            });
        });

        // Close on click outside
        document.addEventListener('click', (e) => {
            if (!customSelectWrapper.contains(e.target)) {
                customSelectWrapper.classList.remove('open');
            }
        });
    }
}

// =================== FILE UPLOAD HANDLER ===================
let uploadedFiles = [];
const fileInput = document.getElementById('contact-files');
const fileUploadArea = document.getElementById('file-upload-area');
const filePreviewContainer = document.getElementById('file-preview');

if (fileInput && fileUploadArea && filePreviewContainer) {
    // Click on upload area triggers file picker
    fileUploadArea.addEventListener('click', () => {
        fileInput.click();
    });

    // Prevent the hidden input from also triggering (it overlays the area)
    fileInput.style.pointerEvents = 'none';

    // File input change handler
    fileInput.addEventListener('change', (e) => {
        handleFiles(e.target.files);
        fileInput.value = ''; // reset so same file can be re-added
    });

    // Drag & Drop events
    ['dragenter', 'dragover'].forEach(eventName => {
        fileUploadArea.addEventListener(eventName, (e) => {
            e.preventDefault();
            e.stopPropagation();
            fileUploadArea.classList.add('drag-over');
        });
    });

    ['dragleave', 'drop'].forEach(eventName => {
        fileUploadArea.addEventListener(eventName, (e) => {
            e.preventDefault();
            e.stopPropagation();
            fileUploadArea.classList.remove('drag-over');
        });
    });

    fileUploadArea.addEventListener('drop', (e) => {
        const dt = e.dataTransfer;
        if (dt && dt.files) {
            handleFiles(dt.files);
        }
    });

    function handleFiles(fileList) {
        const maxSize = 10 * 1024 * 1024; // 10MB
        const allowedTypes = ['.pdf', '.doc', '.docx', '.jpg', '.jpeg', '.png'];

        Array.from(fileList).forEach(file => {
            // Check duplicate
            if (uploadedFiles.some(f => f.name === file.name && f.size === file.size)) return;

            // Check size
            if (file.size > maxSize) {
                showCustomErrorAlert(`"${file.name}" exceeds the 10 MB limit.`);
                return;
            }

            // Check extension
            const ext = '.' + file.name.split('.').pop().toLowerCase();
            if (!allowedTypes.includes(ext)) {
                showCustomErrorAlert(`"${file.name}" is not an allowed file type.`);
                return;
            }

            uploadedFiles.push(file);
        });

        renderFilePreviews();
    }

    function renderFilePreviews() {
        filePreviewContainer.innerHTML = '';

        uploadedFiles.forEach((file, index) => {
            const ext = file.name.split('.').pop().toLowerCase();
            const isImage = ['jpg', 'jpeg', 'png'].includes(ext);
            const icon = isImage ? '🖼️' : '📄';
            const size = formatFileSize(file.size);

            const item = document.createElement('div');
            item.className = 'file-preview-item';
            item.innerHTML = `
                <div class="file-preview-icon">${icon}</div>
                <div class="file-preview-info">
                    <div class="file-preview-name">${file.name}</div>
                    <div class="file-preview-size">${size}</div>
                </div>
                <button type="button" class="file-preview-remove" data-index="${index}" aria-label="Remove file">&times;</button>
            `;
            filePreviewContainer.appendChild(item);
        });

        // Attach remove listeners
        filePreviewContainer.querySelectorAll('.file-preview-remove').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const idx = parseInt(e.currentTarget.getAttribute('data-index'));
                uploadedFiles.splice(idx, 1);
                renderFilePreviews();
            });
        });
    }

    function formatFileSize(bytes) {
        if (bytes < 1024) return bytes + ' B';
        if (bytes < 1024 * 1024) return (bytes / 1024).toFixed(1) + ' KB';
        return (bytes / (1024 * 1024)).toFixed(1) + ' MB';
    }
}


// =================== CATALOG INTERACTIVE FILTERING ===================
const filterTabs = document.querySelectorAll('.filter-tab');
const catalogCards = document.querySelectorAll('.catalog-card');

if (filterTabs.length > 0 && catalogCards.length > 0) {
    filterTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs
            filterTabs.forEach(t => t.classList.remove('active'));
            // Add active class to clicked tab
            tab.classList.add('active');

            const filterVal = tab.getAttribute('data-filter');

            catalogCards.forEach(card => {
                const cardCatsStr = card.getAttribute('data-category') || '';
                const cardCats = cardCatsStr.split(' ');

                if (filterVal === 'all' || cardCats.includes(filterVal)) {
                    // Show matching card
                    card.classList.remove('hidden');
                    card.classList.add('visible');
                } else {
                    // Hide non-matching card
                    card.classList.add('hidden');
                    card.classList.remove('visible');
                }
            });
        });
    });
}


// Animated Counters
document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll('.counter');
    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const targetValue = parseInt(target.getAttribute('data-target'));
                let current = 0;
                const duration = 1500; // 1.5 seconds total
                const increment = targetValue / (duration / 16); // assuming 60fps (16ms per frame)
                
                const updateCounter = () => {
                    current += increment;
                    if (current < targetValue) {
                        target.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        target.innerText = targetValue;
                    }
                };
                
                updateCounter();
                observer.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
});

// =================== INTERACTIVE BRANCH LOCATIONS HUB ===================
document.addEventListener("DOMContentLoaded", () => {
    const locationTabs = document.querySelectorAll(".location-tab");
    const activeTitle = document.getElementById("active-loc-title");
    const activeAddress = document.getElementById("active-loc-address");
    const activeEmail = document.getElementById("active-loc-email");
    const activeHours = document.getElementById("active-loc-hours");
    
    const phoneBtn = document.getElementById("active-loc-phone-btn");
    const phoneLabel = document.getElementById("active-loc-phone-label");
    const phoneAltBtn = document.getElementById("active-loc-phone-alt-btn");
    const phoneAltLabel = document.getElementById("active-loc-phone-alt-label");
    const mapBtn = document.getElementById("active-loc-map-btn");
    
    const mapIframe = document.getElementById("contact-map-iframe");
    const mapContainer = document.getElementById("map-container");
    const activeBranchLabel = document.getElementById("map-active-branch-label");

    if (locationTabs.length > 0) {
        // Initialize dynamic link buttons on load for the active tab (MEA HQ)
        const initActiveTab = document.querySelector(".location-tab.active");
        if (initActiveTab) {
            updateActiveLocationDetails(initActiveTab);
        }

        locationTabs.forEach(tab => {
            tab.addEventListener("click", () => {
                // Remove active class from all tabs
                locationTabs.forEach(t => t.classList.remove("active"));
                // Add active class to clicked tab
                tab.classList.add("active");
                updateActiveLocationDetails(tab);
            });
        });

        function updateActiveLocationDetails(tab) {
            // Get branch attributes
            const title = tab.getAttribute("data-title");
            const address = tab.getAttribute("data-address");
            const emailUser = tab.getAttribute("data-email-user");
            const emailDomain = tab.getAttribute("data-email-domain");
            let email = tab.getAttribute("data-email");
            if (emailUser && emailDomain) {
                email = `${emailUser}@${emailDomain}`;
            }
            const hours = tab.getAttribute("data-hours");
            const phone = tab.getAttribute("data-phone");
            const phoneAlt = tab.getAttribute("data-phone-alt");
            const mapUrl = tab.getAttribute("data-map");
            const mapLink = tab.getAttribute("data-map-link");

            // Hide details card if MEA HQ or Saudi Office is selected
            const locationId = tab.getAttribute("data-location");
            const activeCard = document.querySelector(".active-location-card");
            if (activeCard) {
                if (locationId === "mea-hq" || locationId === "saudi-office") {
                    activeCard.style.display = "none";
                } else {
                    activeCard.style.display = "block";
                }
            }

            // Update text fields
            if (activeTitle) activeTitle.textContent = title;
            if (activeAddress) activeAddress.textContent = address;
            if (activeEmail) {
                if (email) {
                    activeEmail.innerHTML = `<a href="mailto:${email}" style="color: inherit; text-decoration: none;">${email}</a>`;
                } else {
                    activeEmail.textContent = "";
                }
            }
            if (activeHours) activeHours.textContent = hours;

            // Update primary phone call button
            if (phoneBtn) {
                phoneBtn.href = `tel:${phone.replace(/\s+/g, '')}`;
                if (phoneLabel) phoneLabel.textContent = phone;
            }

            // Update alternate phone button
            if (phoneAltBtn) {
                if (phoneAlt) {
                    phoneAltBtn.href = `tel:${phoneAlt.replace(/\s+/g, '')}`;
                    phoneAltBtn.style.display = "inline-flex";
                    if (phoneAltLabel) phoneAltLabel.textContent = phoneAlt;
                } else {
                    phoneAltBtn.style.display = "none";
                }
            }

            // Update map button
            if (mapBtn) {
                if (mapLink) {
                    mapBtn.href = mapLink;
                    mapBtn.style.display = "inline-flex";
                } else {
                    mapBtn.style.display = "none";
                }
            }

            // Update embedded map iframe
            if (mapIframe) {
                if (mapContainer) mapContainer.classList.add("loading");
                if (activeBranchLabel) activeBranchLabel.textContent = title;
                
                // Set src of iframe to the map url
                mapIframe.src = mapUrl;
            }
        }

        // Initialize loader listener for map iframe
        if (mapIframe && mapContainer) {
            mapIframe.addEventListener("load", () => {
                mapContainer.classList.remove("loading");
            });
        }
    }
});

// ==========================================
// SHOWCASE TABS LOGIC
// ==========================================
document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.showcase-tab');
    const items = document.querySelectorAll('.showcase-display-item');

    if (tabs.length > 0 && items.length > 0) {
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Remove active from all tabs
                tabs.forEach(t => t.classList.remove('active'));
                // Add active to clicked tab
                tab.classList.add('active');

                // Get target id
                const targetId = tab.getAttribute('data-target');

                // Hide all items
                items.forEach(item => {
                    item.classList.remove('active');
                });

                // Show target item
                const targetItem = document.getElementById(targetId);
                if (targetItem) {
                    targetItem.classList.add('active');
                }
            });
        });
    }
});

// Hero Audio Toggle
document.addEventListener("DOMContentLoaded", function() {
    const video = document.getElementById("hero-bg-video");
    const toggleBtn = document.getElementById("hero-audio-toggle");
    
    if (video && toggleBtn) {
        const iconMuted = document.getElementById("audio-icon-muted");
        const iconUnmuted = document.getElementById("audio-icon-unmuted");
        
        toggleBtn.addEventListener("click", function() {
            if (video.muted) {
                video.muted = false;
                iconMuted.style.display = "none";
                iconUnmuted.style.display = "block";
            } else {
                video.muted = true;
                iconMuted.style.display = "block";
                iconUnmuted.style.display = "none";
            }
        });
    }
});

// =================== CONTACT MODAL FORM SUBMISSION ===================
const contactModalForm = document.getElementById('contact-modal-form-submit');
if (contactModalForm) {
    const catSelectModal = document.getElementById('contact-modal-category');
    const otherInputModal = document.getElementById('contact-modal-category-other');
    const cancelBtnModal = document.getElementById('cancel-other-btn-modal');

    if (catSelectModal && otherInputModal && cancelBtnModal) {
        catSelectModal.addEventListener('change', () => {
            if (catSelectModal.value === 'other') {
                catSelectModal.style.display = 'none';
                otherInputModal.style.display = 'block';
                cancelBtnModal.style.display = 'block';
                otherInputModal.setAttribute('required', '');
                otherInputModal.focus();
            }
        });

        cancelBtnModal.addEventListener('click', () => {
            otherInputModal.style.display = 'none';
            cancelBtnModal.style.display = 'none';
            catSelectModal.style.display = 'block';
            catSelectModal.value = '';
            otherInputModal.removeAttribute('required');
            otherInputModal.value = '';
            catSelectModal.focus();
        });
    }

    contactModalForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // Clear existing errors
        contactModalForm.querySelectorAll('.error-msg').forEach(el => el.remove());
        contactModalForm.querySelectorAll('.form-input').forEach(el => el.classList.remove('error'));

        let isValid = true;

        const showError = (input, msg) => {
            input.classList.add('error');
            const formGroup = input.closest('.form-group');
            if (formGroup && !formGroup.querySelector('.error-msg')) {
                const errorSpan = document.createElement('span');
                errorSpan.className = 'error-msg';
                errorSpan.innerText = msg;
                formGroup.appendChild(errorSpan);
            }
            isValid = false;
        };

        const nameInput = document.getElementById('contact-modal-name');
        const companyInput = document.getElementById('contact-modal-company');
        const emailInput = document.getElementById('contact-modal-email');
        const phoneInput = document.getElementById('contact-modal-phone');
        const locInput = document.getElementById('contact-modal-location');
        const messageInput = document.getElementById('contact-modal-message');

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const phoneRegex = /^[0-9\s\-\+\(\)]{7,20}$/;

        if (!nameInput.value.trim() || nameInput.value.trim().length < 2) {
            showError(nameInput, 'Please enter a valid full name.');
        }
        if (!companyInput.value.trim()) {
            showError(companyInput, 'Please enter your company name.');
        }
        if (!emailRegex.test(emailInput.value.trim())) {
            showError(emailInput, 'Please enter a valid email address.');
        }
        if (!phoneRegex.test(phoneInput.value.trim())) {
            showError(phoneInput, 'Please enter a valid mobile number.');
        }
        if (!locInput.value.trim()) {
            showError(locInput, 'Please enter your location.');
        }
        if (catSelectModal && !catSelectModal.value) {
            showError(catSelectModal, 'Please select a screen type.');
        }
        if (catSelectModal && catSelectModal.value === 'other' && otherInputModal && !otherInputModal.value.trim()) {
            showError(otherInputModal, 'Please specify your screen type.');
        }
        if (!messageInput.value.trim() || messageInput.value.trim().length < 10) {
            showError(messageInput, 'Please provide more details about your inquiry (min 10 chars).');
        }

        if (!isValid) return;

        const nameVal = nameInput.value.trim();
        const emailVal = emailInput.value.trim();
        const companyVal = companyInput.value.trim();
        const phoneVal = phoneInput.value.trim();
        const locVal = locInput.value.trim();
        const messageVal = messageInput.value.trim();
        
        const countryInputModal = document.getElementById('contact-modal-country-code');
        const countryValModal = countryInputModal ? countryInputModal.value.trim() : '';
        const fullPhone = countryValModal + ' ' + phoneVal;
        
        let catVal = catSelectModal ? catSelectModal.options[catSelectModal.selectedIndex].text : '';
        if (catSelectModal && catSelectModal.value === 'other' && otherInputModal && otherInputModal.value.trim() !== '') {
            catVal = otherInputModal.value.trim();
        }

        const submitBtn = contactModalForm.querySelector('button[type="submit"]');
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span>Submitting...</span>';
        submitBtn.disabled = true;

        const formData = new FormData();
        formData.append('name', nameVal);
        formData.append('company', companyVal);
        formData.append('email', emailVal);
        formData.append('phone', fullPhone);
        formData.append('country', locVal);
        formData.append('service', catVal);
        formData.append('message', messageVal);
        formData.append('page', window.location.href);

        if (uploadedFilesModal && uploadedFilesModal.length > 0) {
            formData.append('attachment', uploadedFilesModal[0]);
        }

        fetch('submit_lead.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;

            const container = contactModalForm.parentNode;
            const oldNotify = container.querySelector('.form-notification');
            if (oldNotify) {
                oldNotify.remove();
            }

            const notification = document.createElement('div');
            notification.className = 'form-notification';
            
            if (data.success) {
                window.location.href = 'thankyou.php?redirect=' + encodeURIComponent(window.location.pathname + window.location.search);
            } else {
                notification.style.background = 'rgba(239, 68, 68, 0.1)';
                notification.style.border = '1px solid rgba(239, 68, 68, 0.2)';
                notification.innerHTML = `
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" style="flex-shrink:0; color: #ef4444;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                    <span>Error: ${data.message}</span>
                `;
            }

            container.insertBefore(notification, container.firstChild);
            notification.scrollIntoView({ behavior: 'smooth', block: 'center' });
        })
        .catch(error => {
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
            console.error('Error submitting modal form:', error);
            showCustomErrorAlert('An error occurred while submitting the form. Please try again.');
        });
    });

    // Custom Country Select Logic Modal
    const customSelectWrapperModal = document.getElementById('custom-country-select-wrapper-modal');
    const selectTriggerModal = document.getElementById('country-select-trigger-modal');
    const selectDropdownModal = document.getElementById('country-select-dropdown-modal');
    const selectValueContainerModal = document.getElementById('country-select-value-modal');
    const hiddenInputModal = document.getElementById('contact-modal-country-code');

    if (customSelectWrapperModal && selectTriggerModal && selectDropdownModal && hiddenInputModal && typeof countryList !== 'undefined') {
        selectDropdownModal.innerHTML = '';
        const defaultCode = "+971";
        
        countryList.forEach(country => {
            const isSelected = country.code === defaultCode;
            const optionHTML = `
                <div class="country-option ${isSelected ? 'selected' : ''}" data-value="${country.code}" data-flag="${country.flag}">
                    <span class="country-check">✓</span>
                    <span class="country-flag">${country.flag}</span>
                    <span class="country-code" style="opacity: 0.8; font-size: 14px;">${country.code}</span>
                </div>
            `;
            selectDropdownModal.insertAdjacentHTML('beforeend', optionHTML);
        });

        const optionsModal = selectDropdownModal.querySelectorAll('.country-option');

        selectTriggerModal.addEventListener('click', (e) => {
            e.stopPropagation();
            customSelectWrapperModal.classList.toggle('open');
            
            if (customSelectWrapperModal.classList.contains('open')) {
                const selected = selectDropdownModal.querySelector('.country-option.selected');
                if (selected) {
                    setTimeout(() => {
                        selected.scrollIntoView({ block: 'nearest' });
                    }, 10);
                }
            }
        });

        optionsModal.forEach(option => {
            option.addEventListener('click', (e) => {
                e.stopPropagation();
                optionsModal.forEach(opt => opt.classList.remove('selected'));
                option.classList.add('selected');

                const val = option.getAttribute('data-value');
                const flag = option.getAttribute('data-flag');
                hiddenInputModal.value = val;

                selectValueContainerModal.innerHTML = `
                    <span class="country-flag">${flag}</span>
                    <span class="country-code">${val}</span>
                `;

                customSelectWrapperModal.classList.remove('open');
            });
        });

        document.addEventListener('click', (e) => {
            if (!customSelectWrapperModal.contains(e.target)) {
                customSelectWrapperModal.classList.remove('open');
            }
        });
    }
}

// =================== FILE UPLOAD HANDLER MODAL ===================
let uploadedFilesModal = [];
const fileInputModal = document.getElementById('contact-modal-files');
const fileUploadAreaModal = document.getElementById('file-upload-modal-area');
const filePreviewContainerModal = document.getElementById('file-preview-modal');

if (fileInputModal && fileUploadAreaModal && filePreviewContainerModal) {
    fileUploadAreaModal.addEventListener('click', () => {
        fileInputModal.click();
    });

    fileInputModal.style.pointerEvents = 'none';

    fileInputModal.addEventListener('change', (e) => {
        handleFilesModal(e.target.files);
        fileInputModal.value = ''; 
    });

    ['dragenter', 'dragover'].forEach(eventName => {
        fileUploadAreaModal.addEventListener(eventName, (e) => {
            e.preventDefault();
            e.stopPropagation();
            fileUploadAreaModal.classList.add('drag-over');
        });
    });

    ['dragleave', 'drop'].forEach(eventName => {
        fileUploadAreaModal.addEventListener(eventName, (e) => {
            e.preventDefault();
            e.stopPropagation();
            fileUploadAreaModal.classList.remove('drag-over');
        });
    });

    fileUploadAreaModal.addEventListener('drop', (e) => {
        const dt = e.dataTransfer;
        if (dt && dt.files) {
            handleFilesModal(dt.files);
        }
    });

    function handleFilesModal(fileList) {
        const maxSize = 10 * 1024 * 1024;
        const allowedTypes = ['.pdf', '.doc', '.docx', '.jpg', '.jpeg', '.png'];

        Array.from(fileList).forEach(file => {
            if (uploadedFilesModal.some(f => f.name === file.name && f.size === file.size)) return;
            if (file.size > maxSize) {
                showCustomErrorAlert(`"${file.name}" exceeds the 10 MB limit.`);
                return;
            }
            const ext = '.' + file.name.split('.').pop().toLowerCase();
            if (!allowedTypes.includes(ext)) {
                showCustomErrorAlert(`"${file.name}" is not an allowed file type.`);
                return;
            }
            uploadedFilesModal.push(file);
        });

        renderFilePreviewsModal();
    }

    function renderFilePreviewsModal() {
        filePreviewContainerModal.innerHTML = '';
        uploadedFilesModal.forEach((file, index) => {
            const ext = file.name.split('.').pop().toLowerCase();
            const isImage = ['jpg', 'jpeg', 'png'].includes(ext);
            const icon = isImage ? '🖼️' : '📄';
            const size = formatFileSizeModal(file.size);

            const item = document.createElement('div');
            item.className = 'file-preview-item';
            item.innerHTML = `
                <div class="file-preview-icon">${icon}</div>
                <div class="file-preview-info">
                    <div class="file-preview-name">${file.name}</div>
                    <div class="file-preview-size">${size}</div>
                </div>
                <button type="button" class="file-preview-remove" data-index="${index}" aria-label="Remove file">&times;</button>
            `;
            filePreviewContainerModal.appendChild(item);
        });

        filePreviewContainerModal.querySelectorAll('.file-preview-remove').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const idx = parseInt(e.currentTarget.getAttribute('data-index'));
                uploadedFilesModal.splice(idx, 1);
                renderFilePreviewsModal();
            });
        });
    }

    function formatFileSizeModal(bytes) {
        if (bytes < 1024) return bytes + ' B';
        if (bytes < 1024 * 1024) return (bytes / 1024).toFixed(1) + ' KB';
        return (bytes / (1024 * 1024)).toFixed(1) + ' MB';
    }
}

// =================== CUSTOM SUCCESS ALERT ===================
function showCustomSuccessAlert(message) {
    const modalHTML = `
        <div id="custom-success-modal" style="position: fixed; inset: 0; background: rgba(0,0,0,0.6); backdrop-filter: blur(5px); z-index: 99999; display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
            <div style="background: white; padding: 40px; border-radius: 20px; text-align: center; max-width: 400px; width: 90%; transform: scale(0.9); transition: transform 0.3s ease; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background: #dcfce7; color: #10b981; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <h3 style="margin: 0 0 10px; font-size: 22px; color: #111827; font-weight: 700;">Success!</h3>
                <p style="color: #6b7280; font-size: 15px; margin-bottom: 24px; line-height: 1.5;">${message}</p>
                <button id="custom-success-btn" style="background: #18315B; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; width: 100%; transition: background 0.2s;">
                    Continue
                </button>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML('beforeend', modalHTML);
    const modal = document.getElementById('custom-success-modal');
    const inner = modal.querySelector('div');
    const btn = document.getElementById('custom-success-btn');

    // Trigger animation
    setTimeout(() => {
        modal.style.opacity = '1';
        inner.style.transform = 'scale(1)';
    }, 10);

    btn.addEventListener('click', () => {
        modal.style.opacity = '0';
        inner.style.transform = 'scale(0.9)';
        setTimeout(() => {
            window.location.reload();
        }, 300);
    });
}

// =================== CUSTOM ERROR ALERT ===================
function showCustomErrorAlert(message) {
    const modalHTML = `
        <div id="custom-error-modal" style="position: fixed; inset: 0; background: rgba(0,0,0,0.6); backdrop-filter: blur(5px); z-index: 99999; display: flex; align-items: center; justify-content: center; opacity: 0; transition: opacity 0.3s ease;">
            <div style="background: white; padding: 40px; border-radius: 20px; text-align: center; max-width: 400px; width: 90%; transform: scale(0.9); transition: transform 0.3s ease; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);">
                <div style="width: 60px; height: 60px; border-radius: 50%; background: #fee2e2; color: #ef4444; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="15" y1="9" x2="9" y2="15"></line>
                        <line x1="9" y1="9" x2="15" y2="15"></line>
                    </svg>
                </div>
                <h3 style="margin: 0 0 10px; font-size: 22px; color: #111827; font-weight: 700;">Error</h3>
                <p style="color: #6b7280; font-size: 15px; margin-bottom: 24px; line-height: 1.5;">${message}</p>
                <button id="custom-error-btn" style="background: #18315B; color: white; border: none; padding: 12px 24px; border-radius: 8px; font-size: 15px; font-weight: 600; cursor: pointer; width: 100%; transition: background 0.2s;">
                    OK
                </button>
            </div>
        </div>
    `;

    document.body.insertAdjacentHTML('beforeend', modalHTML);
    const modal = document.getElementById('custom-error-modal');
    const inner = modal.querySelector('div');
    const btn = document.getElementById('custom-error-btn');

    setTimeout(() => {
        modal.style.opacity = '1';
        inner.style.transform = 'scale(1)';
    }, 10);

    btn.addEventListener('click', () => {
        modal.style.opacity = '0';
        inner.style.transform = 'scale(0.9)';
        setTimeout(() => {
            modal.remove();
        }, 300);
    });
}
