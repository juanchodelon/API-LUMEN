<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Participante extends Model
{
    protected $table = 'participantes';
    protected $primaryKey = 'id_participante';
    protected $fillable = ['id_usuario', 'id_evento'];
    public $timestamps = false;
}
?>