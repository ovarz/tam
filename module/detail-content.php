<main class="section-container detail-content">
  <div class="detail-summary">
    <?php for ($j=1; $j <= 3; $j++) { ?>
      <a aria-label="Link_Title" title="Link_Title" class="article-title" href="detail.php" target="_blank">
	    <?php require ($_SERVER['TAM'].'img/icon/list-dot.svg')?>
        <h2><?php echo $random_title[array_rand($random_title)]; ?></h2>
      </a>
	<?php } ?>
  </div>
  
  <p><strong>VIVA Bola</strong> - Arsenal berhasil pesta gol ke gawang Leeds United dengan skor 4-1 dalam lanjutan <a href="https://www.viva.co.id/tag/premier-league">Premier League</a> pada Sabtu malam kemarin di Stadion Emirates, 1 April 2023.</p>
  <p>Keempat gol Arsenal masing-masing ditorehkan Gabriel Jesus (35',55'), Ben White (47') dan Granit Xhaka. Sedangkan satu gol Leeds United dibukukan Rasmus Kristensen (76').</p>
  
  <?php require ($_SERVER['TAM'].'module/read-more.php')?>
  
  <p>Hasil ini membuat skuad asuhan Mikel Arteta kokoh di puncak klasemen dengan 72 poin. Sedangkan Leeds berada di peringkat ke 16 dengan 26 poin. Berikut beberapa pemain Arsenal tampil gemilang saat tumbangkan Leeds United:</p>
  
  <h2><b>1. Gabriel Jesus</b></h2>
  <p>Setelah kembali dari cedera lutut, Gabriel Jesus mampu menampilkan permainan terbaiknya. Pemain asal Brasil tersebut sukses menyumbangkan dua gol saat menghancurkan Leeds United. Atas penampilan terbaiknya, ia terpilih sebagai pemain terbaik dalam laga tersebut.</p>
  
  <h2><b>2. Ben White</b></strong></h2>
  <p>Bermain sebagai bek sayap kanan, Ben White mampu tampil luar biasa. Pemain asal Inggris tersbeut terlihat beberapa kali membatu Arsenal membangaun serangan dari sektor sebelah kanan. Ia juga sukses menyumbangkan satu gol.</p>
  
  <?php $media_type='image'; $media_lazyload='yes'; require ($_SERVER['TAM'].'module/detail-media.php')?>
  
  <h2><b>3. Granit Xhaka</b></h2>
  <p>Granit Xhaka mampu tampil luar biasa sebagai gelandang bertahan, ia terlihat beberapa kali melakukan tekel bersih serta pemotongan bola ketika pemain Leeds United hendak membangun serangan dari lini tengah. Dalam laga tersebut, pemain asal Swiss itu sukses menyumbang satu gol.</p>
  
  <?php require ($_SERVER['TAM'].'module/read-more.php')?>
  
  <h2><b>4. Gabriel Martinelli</b></h2>
  <p>Bermain sebagai penyerang sayap kanan, ia terlihat beberapa kali merepotkan pertahanan Leeds United. Meskipun dalam laga tersebut ia tidak mencetak gol akan tetapi pemain asal Brasil tersebut sukses menyumbangkan satu assist.</p>
  
  <h2><b>5. Martin Odegaard</b></h2>
  <p>Kapten Arsenal, Martin Odegaard tampil luar biasa mengatur jalannya pertandingan di lini tengah. Meskipun ia tidak mencetak gol. Akan tetapi kontribusinya sangat luar biasa, ia juga sukses memberikan satu assist.</p>

  <div class="topic-list">
    <?php for ($j=1; $j <= 3; $j++) { ?>
      <?php require ($_SERVER['TAM'].'module/topic-button.php')?>
	<?php } ?>
  </div>
</main>