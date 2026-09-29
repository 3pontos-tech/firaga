<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'posthog' => [
        'api_key' => env('POSTHOG_API_KEY'),
        'host' => env('POSTHOG_HOST', 'https://us.i.posthog.com'),
    ],

    'google_tag_manager' => [
        'container_id' => env('GOOGLE_TAG_MANAGER_ID'),
    ],

    'gohighlevel' => [
        'base_url' => env('GOHIGHLEVEL_BASE_URL', 'https://services.leadconnectorhq.com'),
        'api_version' => env('GOHIGHLEVEL_API_VERSION', 'v3'),
        'token' => env('GOHIGHLEVEL_API_TOKEN'),
        'location_id' => env('GOHIGHLEVEL_LOCATION_ID'),
        'pipeline_id' => env('GOHIGHLEVEL_PIPELINE_ID'),
        'pipeline_stage_id' => env('GOHIGHLEVEL_PIPELINE_STAGE_ID'),
        'calendar_id' => env('GOHIGHLEVEL_CALENDAR_ID'),
        'source' => env('GOHIGHLEVEL_LEAD_SOURCE', 'FireSite - Modal WhatsApp'),
        'tags' => array_filter(explode(',', (string) env('GOHIGHLEVEL_LEAD_TAGS', 'firesite,lead-site-whatsapp'))),
        'default_whatsapp_url' => 'https://api.whatsapp.com/send/?phone=5511958397432&text=Visitei+o+site+da+Fire%7Cce+e+quero+mais+informa%C3%A7%C3%B5es&type=phone_number&app_absent=0',
        'custom_fields' => [
            'situation' => 'contact.situacao_financeira',
            'goal' => 'contact.objetivo_financeiro',
            'availability' => 'contact.melhor_horario',
            'origin_page' => 'contact.pagina_de_origem',
            'origin_label' => 'contact.botao_de_origem',
            'utm_source' => 'contact.utm_source',
            'utm_medium' => 'contact.utm_medium',
            'utm_campaign' => 'contact.utm_campaign',
            'utm_content' => 'contact.utm_content',
            'utm_term' => 'contact.utm_term',
            'gclid' => 'contact.gclid',
            'gbraid' => 'contact.gbraid',
            'wbraid' => 'contact.wbraid',
        ],
    ],

];
