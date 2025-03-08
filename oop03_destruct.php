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

        function __destruct(){
            echo "hello nama saya {$this->nama} dengan nim {$this->nim} saya cantik<br>";
        }
    }

    $mhs1 = new Mahasiswa('2403112259','Nurul Atiqah');
    $mhs2 = new Mahasiswa('2403111712', 'Putri Insani Kamelia');
    ?>

</body>

</html>