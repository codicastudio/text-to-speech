<?php

return [

    /*
     * The disk on which to store converted mp3 files by default. Choose
     * one of the disks you've configured in config/filesystems.php.
     */
    'disk' => env('TTS_DISK', 'local'),

    /**
     * The default audio format of the converted text to speech audio file.
     * Currently, mp3 is the only supported format.
     */
    'output_format' => env('TTS_OUTPUT_FORMAT', 'mp3'),

    /**
     * The driver to be used for converting Text to Speech
     * You can choose polly, or null as of the moment.
     */
    'driver' => env('TTS_DRIVER', 'polly'),

    /**
     * The default language to be used.
     *
     * You can use either of these.
     *
     * arb, cmn-CN, cy-GB, da-DK, de-DE, en-AU, en-GB, en-GB-WLS, en-IN, en-US,
     * es-ES, es-MX, es-US, fr-CA, fr-FR, is-IS, it-IT, ja-JP, hi-IN, ko-KR, nb-NO,
     * nl-NL, pl-PL, pt-BR, pt-PT, ro-RO, ru-RU, sv-SE, tr-TR
     */
    'language' => env('TTS_LANGUAGE', 'en-US'),

    'audio' => [
        /**
         * Default path to store the output file.
         */
        'path' => 'TTS',

        /**
         * Default filename formatter.
         */
        'formatter' => \Cion\TextToSpeech\Formatters\DefaultFilenameFormatter::class,
    ],

    /**
     * The default source that will be used.
     */
    'default_source' => 'text',

    /**
     * The default text type to be used.
     *
     * You can use either text or ssml.
     */
    'text_type' => env('TTS_TEXT_TYPE', 'text'),

    /**
     * The source that can be used.
     * You can create your own source by implementing the Source interface.
     *
     * @see \Cion\TextToSpeech\Contracts\Source
     */
    'sources' => [
        'text'    => \Cion\TextToSpeech\Sources\TextSource::class,
        'path'    => \Cion\TextToSpeech\Sources\PathSource::class,
        'website' => \Cion\TextToSpeech\Sources\WebsiteSource::class,
    ],

    'services' => [
        'polly' => [
            /**
             * Voice ID to use for the synthesis.
             * You can use either of these.
             *
             * Aditi, Amy, Astrid, Bianca, Brian, Camila, Carla, Carmen, Celine,
             * Chantal, Conchita, Cristiano, Dora, Emma, Enrique, Ewa, Filiz,
             * Geraint, Giorgio, Gwyneth, Hans, Ines, Ivy, Jacek, Jan, Joanna,
             * Joey, Justin, Karl, Kendra, Kimberly, Lea, Liv, Lotte, Lucia,
             * Lupe, Mads, Maja, Marlene, Mathieu, Matthew, Maxim, Mia, Miguel,
             * Mizuki, Naja, Nicole, Penelope, Raveena, Ricardo, Ruben, Russell,
             * Salli, Seoyeon, Takumi, Tatyana, Vicki, Vitoria, Zeina, Zhiyu.
             */
            'voice_id' => env('AWS_VOICE_ID', 'Amy'),

            /**
             * IAM Credentials from AWS.
             */
            'credentials' => [
                'key'     => env('AWS_ACCESS_KEY_ID', ''),
                'secret'  => env('AWS_SECRET_ACCESS_KEY', ''),
            ],

            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'version' => 'latest',
        ],
    ],

];
