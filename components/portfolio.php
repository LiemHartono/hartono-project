<section id="portfolio-projects" class="portfolio section text-center">
  <div class="container">
    <div class="section-title text-center mb-5">
      <h2 class="display-5 fw-bold text-gradient">Portfolio</h2>
      <p class="mb-0">Some of My Project Works</p>
    </div>

    <div class="row gy-4 portfolio-grid" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="card h-100 shadow-sm border-0 portfolio-card">
          <div class="portfolio-image">
            <div class="swiper portfolio-swiper" data-gallery="smartrider">
              <div class="swiper-wrapper">
                <?php for($i=1; $i<=3; $i++): ?>
                <div class="swiper-slide">
                  <a href="assets/img/portfolio/smartrider-<?php echo $i; ?>.png" class="glightbox" data-gallery="smartrider">
                    <img src="assets/img/portfolio/smartrider-<?php echo $i; ?>.png" alt="smartrider - <?php echo $i; ?>">
                  </a>
                </div>
                <?php endfor; ?>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="card-body text-start">
            <h5 class="card-title mb-2">Smart-Ride Ledger: AI-Integrated Motorcycle Buy-Sell Management System for Market Price 
              Valuation and Stock Trend Prediction </h5>
            <p class="card-text small text-muted mb-3">
              Smart-Ride Ledger is an AI-powered motorcycle buy-sell management system featuring inventory tracking, sales analytics, 
              and market trend prediction. Built with Laravel, MySQL, and Bootstrap, it delivers a responsive full-stack solution for 
              data-driven business insights.
            </p>
            <div class="tech-badges mb-3">
              <span>Laravel</span><span>MySQL</span><span>Bootstrap</span><span>Full-Stack Development</span><span>REST API</span>
              <span>AI Integration</span><span>Market Price Valuation</span><span>Stock Trend Prediction</span><span>Inventory Management</span>
              <span>Sales Management</span><span>Dashboard Analytics</span><span>Responsive UI</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web filter-data">
        <div class="card h-100 shadow-sm border-0 portfolio-card">
          <div class="portfolio-image">
            <div class="swiper portfolio-swiper" data-gallery="tkmh">
              <div class="swiper-wrapper">
                <?php for($i=1; $i<=12; $i++): ?>
                <div class="swiper-slide">
                  <a href="assets/img/portfolio/tk-marhamah-<?php echo $i; ?>.jpg" class="glightbox" data-gallery="tkmh">
                    <img src="assets/img/portfolio/tk-marhamah-<?php echo $i; ?>.jpg" alt="TK Marhamah Hasanah 2 - <?php echo $i; ?>">
                  </a>
                </div>
                <?php endfor; ?>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="card-body text-start">
            <h5 class="card-title mb-2">TK Marhamah Hasanah 2 — PPDB, Asesmen & DDTK</h5>
            <p class="card-text small text-muted mb-3">
              An integrated student admission and child development assessment system equipped with early growth-delay detection using a Random Forest model.
            </p>
            <div class="tech-badges mb-3">
              <span>Laravel</span><span>MySQL</span><span>Machine Learning</span><span>Random Forest</span><span>Python</span>
            </div>
          </div>
        </div>
      </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="card h-100 shadow-sm border-0 portfolio-card">
          <div class="portfolio-image">
            <div class="swiper portfolio-swiper" data-gallery="Kasir">
              <div class="swiper-wrapper">
                <?php for($i=1; $i<=3; $i++): ?>
                <div class="swiper-slide">
                  <a href="assets/img/portfolio/Kasir-<?php echo $i; ?>.png" class="glightbox" data-gallery="Kasir">
                    <img src="assets/img/portfolio/Kasir-<?php echo $i; ?>.png" alt="Kasir - <?php echo $i; ?>">
                  </a>
                </div>
                <?php endfor; ?>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="card-body text-start">
            <h5 class="card-title mb-2">Integrated Inventory & Point of Sale System (INVENKAS)</h5>
            <p class="card-text small text-muted mb-3">
              Dashboard of INVENKAS (Integrated Inventory & Point of Sale System) displaying sales history, transaction insights, 
              location distribution, and daily performance metrics. The system is built using Golang for the backend and PostgreSQL as 
              the database, ensuring high performance, scalability, and efficient data management for inventory and sales operations.
            </p>
            <div class="tech-badges mb-3">
              <span>Golang</span><span>PostgreSQL</span><span>Vue.js</span><span>REST API</span><span>Inventory System</span>
              <span>Point of Sale (POS)</span><span>Dashboard Analytics</span><span>Responsive UI</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="card h-100 shadow-sm border-0 portfolio-card">
          <div class="portfolio-image">
            <div class="swiper portfolio-swiper" data-gallery="chatbot">
              <div class="swiper-wrapper">
                <?php for($i=1; $i<=3; $i++): ?>
                <div class="swiper-slide">
                  <a href="assets/img/portfolio/chatbot-<?php echo $i; ?>.png" class="glightbox" data-gallery="chatbot">
                    <img src="assets/img/portfolio/chatbot-<?php echo $i; ?>.png" alt="chatbot - <?php echo $i; ?>">
                  </a>
                </div>
                <?php endfor; ?>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="card-body text-start">
            <h5 class="card-title mb-2">AI-Powered Room Booking Chatbot</h5>
            <p class="card-text small text-muted mb-3">
              The system is developed using Golang as the backend for high-performance API services, React for building an interactive 
              and responsive user interface, and MySQL as the database for efficient data management. Additionally, Python-based 
              Machine Learning and Deep Learning models are integrated to enhance chatbot intelligence, enabling contextual 
              understanding, intent recognition, and smart booking recommendations.
            </p>
            <div class="tech-badges mb-3">
              <span>Golang</span><span>MySQL</span><span>React.js</span><span>Full-Stack Development</span><span>REST API</span>
              <span>AI Chatbot</span><span>Machine Learning</span><span>Deep Learning</span><span>Natural Language Processing</span>
              <span>Room Booking System</span><span>Real-time Dashboard</span><span>Responsive UI</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-mobile">
        <div class="card h-100 shadow-sm border-0 portfolio-card">
          <div class="portfolio-image">
            <div class="swiper portfolio-swiper" data-gallery="weather">
              <div class="swiper-wrapper">
                <?php for($i=1; $i<=8; $i++): ?>
                <div class="swiper-slide">
                  <a href="assets/img/portfolio/PeramalanCuaca-<?php echo $i; ?>.png" class="glightbox" data-gallery="weather">
                    <img src="assets/img/portfolio/PeramalanCuaca-<?php echo $i; ?>.png" alt="Weather - <?php echo $i; ?>">
                  </a>
                </div>
                <?php endfor; ?>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
          <div class="card-body text-start">
            <h5 class="card-title mb-2">Multivariate Time Series Weather Prediction</h5>
            <p class="card-text small text-muted mb-3">
              This system presents a multivariate time series forecasting platform designed to predict weather conditions based on 
              historical and real-time environmental data. By leveraging multiple variables such as temperature, humidity, wind speed, 
              and atmospheric pressure, the system generates accurate predictions to support data-driven decision-making and environmental 
              analysis.
            </p>
            <div class="tech-badges mb-3">
              <span>Golang</span><span>PostgreSQL</span><span>Next.js</span><span>Full-Stack Development</span><span>REST API</span>
              <span>Machine Learning</span><span>Deep Learning</span><span>TensorFlow</span><span>Time Series Forecasting</span>
              <span>Multivariate Analysis</span><span>Weather Prediction</span><span>Data Visualization</span><span>Responsive UI</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-data">
        <div class="card h-100 shadow-sm border-0 portfolio-card">
          <div class="portfolio-image">
            <div class="swiper portfolio-swiper" data-gallery="temp">
              <div class="swiper-wrapper">
                <?php for($i=1; $i<=4; $i++): ?>
                <div class="swiper-slide">
                  <a href="assets/img/portfolio/PeramalanSuhu-<?php echo $i; ?>.png" class="glightbox" data-gallery="temp">
                    <img src="assets/img/portfolio/PeramalanSuhu-<?php echo $i; ?>.png" alt="Temp - <?php echo $i; ?>">
                  </a>
                </div>
                <?php endfor; ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="card-body text-start">
            <h5 class="card-title mb-2">Time Series Temperature Forecasting</h5>
            <p class="card-text small text-muted mb-3">
              Deep learning–based model built to predict temperature patterns using sequence-learning architectures.
            </p>
            <div class="tech-badges mb-3">
              <span>Python</span><span>TensorFlow</span><span>LSTM</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-data">
        <div class="card h-100 shadow-sm border-0 portfolio-card">
          <div class="portfolio-image">
            <div class="swiper portfolio-swiper" data-gallery="opencv">
              <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="assets/img/portfolio/OPENCV-1.png"></div>
                <div class="swiper-slide"><img src="assets/img/portfolio/OPENCV-2.png"></div>
              </div>
            </div>
          </div>
          <div class="card-body text-start">
            <h5 class="card-title mb-2">Automatic Black-and-White Photo Colorization</h5>
            <p class="card-text small text-muted mb-3">
              Image colorization system using OpenCV and deep learning–based models to predict natural tones.
            </p>
            <div class="tech-badges mb-3">
              <span>Python</span><span>OpenCV</span><span>Deep Learning</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="card h-100 shadow-sm border-0 portfolio-card">
          <div class="portfolio-image">
            <div class="swiper portfolio-swiper" data-gallery="loan">
              <div class="swiper-wrapper">
                <?php for($i=1; $i<=11; $i++): ?>
                <div class="swiper-slide"><img src="assets/img/portfolio/PKP-<?php echo $i; ?>.png"></div>
                <?php endfor; ?>
              </div>
            </div>
          </div>
          <div class="card-body text-start">
            <h5 class="card-title mb-2">Loan Default Risk Prediction</h5>
            <p class="card-text small text-muted mb-3">
              Ensemble learning techniques to classify whether applicants are likely to repay their loans.
            </p>
            <div class="tech-badges mb-3">
              <span>Python</span><span>scikit-learn</span><span>Ensemble Learning</span>
            </div>
          </div>
        </div>
      </div>

    </div></div>
</section>