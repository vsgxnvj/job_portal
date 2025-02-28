<?php
namespace App\Services;

class Notify
{
    static function createdNotification()
    {
        // Created Notifcation
        return notify()->success('Created Successfuly', 'Success!');
    }

    static function updatedNotification()
    {
        // Updated Notifcation
        return notify()->success('Updated Successfuly', 'Success!');
    }

    static function deletedNotification()
    {
        // Deleted Notifcation
        return notify()->success('Deleted Successfuly', 'Success!');
    }
}