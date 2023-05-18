<!DOCTYPE html>
<html>
<head>
    <title>Animal Info</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    class Animal {
        protected $nama;
        protected $jenis;

        public function __construct($nama, $jenis) {
            $this->nama = $nama;
            $this->jenis = $jenis;
        }

        public function getInfo() {
            return "Hewan ini bernama " . $this->nama . " dan jenisnya adalah " . $this->jenis . ".";
        }
    }

    class Cat extends Animal {
        public function __construct($nama) {
            parent::__construct($nama, "kucing");
        }

        public function getInfo() {
            return parent::getInfo() . " Kucing adalah hewan yang lucu dan imut.";
        }
    }

    class Dog extends Animal {
        public function __construct($nama) {
            parent::__construct($nama, "anjing");
        }

        public function getInfo() {
            return parent::getInfo() . " Anjing adalah hewan yang setia dan loyal.";
        }
    }

    // Membuat objek hewan
    $hewan = new Animal("Harimau", "mamalia");

    // Membuat objek kucing
    $kucing = new Cat("Manis");

    // Membuat objek anjing
    $anjing = new Dog("Spike");
    ?>

    <div class="container">
        <div class="animal-info">
            <h2>Informasi Hewan</h2>
            <p><?php echo $hewan->getInfo(); ?></p>
        </div>

        <div class="animal-info">
            <h2>Informasi Kucing</h2>
            <p><?php echo $kucing->getInfo(); ?></p>
        </div>

        <div class="animal-info">
            <h2>Informasi Anjing</h2>
            <p><?php echo $anjing->getInfo(); ?></p>
        </div>
    </div>
</body>
</html>
