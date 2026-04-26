// assets/js/porto.js

// 1. Toggle “Show All / Show Less” untuk semua section di bawah Framework
document.addEventListener('DOMContentLoaded', () => {
    const btn  = document.getElementById('toggle-sections-btn');
    const area = document.getElementById('additional-sections');
    
    if (!btn || !area) return;

    btn.addEventListener('click', () => {
        const isCollapsed = btn.getAttribute('data-collapsed') === 'true';

        if (isCollapsed) {
            // Tampilkan section dengan menambah class .show (CSS Grid akan menangani transisinya)
            area.classList.add('show');
            btn.textContent = 'Show Less';
            btn.setAttribute('data-collapsed', 'false');
            
            // Refresh AOS agar animasi elemen di dalamnya muncul dengan smooth
            setTimeout(() => {
                if (typeof AOS !== 'undefined') {
                    AOS.refresh();
                }
            }, 300);
        } else {
            // Sembunyikan kembali hanya dengan menghapus class .show
            area.classList.remove('show');
            btn.textContent = 'Show All';
            btn.setAttribute('data-collapsed', 'true');
        }
    });
});

// 2. (opsional) – toggle hidden-tool di Data Science
document.addEventListener('DOMContentLoaded', () => {
    const btnTool = document.getElementById('show-all-btn');
    if (!btnTool) return;

    btnTool.addEventListener('click', () => {
        document.querySelectorAll('.hidden-tool').forEach(el => {
            el.classList.remove('hidden-tool');
            el.classList.add('show');
        });
        btnTool.style.display = 'none';
    });
});

// 3. Swiper Autoplay untuk semua kartu
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.portfolio-swiper').forEach(function (el) {
      new Swiper(el, {
        loop: true,
        speed: 600,
        autoplay: {
          delay: 3000,
          disableOnInteraction: false
        },
        pagination: {
          el: el.querySelector('.swiper-pagination'),
          clickable: true
        },
        navigation: {
          nextEl: el.querySelector('.swiper-button-next'),
          prevEl: el.querySelector('.swiper-button-prev')
        }
      });
    });
});