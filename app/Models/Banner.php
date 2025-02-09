<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
      protected $fillable = [
        'banner_id',
        'banner_heading',
        'banner_title',
        'banner_caption',
        'button_name',
        'button_url',
        'slug',
        'creator',
        'editor',
        'status',
        'public_status',

      ];
}
    