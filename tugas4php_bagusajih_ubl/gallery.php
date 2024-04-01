<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
  }

  h1 {
    text-align: center;
    margin-top: 10px;
   
  }

  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
  }

  .image-container {
    position: relative;
    margin: 10px;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  img {
    width: 300px;
    height: 300px;
    object-fit: cover;
    transition: transform 0.3s ease;
  }

  img:hover {
    transform: scale(1.1);
  }

  .image-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    padding: 10px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .image-container:hover .image-caption {
    opacity: 1;
  }
</style>

<body>
<h1>The Famous Skateboarders</h1>
<div class="container">
  <div class="image-container">
    <img src="./gambar/leticia.jpg" alt="Leticia">
    <div class="image-caption">Leticia</div>
  </div>
  <div class="image-container">
    <img src="./gambar/lizzie.jpg" alt="Lizzie">
    <div class="image-caption">Lizzie</div>
  </div>
  <div class="image-container">
    <img src="./gambar/lorre.jpg" alt="Lorre">
    <div class="image-caption">Lorre</div>
  </div>
  <div class="image-container">
    <img src="./gambar/bam.jpg" alt="Bam">
    <div class="image-caption">Bam</div>
  </div>
  <div class="image-container">
    <img src="./gambar/sabre.jpg" alt="sabre">
    <div class="image-caption">Sabre</div>
  </div>
</div>
</body>

