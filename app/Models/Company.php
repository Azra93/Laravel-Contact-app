<?php

namespace App\Models;

use App\Models\Scopes\AllowedFilterSearch;
use App\Models\Scopes\AllowedSort;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Scopes\SimpleSoftDeletingScope;

class Company extends Model
{
    use HasFactory, SoftDeletes, AllowedFilterSearch, AllowedSort;

    //protected $table = "app_companies";
    protected $fillable = ['name', 'email',  'address', 'website'];

    public function contacts(){
        return $this->hasMany(Contact::class);
        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
