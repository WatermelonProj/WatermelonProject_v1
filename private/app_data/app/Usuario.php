<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Model, Authenticatable
{
    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';
    public $timestamps = false;

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nomeUsuario', 'loginUsuario', 'senhaUsuario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senhaUsuario', 'remember_token',
    ];

    public function receita() {
      return $this->hasMany("App\Receita", 'idUsuario', 'idUsuario');
    }
      public function cardapio() {
        return $this->hasMany("App\Cardapio","idUsuario", "idUsuario");
      }
}
