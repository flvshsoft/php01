<!DOCTYPE html>
<html>

<body>

    <?php
    class Mahasiswa
    {
        // Properties
        public $nim;
        public $nama;
        public $jurusan;

        function __construct($nim, $nama)
        {
            $this->nim = $nim;
            $this->nama = $nama;
        }

        // Methods
        // nim
        function get_nim()
        {
            return $this->nim;
        }
        // nama
        function get_nama()
        {
            return $this->nama;
        }
    }

    $mhs1 = new Mahasiswa('2403112259','Nurul Atiqah');
    $mhs2 = new Mahasiswa('2403111712', 'Putri Insani Kamelia');

    // 1
    echo $mhs1->get_nim();
    echo " - ";
    echo $mhs1->get_nama();
    echo "<br>";
    // 2
    echo $mhs2->get_nim()." - ".$mhs2->get_nama();
    ?>

</body>

</html>