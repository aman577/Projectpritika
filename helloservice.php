<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;700&family=Dancing+Script&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Jost", sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8f5f2;
        color: #333;
      }

      header {
        background-color: #4c3a51;
        padding: 20px;
        text-align: center;
        color: white;
      }

      header h1 {
        font-family: "Dancing Script", cursive;
        font-size: 3rem;
        margin: 0;
      }

      nav {
        display: flex;
        justify-content: center;
        gap: 20px;
        list-style: none;
        background-color: #4c3a51;
        padding: 20px;
        margin: 0;
      }

      nav a {
        color: white;
        text-decoration: none;
        font-size: 1rem;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s;
      }

      nav a:hover {
        background-color: #6d4c71;
      }

      .services-section {
        padding: 50px 20px;
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
      }

      .services-menu {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
      }

      .category {
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 20px;
        transition: transform 0.3s, box-shadow 0.3s;
      }

      .category:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
      }

      .category img {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 15px;
      }

      .category h3 {
        font-size: 1.2rem;
        color: #4c3a51;
        margin: 0;
      }

      .sub-services-section {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
      }

      .sub-services-section h3 {
        font-size: 1.5rem;
        color: #4c3a51;
        margin-bottom: 15px;
      }

      .sub-services-section ul {
        list-style: none;
        padding: 0;
        font-size: 1rem;
        color: #555;
      }

      .sub-services-section li {
        margin-bottom: 10px;
      }

      .service-details {
        background-color: #ffffff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
      }

      .service-details h3 {
        font-size: 1.5rem;
        color: #4c3a51;
        margin-bottom: 15px;
      }

      .details-text p {
        font-size: 1rem;
        color: #555;
        margin-bottom: 10px;
      }

      #book-button {
        background-color: #4c3a51;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s;
      }
      .category img {
        width: 100%;
        height: 200px; /* Ensures all images have the same height */
        object-fit: cover; /* Ensures the image maintains its aspect ratio while filling the area */
        border-radius: 10px;
        margin-bottom: 15px;
      }

      #book-button:hover {
        background-color: #6d4c71;
      }
      footer {
      background-color: #4c3a51;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 50px;
    }

    footer p {
      margin: 0;
    }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <a href="hellomain.htm">HOME</a>
        <a href="#">MENU</a>
        <a href="#active">OUR SERVICES</a>
        <a href="#">ABOUT US</a>
        <a href="#">CONTACT US</a>
      </nav>
      <hr />
      <h1>Beauty Parlour Services</h1>
    </header>
    <section class="services-section">
      <div class="services-menu">
        <div class="category">
          <img src="images/haircare.jpg" alt="Hair Care" />
          <h3>Hair Care</h3>
        </div>
        <div class="category">
          <img src="images/facialcare.jpg" alt="Facial Care" />
          <h3>Facial Care</h3>
        </div>
        <div class="category">
          <img src="images/nails.jpg" alt="Nail Care" />
          <h3>Nail Care</h3>
        </div>
        <div class="category">
          <img src="images/skincare.jpg" alt="Skin Care" />
          <h3>Skin Care</h3>
        </div>
        <div class="category">
          <img src="images/massage.jpg" alt="Massage" />
          <h3>Massage</h3>
        </div>
        <div class="category">
          <img src="images/bridal.jpg" alt="Bridal Services" />
          <h3>Bridal Services</h3>
        </div>
      </div>
      <div class="service-details">
        <h3>Service Details</h3>
        <div class="details-text">
          <p id="service-name">Choose a category to view details</p>
          <p id="service-description"></p>
          <p id="service-price"></p>
          <button id="book-button" onclick="window.location.href='mainlogin.php';" >Book Appointment</button>
        </div>
      </div>
    </section>

    <footer>
    <p>&copy; Mero Parlor's. All Rights Reserved</p>
  </footer>
  </body>
</html>
