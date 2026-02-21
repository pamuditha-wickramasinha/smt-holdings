<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ImageController extends Controller
{
    /**
     * Serve images from resources/images/ so they can stay in resources
     * and still be requested via /images/{path}.
     */
    public function show(Request $request, string $path): BinaryFileResponse
    {
        $basePath = resource_path('images');
        $path = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $path);
        $resolvedPath = realpath($basePath . DIRECTORY_SEPARATOR . $path);

        // Prevent path traversal: ensure resolved path is inside resources/images
        if (
            $resolvedPath === false
            || ! str_starts_with($resolvedPath, str_replace('/', DIRECTORY_SEPARATOR, $basePath))
            || ! File::isFile($resolvedPath)
        ) {
            throw new NotFoundHttpException;
        }

        $mimeType = File::mimeType($resolvedPath);

        return response()->file($resolvedPath, [
            'Content-Type' => $mimeType,
        ]);
    }
}
