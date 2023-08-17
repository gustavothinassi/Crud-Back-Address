<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $idAddress
 * @property string $cep
 * @property string $logradouro
 * @property string $bairro
 * @property string $cidade
 * @property string $uf
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'address';
	protected $primaryKey = 'idAddress';
	public $timestamps = false;

	protected $fillable = [
		'cep',
		'logradouro',
		'bairro',
		'cidade',
		'uf'
	];
}
