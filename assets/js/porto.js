// assets/js/porto.js
// Toggle “Show All / Show Less” untuk semua section di bawah Framework
document.addEventListener('DOMContentLoaded', () => {
    const btn  = document.getElementById('toggle-sections-btn');
    const area = document.getElementById('additional-sections');
    if (!btn || !area) return;

    btn.addEventListener('click', () => {
        const collapsed = btn.getAttribute('data-collapsed') === 'true';

        if (collapsed) {
            // Tampilkan semua section
            area.classList.remove('hidden-section');
            area.classList.add('show');
            btn.textContent = 'Show Less';
            btn.setAttribute('data-collapsed', 'false');
        } else {
            // Sembunyikan kembali
            area.classList.add('hidden-section');
            area.classList.remove('show');
            btn.textContent = 'Show All';
            btn.setAttribute('data-collapsed', 'true');
        }
    });
});

// (opsional) – toggle hidden-tool di Data Science jika kamu masih pakai
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

    // Swiper Autoplay untuk semua kartu
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

