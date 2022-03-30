<?php
class NilaiMahasiswa{
    var $matkul;
    var $nilai;
    var $nim;

    function __construct($matkul,$nilai,$nim){
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function hasil(){
        if ($this->nilai < 35) return "E";
        elseif ($this->nilai >=36 && $this->nilai < 55)
            return "D";
        elseif ($this->nilai >=56 && $this->nilai < 69)
            return "C";
        elseif ($this->nilai >=70 && $this->nilai < 84)
            return "B";
        elseif ($this->nilai >=85 && $this->nilai < 100)
            return "A";
        
    }

    function grade(){
        $grade = ($this->nilai >= 70)? "LULUS":"TIDAK LULUS";
        return $grade;
    }
}
?>

#$Rio_Afandi_Sanjaya_Gulo