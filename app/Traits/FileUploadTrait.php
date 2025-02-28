<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait FileUploadTrait
{
    // Handle FileUploads
    public function uploadFile(
        Request $request,
        string $inputName,
        ?string $oldPath = null,
        string $path = '/uploads'
    ): string {
        if ($request->hasFile($inputName)) {
            $file = $request->{$inputName}; // $request->log
            $ext = $file->getClientOriginalExtension();
            $fileName = 'media_' . uniqid() . '.' . $ext;

            $file->move(public_path($path), $fileName);
            return $path . '/' . $fileName;
        }

        return '';
    }
}
