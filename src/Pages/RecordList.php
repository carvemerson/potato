<?php

namespace Carvemerson\Potato\Pages;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as RouteFacade;

/**
 * @implements Arrayable<string, mixed>
 */
abstract class RecordList implements Arrayable
{
    /** @var class-string */
    protected static string $resource;

    protected ?string $title;

    public static function route(string $path): Route
    {
        /** @var string $prefix */
        $prefix = static::$resource::getRoutePrefix();

        return RouteFacade::get($prefix.$path, function (): JsonResponse {
            return response()->json(app(static::class));
        });
    }

    public function getTitle(): string
    {
        /** @var string $resourceTitle */
        $resourceTitle = static::$resource::getTitle();

        return $this->title ?? $resourceTitle;
    }

    public function toArray(): array
    {
        return [
            'title' => $this->getTitle(),
        ];
    }
}
