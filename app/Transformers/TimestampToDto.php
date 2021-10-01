<?php namespace App\Transformers;

class TimestampToDto{
    public static function provideTimestamp() {
        return time();
    }
}