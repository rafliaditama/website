<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nama_lengkap','jenis_kelamin','agama','alamat','avatar','user_id'];
 
    public function getAvatar()
    {
    	if (!$this->avatar) {
    		return asset('images/default.jpg');
    	}
    	return asset('images/'.$this->avatar);
    }
    public function mapel(){
    	return $this->belongsToMany(Mapel::class)->withPivot(['nilai'])->withTimeStamps();
    }

    public function rataRataNilai()
    {
        //ambil nilai rata rata
        $total = 0;
        $hitung = 0;
        If($this->mapel->isNotEmpty()){

        foreach($this->mapel as $mapel){
        $total += $mapel->pivot->nilai;
        $hitung++;
    }
      return round($total/$hitung);
} 
      
    }
    

    
}
