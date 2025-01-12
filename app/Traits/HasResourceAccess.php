<?php

namespace App\Traits;

use App\Models\ResourceHasAccess;

trait HasResourceAccess
{
    public static function can(string $action, $record = ''): bool
    {
        return (new static)->hasAccess(get_class(new self));
    }

    private function hasAccess($resource): bool
    {
        $designation_id = auth()->user()->designation;
        $resourceAccesses = ResourceHasAccess::where('resource_class', $resource)->get();
        if ($resourceAccesses->isEmpty()) {
            return false;
        }

        foreach ($resourceAccesses as $access) {
            $roles = json_decode($access->role_ids, true);
            if (! is_array($roles)) {
                $haveAccess = $this->haveAccess($roles, $designation_id);
                if ($haveAccess) {
                    return true;
                } else {
                    continue;
                }
            }
            foreach ($roles as $role) {
                $haveAccess = $this->haveAccess($role, $designation_id);
                if ($haveAccess) {
                    return true;
                }
            }
        }

        return false;
    }

    private function haveAccess($role, $designation_id): bool
    {
        return $role === $designation_id;
    }
}
