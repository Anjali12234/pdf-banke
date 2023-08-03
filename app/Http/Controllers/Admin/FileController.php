<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function destroy(File $file)
    {
        $this->deleteFile($file->file);
        $file->delete();

        toast('File Deleted Successfully', 'success');
        return back();
    }
}
