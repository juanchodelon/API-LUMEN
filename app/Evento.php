<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Evento extends Model
{
    protected $table = 'eventos';
    protected $primaryKey = 'id_evento';
    protected $fillable = ['fecha', 'lugar', 'descripcion', 'titulo'];
    public $timestamps = false;
}
?>