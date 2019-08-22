<?php

namespace App;
use Session;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama','slug'];
    public $timestamps = true;

    public function artikel(){
        return $this->hasMany('App\Artikel', 'id_kategori');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public static function boot(){
        parent::boot();
        self::deleting(function ($kategori){
            //Apakah kategori masih digunakan oleh Artikel
            if ($kategori->artikel->count() > 0){
            //Menyimpan pesan error
                $html = 'Kategori tidak bisa dihapus karena masih digunakan oleh Artikel :';
                $html .= '<ul>';
                foreach ($kategori->artikel as $data){
                    $html .= "<li>$data->judul</li>";
                }
                $html .= '</ul>';
                Session::flash("flash_notification", ["level" => "danger", "message" => $html ]);
                //Membatalkan proses penghapusan
                return false;
            }
        });
    }
   
}
