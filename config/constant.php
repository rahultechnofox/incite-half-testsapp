<?php
    return[
        'pagination' => 20,
        'api_pagination' => 20,
        'common' => [
            'messages' => [
                'success_add' => 'Record added successfully.',
                'success_update' => 'Record updated successfully.',
                'success_fetch' => 'Record fetched successfully.',
                'success_delete' => 'Record deleted successfully.',
                'error' => 'Error while processing operation',
                'credential_not_found' =>'Credential not found',
                'invalid_email_password' =>'Invalid email and password',
                'you_have_successfully_logged_in' => 'You have successfully logged in',
                'your_account_has_been_suspended' => 'Your account has been suspended',
            ]
        ],
        'voice_accent' => ['ar','bn-BD','bn-IN','bs','ca','cs-CZ','cy','da-DK','de-DE','el-GR','en-AU','en-GB','en-IN','en-NG','en-US','es-ES','es-US','et-EE','fil-PH','fi-FI','fr-CA','fr-FR','gu-IN','hi-IN','hu-HU','id-ID','it-IT','ja-JP','jv-ID','km-KH','kn-IN','ko-KR','ku','la','ml-IN','mr-IN','nb-NO','ne-NP','nl-NL','pl-PL','pt-BR','pt-PT','ro-RO','ru-RU','si-LK','sk-SK','sq','sr','su-ID','sv-SE','sw','ta-IN','te-IN','th-TH','tr-TR','uk-UA','ur-PK','vi-VN','yue-HK','zh-CN','zh-TW'],
        'font_family' => [ 
            'Times New Roman',
            'serif',
            'Times',
            'Arial',
            'Helvetica',
            'sans-serif',
            'Lucida Console',
            'Courier New',
            'monospace',
            'cursive',
            'Brush Script MT',
        ],
        'speech_voice'=> [
            "en-gb-x-gbb-network"=>"Harry", 
            "en-gb-x-gbb-local"=>"Elizabeth",
            "en-gb-x-gbc-local"=>"Serena",
            "en-GB-language"=>"James",
            "en-gb-x-gba-network"=>"Charlotte",
            "en-gb-x-rjs-network"=>"William",
            "en-gb-x-gba-local"=>"Mia",
            "en-gb-x-rjs-local"=>"Oliver",
            "en-gb-x-gbg-local"=>"Isla",
            "en-gb-x-gbd-local"=>"Jack",
            "en-gb-x-gbd-network"=>"Daisy",
            "en-gb-x-gbc-network"=>"Dylan",
            "en-gb-x-gbg-network"=>"Poppy",
        ],
        'news_api_language' => [ 
            'en'=>'English',
            'ar'=>'Arabic',
            'de'=>'German',
            'es'=>'Spanish',
            'fr'=>'French',
            'he'=>'Hebrew',
            'it'=>'Italian',
            'nl'=>'Dutch',
            'no'=>'Norwegian',
            'pt'=>'Portuguese',
            'ru'=>'Russian',
            'se'=>'Northern Sami',
            'ud'=>'ud',
            'zh'=>'Chinese'
        ],
    ]
?>