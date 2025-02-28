<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Company extends Model
{
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'slug',
        'industry_type_id',
        'organization_type_id',
        'team_size_id',
        'logo',
        'banner',
        'establishment_date',
        'website',
        'phone',
        'email',
        'bio',
        'vision',
        'total_views',
        'address',
        'city',
        'state',
        'country',
        'map_link',
        'is_profile_verified',
        'document_verfied_at',
        'profile_completion',
        'visibility',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ],
        ];
    }
}