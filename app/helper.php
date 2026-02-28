<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

if (!function_exists('format_date')) {
    function format_date($date)
    {
        return \Carbon\Carbon::parse($date)->format('d M Y');
    }
}

if (!function_exists('format_datetime')) {
    function format_datetime($date)
    {
        return \Carbon\Carbon::parse($date)->format('d M Y h:i A');
    }
}

if (!function_exists('short_text')) {
    function short_text($text, $limit = 50)
    {
        return Str::limit($text, $limit);
    }
}

if (!function_exists('hash_password')) {
    function hash_password($password)
    {
        return Hash::make($password);
    }
}

if (!function_exists('status_badge')) {
    function status_badge($status)
    {
        return $status
            ? '<span class="badge bg-success">Active</span>'
            : '<span class="badge bg-danger">Inactive</span>';
    }
}

if (!function_exists('success_msg')) {
    function success_msg($message = 'Success!')
    {
        return '<div class="alert alert-success">'.$message.'</div>';
    }
}

if (!function_exists('error_msg')) {
    function error_msg($message = 'Something went wrong!')
    {
        return '<div class="alert alert-danger">'.$message.'</div>';
    }
}

if (!function_exists('player_full_name')) {
    function player_full_name($player)
    {
        return $player->first_name . ' ' . $player->last_name;
    }
}

if (!function_exists('country_flag')) {
    function country_flag($country)
    {
        $flags = [
            'Bangladesh' => '🇧🇩',
            'India' => '🇮🇳',
            'USA' => '🇺🇸',
        ];

        return $flags[$country] ?? '🌍';
    }
}

if (!function_exists('jersey_badge')) {
    function jersey_badge($number)
    {
        return '<span class="badge bg-dark">#'.$number.'</span>';
    }
}

if (!function_exists('confirm_delete')) {
    function confirm_delete($url)
    {
        return "onclick=\"return confirm('Are you sure to delete?')\" href='{$url}'";
    }
}