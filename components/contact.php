<section id="contact-follow" class="section text-center">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="display-5 fw-bold text-gradient">Follow & Contact</h2>
      <p class="mb-0">Let’s Connect and Collaborate</p>
    </div>

    <div class="row gy-4" data-aos="fade-up">

      <div class="col-lg-4 col-md-6">
        <div class="card social-card h-100 shadow-sm border-0">
          <div class="card-body text-center">
            <div class="social-icon mb-3">
              <i class="bi bi-envelope-fill"></i>
            </div>
            <h5 class="mb-1">Email</h5>
            <p class="small text-muted mb-3">liemhartono21@gmail.com</p>
            <button onclick="sendEmail()" class="btn btn-primary btn-sm w-100">Send Email</button>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card social-card h-100 shadow-sm border-0">
          <div class="card-body text-center">
            <div class="social-icon mb-3">
              <i class="bi bi-linkedin"></i>
            </div>
            <h5 class="mb-1">LinkedIn</h5>
            <p class="small text-muted mb-3">linkedin.com/in/hartono10</p>
            <a href="https://www.linkedin.com/in/hartono10" target="_blank" class="btn btn-primary btn-sm w-100">Visit Profile</a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="card social-card h-100 shadow-sm border-0">
          <div class="card-body text-center">
            <div class="social-icon mb-3">
              <i class="bi bi-instagram"></i>
            </div>
            <h5 class="mb-1">Instagram</h5>
            <p class="small text-muted mb-3">@liem.hartono_</p>
            <a href="https://instagram.com/liem.hartono_" target="_blank" class="btn btn-primary btn-sm w-100">Follow</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
  function sendEmail() {
    const email = "liemhartono21@gmail.com";
    const subject = encodeURIComponent("Inquiry from Portfolio Website");
    const body = encodeURIComponent("Hello Hartono,\n\nI would like to discuss further about...");
    window.location.href = `mailto:${email}?subject=${subject}&body=${body}`;
  }
</script>