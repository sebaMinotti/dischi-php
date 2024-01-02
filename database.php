<?php
header("Access-Control-Allow-Origin: *");
   $databaseDischi=[
      [
        "autore"=>"Avrill Lavigne",
        "titolo"=>"Under my Skin",
        "genere"=>"rock",
        "anno"=>"2004",
        "poster"=>"https://images.genius.com/9f6646385ee7aa36b60a987ed81d46f3.1000x1000x1.jpg",
      ],
      [
        "autore"=>"883",
        "titolo"=>"La dura legge del gol",
        "genere"=>"pop",
        "anno"=>"1997",
        "poster"=>"https://www.orrorea33giri.com/wp-content/uploads/2015/06/883-La-dura-legge-del-gol.jpg",
      ],
      [
        "autore"=>"Aqua",
        "titolo"=>"aquarium",
        "genere"=>"pop",
        "anno"=>"1997",
        "poster"=>"https://upload.wikimedia.org/wikipedia/en/thumb/8/80/Aquariumcover.jpg/220px-Aquariumcover.jpg",
      ],
      [
        "autore"=>"Eiffel 65",
        "titolo"=>"contact",
        "genere"=>"rock",
        "anno"=>"2001",
        "poster"=>"https://www.teatro.it/images/spettacoli/40651/main-image/Teatro.it-eiffel-65-concerto-date-biglietti.jpg",
      ],
      [
        "autore"=>"Miles devis",
        "titolo"=>"Kind of blue",
        "genere"=>"jazz",
        "anno"=>"1959",
        "poster"=>"https://m.media-amazon.com/images/I/51CtGfMz4WL._UF1000,1000_QL80_.jpg",
      ],
      [
        "autore"=>"riky martin",
        "titolo"=>"Vuelve",
        "genere"=>"Latina",
        "anno"=>"1998",
        "poster"=>"https://m.media-amazon.com/images/I/714GD-m57fL._UF1000,1000_QL80_.jpg",
      ],
      [
        "autore"=>"Metallica",
        "titolo"=>"Master of Puppets",
        "genere"=>"metal",
        "anno"=>"1986",
        "poster"=>"https://m.media-amazon.com/images/I/61T81lF9meL._UF1000,1000_QL80_.jpg",
      ],
      [
        "autore"=>"Linkin park",
        "titolo"=>"Hybrid theory",
        "genere"=>"rock",
        "anno"=>"2000",
        "poster"=>"https://m.media-amazon.com/images/I/81iC+O0ec2L._UF1000,1000_QL80_.jpg",
      ],
      [
        "autore"=>"Eminem",
        "titolo"=>"Encore",
        "genere"=>"rap",
        "anno"=>"2004",
        "poster"=>"https://upload.wikimedia.org/wikipedia/en/b/b4/Encore_%28Eminem_album%29_coverart.jpg",
      ],
      [
        "autore"=>"Evanescence",
        "titolo"=>"Fallen",
        "genere"=>"rock",
        "anno"=>"2003",
        "poster"=>"https://m.media-amazon.com/images/I/7163tf7rbLL._UF1000,1000_QL80_.jpg",
      ],
   ]  ;
   echo json_encode($databaseDischi);
?>