<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['last_name','first_name','tel1','tel2','tel3','email','address','category_id','detail'];

    public static $rules = array(
    'last_name' => 'required',
    'first_name' => 'required',
    'tel1'=> 'required',
    'tel2'=> 'required',
    'tel3'=> 'required',
    'email' => 'required|email',
    'address' => 'required',
    'category_id' => 'required',
    'detail' => 'required'
    );

    public function getDetail()
    {
        $txt =
        $this->last_name . ' ' .
        $this->first_name . ' ' .
        $this->tel1 .  ' ' .
        $this->tel2 . ' ' .
        $this->tel3 . ' ' .
        $this->email . ' ' .
        $this->address . ' ' .
        $this->category_id . ' ' .
        $this->detail ;

    return $txt;
    }

}
