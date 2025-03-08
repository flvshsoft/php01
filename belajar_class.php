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

        // Methods
        // nim
        function set_nim($nim)
        {
            $this->nim = $nim;
        }
        function get_nim()
        {
            return $this->nim;
        }
        // nama
        function set_nama($nama)
        {
            $this->nama = $nama;
        }
        function get_nama()
        {
            return $this->nama;
        }
    }

    $mhs1 = new Mahasiswa();
    $mhs2 = new Mahasiswa();
    // 1
    $mhs1->set_nim('2403112259');
    $mhs1->set_nama('Nurul Atiqah');
    // 2
    $mhs2->set_nim('2403111712');
    $mhs2->set_nama('Putri Insani Kamelia');

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