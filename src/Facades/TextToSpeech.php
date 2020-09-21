<?php

namespace Cion\TextToSpeech\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void convert($data, array $options)
 * @method static \Cion\TextToSpeech\Contracts\Converter saveTo(string $path)
 * @method static \Cion\TextToSpeech\Contracts\Converter disk(string $disk)
 * @method static \Cion\TextToSpeech\Contracts\Converter source(string $source)
 * @method static \Cion\TextToSpeech\Contracts\Converter language(string $language)
 * @method static \Cion\TextToSpeech\Contracts\Converter ssml()
 */
class TextToSpeech extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'tts';
    }
}
