<?php

namespace App\Traits;

use App\Models\Designation;
use App\Models\ResourceHasAccess;

trait HasResourceAccess
{
    public static function can(string $action, $record = ''): bool
    {
        return (new static)->hasAccess(get_class(new self));
    }

    private function hasAccess($resource): bool
    {
        $designation = auth()->user()->designation;
        $resourceAccesses = ResourceHasAccess::where('resource_class', $resource)->get();
        if ($resourceAccesses->isEmpty()) {
            return false;
        }

        foreach ($resourceAccesses as $access) {
            $roles = json_decode($access->role_ids, true);
            if (! is_array($roles)) {
                $haveAccess = $this->haveAccess($roles, $designation);
                if ($haveAccess) {
                    return true;
                } else {
                    continue;
                }
            }
            foreach ($roles as $role) {
                $haveAccess = $this->haveAccess($role, $designation);
                if ($haveAccess) {
                    return true;
                }
            }
        }

        return false;
    }

    private function haveAccess($role, $designation): bool
    {
        $user_designation = Designation::find($role);
        if (! $user_designation) {
            return false;
        }
        if ($user_designation->designation == $designation) {
            return true;
        }
    }
}
