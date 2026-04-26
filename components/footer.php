<footer id="footer" class="footer py-4">
    <div class="container text-center">

      <h4 class="fw-bold mb-1">Hartono Liem</h4>
      <p class="small text-muted mb-3">Information Systems • AI & Data • Fullstack Developer</p>

      <p class="small text-muted mb-0">
        &copy; <span id="year"></span> Hartono Liem — All Rights Reserved.
      </p>

    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="assets/js/main.js"></script>
  <script src="assets/js/porto.js"></script>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const themeToggleBtn = document.getElementById('theme-toggle');
    const iconDark = document.getElementById('theme-icon-dark');
    const iconLight = document.getElementById('theme-icon-light');

    const setIcon = (theme) => {
      if (theme === 'dark') {
        iconDark.classList.add('d-none');
        iconLight.classList.remove('d-none');
      } else {
        iconLight.classList.add('d-none');
        iconDark.classList.remove('d-none');
      }
    };

    // Jalankan pengecekan ikon saat halaman dimuat
    const currentTheme = document.documentElement.getAttribute('data-theme');
    setIcon(currentTheme);

    themeToggleBtn.addEventListener('click', () => {
      let theme = document.documentElement.getAttribute('data-theme');
      let newTheme = theme === 'dark' ? 'light' : 'dark';

      document.documentElement.setAttribute('data-theme', newTheme);
      localStorage.setItem('theme', newTheme);
      setIcon(newTheme);
    });
  });
</script>

</body>
</html>