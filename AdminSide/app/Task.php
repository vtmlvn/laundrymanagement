<?php
namespace App;
use Eloquent;

class Task extends Eloquent {

	protected $fillable = [
							'owner',
							'type',
							'description',
							'quantity',
							'price',
							'start_date',
							'due_date'
						];
	protected $primaryKey = 'id';
	protected $table = 'tasks';
}
