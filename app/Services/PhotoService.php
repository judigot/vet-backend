<?php
/* Owner: App Scaffolder */

namespace App\Services;

use App\Models\Photo;
use Illuminate\Support\Collection;

class PhotoService
{
    /**
     * Get all photo records.
     *
     * @return Collection
     */
    public function getAll(): Collection
    {
        return Photo::all();
    }

    /**
     * Get a photo record by ID.
     *
     * @param int $id
     * @return Photo|null
     */
    public function getById(int $id): ?Photo
    {
        return Photo::find($id);
    }

    /**
     * Create a new photo record.
     *
     * @param array $data
     * @return Photo
     */
    public function create(array $data): Photo
    {
        return Photo::create($data);
    }

    /**
     * Update a photo record by ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $photo = Photo::find($id);
        if ($photo) {
            return $photo->update($data);
        }
        return false;
    }

    /**
     * Delete a photo record by ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $photo = Photo::find($id);
        if ($photo) {
            return $photo->delete();
        }
        return false;
    }
}
