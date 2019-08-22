<?php

namespace App;
use Session;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nama','slug'];
    public $timestamps = true;

    public function artikel(){
        return $this->belongsToMany('App\Artikel', 'artikel_tags', 'id_tag', 'id_artikel');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    
    public static function boot(){
        parent::boot();
        self::deleting(function ($tag){
            //Apakah tag masih digunakan oleh Artikel
            if ($tag->artikel->count() > 0){
            //Menyimpan pesan error
                $html = 'Tag tidak bisa dihapus karena masih digunakan oleh Artikel :';
                $html .= '<ul>';
                foreach ($tag->artikel as $data){
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
