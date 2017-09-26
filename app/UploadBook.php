<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadBook extends Model
{
	 protected $table = 'books_uploaded';
    protected $fillable = ['uploader_UID',
        'book_name', 'book_author', 'book_edition', 'subject', 'year', 'branch', 'price','uploadimage',
    ];
}
