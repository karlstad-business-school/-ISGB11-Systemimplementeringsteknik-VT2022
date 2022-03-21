<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Bil extends Model {
	
	protected $table = 'bilar';
	protected $fillable = ['regnr','marke','modell','arsmodell'];
	
	
}


?>


