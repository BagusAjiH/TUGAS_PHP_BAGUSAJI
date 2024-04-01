<style>
     body {
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }
    
    h1 {
      text-align: center;
      margin-top: 10px;
    }
    
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    .skateboarder {
      margin-bottom: 20px;
      padding: 20px;
      border-radius: 5px;
      transition: transform 0.3s ease;
      background-color: #f9f9f9;
    }
    
    .skateboarder:hover {
      transform: translateY(-5px);
    }
    
    .skateboarder h2 {
      margin-top: 0;
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .skateboarder p {
      margin: 5px 0;
      font-size: 16px;
    }
    
    .skateboarder .record {
      font-weight: bold;
      color: #555;
    }

    .skateboarder img {
      width: 200px; 
      height: auto; 
    }

    .berita {
    margin-top: 40px;
    }

    .berita h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .berita ul {
    list-style-type: none;
    padding: 0;
    }

    .berita li {
     margin-bottom: 20px;
    }

    .berita a {
     color: #007bff;
    text-decoration: none;
    }

    .berita a:hover {
    text-decoration: underline;
    }

    .berita p {
    color: #666;
    margin: 5px 0;
    font-size: 14px;
    }

  </style>
</head>
<body>
  <main>
    <section class="acara">
      <h2 style="text-align:center; font-size: 30px; color: black; font-family: 'Shadows Into Light', cursive;">Upcoming Events Around The World</h2>
      <ul>
        <li class="skateboarder">
          <img src="./gambar/event1.jpg" alt="Dew Tour Long Beach">
          <h3>Dew Tour Long Beach</h3>
          <p>Long Beach, California, USA</p>
          <p>10-12 August 2024</p>
          <a href="https://dewtour.com/long-beach/">Selengkapnya</a>
        </li>
        <li class="skateboarder">
          <img src="./gambar/event2.jpg">
          <h3>Vans Triple Crown SF Pro</h3>
          <p>San Francisco, California, USA</p>
          <p>28-30 September 2024</p>
          <a href="https://www.vans.com/shop/triple-crown-sf-pro">Selengkapnya</a>
        </li>
        <li class="skateboarder">
          <img src="./gambar/event3.jpg" alt="SLS World Championship Las Vegas 2023">
          <h3>SLS World Championship</h3>
          <p>Las Vegas, Nevada, USA</p>
          <p>12-14 October 2024</p>
          <a href="https://www.streetleague.com/world-championship/">Selengkapnya</a>
        </li>
      </ul>
    </section>
    <section class="berita">
      <h2>Berita Terbaru</h2>
      <ul>
        <li>
          <a href="https://www.thrashermagazine.com/articles/nyjah-huston-wins-triple-crown-sf-pro/">Nyjah Huston Menangkan Vans Triple Crown SF Pro</a>
          <p>1 October 2024</p>
        </li>
        <li>
          <a href="https://www.espn.com/skateboarding/story/_/id/34372782/rayssa-leal-wins-womens-street-skateboarding-gold-x-games">Rayssa Leal Memenangkan Emas Street Skateboarding Wanita di X Games</a>
          <p>29 July 2024</p>
        </li>
        <li>
          <a href="https://www.sbnation.com/skateboarding/2023/7/26/22619341/olympic-skateboarding-2024-paris-qualification">Kualifikasi Olimpiade Skateboarding 2024 Dimulai</a>
          <p>26 July 2023</p>
        </li>
      </ul>
    </section>
  </main>
</body>
</html>
